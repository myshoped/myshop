<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use App\Http\Requests\UsersupdateRequest;


use DB;
use Hash;

class UpwdController extends Controller
{
    /**
     * 显示修改密码页面
     */
    public function upwd()
    {
    	$user = DB::table('user')->where('id',session('id'))->first();
    	return view('home.upwd.index',['title'=>'修改密码','user'=>$user]);
    }
    /**
     * 处理提交过来的数据
     */
    public function doupwd(UsersupdateRequest $request)
    {
    	// $rs = $request->all();
    	// dd($rs);
    	//获取旧密码
        $upwd = $request->oldupwd;
        //获取当前用户的信息
        $rs = DB::table('user')->where('id',session('id'))->first();
        //Hash解密
        if(!Hash::check($upwd,$rs->upwd )){
            return back()->with('error','旧密码填写有误');
        }
        //获取密码
        $res['upwd'] = Hash::make($request->upwd);
        $data = DB::table('user')->where('id',session('id'))->update($res);
        if($data){
        //清空session
        	session(['id'=>'']);
            return redirect('/home/login')->with('success','密码修改成功');
        } else {
        	return back()->with('error','密码修改失败');
        }
    }
}