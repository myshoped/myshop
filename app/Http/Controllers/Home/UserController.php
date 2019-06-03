<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\User;

use DB;



class UserController extends Controller
{
    /**
     * 显示个人中心
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('user')->where('id',session('id'))->first();
        return view('home.user.index',['title'=>'个人中心','user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * 修改个人信息
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('home.user.edit', ['title'=>'个人中心','user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $rs = $request->all();
        // dd($rs);
        if($request->file('uface')){
            //先删除老的图片
            $res = User::find($id);
            if (!empty($res->uface)) {
                    $dad = @unlink('.'.$res->uface);
                if(!$dad){
                    return back()->with('error','删除图片失败');
                }
            }
           
            //获取数据
            $rs = $request->except('_token','_method');
            //处理头像
            if($request->hasFile('uface')){
                //获取图片上传的信息
                $file = $request->file('uface');
                //名字
                $name = 'img_'.rand(1111,9999).time();
                //获取后缀
                $suffix = $file->getClientOriginalExtension();
                $file->move('./public/images/uploads',$name.'.'.$suffix);
                $rs['uface'] = '/public/images/uploads/'.$name.'.'.$suffix;
            }
            //修改数据
            $data = User::where('id',$id)->update($rs);
            if($data){
                return redirect('/home/user')->with('success','修改成功');
            } else {
                return back()->with('error','修改失败');
            }
        }else{
            //获取数据
            $rs = $request->except('_token','_method');
            //处理头像
            if($request->hasFile('uface')){
                //获取图片上传的信息
                $file = $request->file('uface');
                //名字
                $name = 'img_'.rand(1111,9999).time();
                //获取后缀
                $suffix = $file->getClientOriginalExtension();
                $file->move('./public/images/uploads',$name.'.'.$suffix);
                $rs['uface'] = '/public/images/uploads/'.$name.'.'.$suffix;
            }
            //修改数据
            $data = User::where('id',$id)->update($rs);
            if($data){
                return redirect('/home/user')->with('success','修改成功');
            } else {
                return back()->with('error','修改失败');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
