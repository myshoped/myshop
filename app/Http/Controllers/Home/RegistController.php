<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use App\Http\Requests\Home\RegistStoreRequest;
use App\Models\Admin\User;


use Mail;
use Hash;
use DB;

class RegistController extends Controller
{
    /**
     * 前台邮箱注册页
     */
    public function regist()
    {
    	return view('home.regist.regist',['title'=>'国商-注册']);
    }
    /**
     * 验证码
     */
    public function codes()
    {
    	$phrase = new PhraseBuilder;
		//设置验证码位数
		$code = $phrase->build(4);
		//生成验证码图片的Builder对象，配置相应属性
		$builder = new CaptchaBuilder($code, $phrase);
		//设置背景颜色
		$builder->setBackgroundColor(123, 203, 230);
		$builder->setMaxAngle(25);
		$builder->setMaxBehindLines(0);
		$builder->setMaxFrontLines(0);
		//可以设置图片宽高及字体
		$builder->build($width = 120, $height = 50, $font = null);
		// 获取验证码的内容
		$phrase = $builder->getPhrase();
		//把内容存入session
		session(['code'=> $phrase]);
		//生成图片
		header("Cache-Control: no-cache, must-revalidate");
		header("Content-Type:image/jpeg");
		$builder->output();
    }
    /**
     * 处理邮箱登录信息
     */
    public function doregist(RegistStoreRequest $request)
    {
        //验证-验证码
        $code = session('code');
        if($code != $request->code){
            return back()->with('error','验证码错误');
        }     
        //表单验证
        $rs = $request->except('_token','code','repassword');
        //对密码进行hash加密
        $rs['upwd'] = Hash::make($request->upwd);
        //添加token验证
        $rs['token'] = str_random(60);
        //往数据库里面进行添加数据
        $data = User::create($rs);
        //获取新添加的id号
        $abc = $data->id;
        //进行base64加密id
        $userid = base64_encode($abc);

        //注册成功发送邮件
        if($data){
            //emails.reminder --> 页面信息  MAIL_PASSWORD=null  是客户端授权密码不是登录密码
            Mail::send('home.regist.reminder', ['rs'=>$rs,'id'=>$userid], function ($m) use ($rs){
                $m->from(env('MAIL_USERNAME'), '国商');
                $m->to($rs['email'], $rs['uname'])->subject('账号激活');
            });
        }
        //发送成功的提示信息
        // echo 'ok';
        return view('home.regist.jihuo',['title'=>'友情提醒']);

    }
    /**
     * 邮件点击处理方法
     */
    public function doremind(Request $request)
    {
        //进行 base64 解密
        $id = base64_decode($request->id);
        //获取整条数据
        $res = DB::table('user')->where('id',$id)->first();

        $token = $request->token;
        //token对比
        if($token != $res->token){
            return view('home.regist')->with('error','验证码不正确，请您重新进行注册操作！');
        }
        $rs['status'] = '1';
        DB::table('user')->where('id',$id)->update($rs);
       
        //跳转
        return redirect('/home/queren');
    }

    /**
     * 点击邮件
     */
    public function queren()
    {
        return view('home.regist.queren',['title'=>'友情提醒']);
    }
}
