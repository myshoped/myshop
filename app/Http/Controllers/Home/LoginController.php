<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use App\Models\admin\User;
use Hash;
use DB;

class LoginController extends Controller
{
	/**
	 * 显示登陆页面
	 */
   public function login()
   {
    	return view('home.login.denglu',['title'=>'国商-登录']);
   }
   /**
      * 验证码
      */
      public function captcha()
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
    * 处理登陆信息->账号登陆
    */
   public function ulogin(Request $request)
   {
    	$um = $request->uname;
   	//根据用户名作对比
   	$rs = DB::table('user')->where('uname',$um)->first();
   	//判断是否激活
      if($rs->status == 0){
         return back()->with('error','登录失败,请到您注册时的邮箱进行激活操作！');
      }
      //判断账号
      if(!$rs){
   		return back()->with('error','账号或密码错误');
   	}
   	//对比密码
   	$pass = $rs->upwd;
   	if(!Hash::check($request->upwd,$pass)){
   	return back()->with('error','账号或密码错误');
   	}
      //验证码
      $code = session('code');
      if($code != $request->code){
         return back()->with('error','验证码错误');
      }
   	//存储用户信息
   	session(['id'=>$rs->id]);
      // echo session('id');die;
   	return redirect('/')->with('success','登录成功');
   }
   /**
    * 处理登陆信息->手机号号登陆
    */
   public function plogin(Request $request)
   {
      $ph = $request->phone;
      //根据用户名作对比
      $rs = DB::table('user')->where('phone',$ph)->first();
      if(!$rs){
         return back()->with('error','手机号或密码错误');
      }
      //对比密码
      $pass = $rs->upwd;
      if(!Hash::check($request->upwd,$pass)){
      return back()->with('error','手机号或密码错误');
      }
      //验证码
      $code = session('code');
      if($code != $request->code){
         return back()->with('error','验证码错误');
      }
      //存储用户信息
      session(['id'=>$rs->id]);
      return redirect('/')->with('success','登录成功');
   }
   /**
    * 处理登陆信息->手机号号登陆
    */
   public function elogin(Request $request)
   {
      $em = $request->email;
      //根据用户名作对比
      $rs = DB::table('user')->where('email',$em)->first();
      if(!$rs){
         return back()->with('error','邮箱或密码错误');
      }
      //对比密码
      $pass = $rs->upwd;
      if(!Hash::check($request->upwd,$pass)){
      return back()->with('error','邮箱或密码错误');
      }
      //验证码
      $code = session('code');
      if($code != $request->code){
         return back()->with('error','验证码错误');
      }
      //存储用户信息
      session(['id'=>$rs->id]);
      return redirect('/')->with('success','登录成功');
   }
   /**
    * 退出
    */
   public function logout()
   {
      //清除session
         session(['id'=>'']);
         //重定向
         return redirect('/home/login')->with('success','退出成功');
   }
}
