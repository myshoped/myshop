<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use App\Models\Admin\Users;
use App\Http\Requests\UsersupdateRequest;
use Session;

use DB;
use Hash;

class LoginController extends Controller
{
      /**
      * 后台登陆
      */
      public function login()
      {
      	return view('admin.login',['title'=>'后台登录']);
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
         $builder->build($width = 120, $height = 40, $font = null);
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
       * 处理登录页
       */
      public function dlogin(Request $request)
      {
      	// $rs = $request->all();
      	// dd($rs);
      	$um = $request->uname;
      	//根据用户名作对比
      	$rs = DB::table('users')->where('uname',$um)->first();
      	if(!$rs){
      		return back()->with('error','用户名或密码错误');
      	}
      	//对比密码
      	$pass = $rs->upwd;
      	if(!Hash::check($request->upwd,$pass)){
      	return back()->with('error','用户名或密码错误');
      	}
      	//验证码
      	$code = session('code');
      	if($code != $request->code){
      		return back()->with('error','验证码错误');
      	}
      	//存储用户信息
      	session(['uid'=>$rs->uid]);
      	return redirect('/admin')->with('success','登录成功');
      }
      /**
      * 显示修改头像
      */
      public function uface()
      {
         $rs = DB::table('users')->where('uid',session('uid'))->first();

         return view('admin.uface',[
           'title'=>'修改头像',
           'rs'=>$rs
         ]);
      }
      /**
      * 处理头像
      */
      public function upload(Request $request)
      {
      //先删除老的图片
      $res = DB::table('users')->where('uid',session('uid'))->first();
      $res = @unlink('.'.$res->uface);
         if(!$res){
            return back()->with('error','删除图片失败');
         }
      //获取表单传过来的数据
      $rs = $request->except('_token','uface');
      //处理文件上传
      if($request->hasFile('uface')){
          //获取文件上传的信息
          $file = $request->file('uface');
          //创建新的名字
          $name = 'img_'.rand(1111,9999).time();
          //获取文件的后缀
          $suffix = $file->getClientOriginalExtension();
          //移动  把上传的文件移动到哪去
          $file->move('./public/images/uploads/',$name.'.'.$suffix);
          //存储数据库
          $rs['uface'] = '/public/images/uploads/'.$name.'.'.$suffix;
      }
      // dd($rs);
      //往数据库里面进行添加数据
      $res = Users::where('uid',session('uid'))->update($rs);
         if($res){
             //跳转
             DB::commit();
             return redirect('/admin')->with('success','修改成功');
         } else {
             DB::rollBack();
             return back()->with('error','修改失败');
         }
      }
      /**
      * 显示修改密码页面
      */
      public function upwd()
      {
         $rs = DB::table('users')->where('uid',session('uid'))->first();
         return view('/admin.upwd',['title'=>'修改密码','rs'=>$rs]);
      }
      /**
       * 处理修改密码信息
       */
      public function doupwd(UsersupdateRequest $request)
      {
         //获取旧密码
         $upwd = $request->oldupwd;
         //获取当前用户的信息
         $rs = DB::table('users')->where('uid',session('uid'))->first();
         //Hash加密
         if(!Hash::check($upwd,$rs->upwd )){
            return back()->with('error','旧密码填写有误');
         }
         //获取密码
         $res['upwd'] = Hash::make($request->upwd);
         $data = DB::table('users')->where('uid',session('uid'))->update($res);
         if($data){
            //清空session
            session(['uid'=>'']);
            return redirect('/admin/logins')->with('success','修改成功');
         } else {
            return back()->with('error','修改失败');
         }
      }
      /**
      * 退出
      */
      public function logout()
      {
         //清除session
         session(['uid'=>'']);
         //重定向
         return redirect('/admin/logins')->with('success','退出成功');
      }
}
