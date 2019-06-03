<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use App\Http\Requests\UserStoreRequest;

use Storage;
use Hash;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rs = User::orderBy('id','asc')

            ->where(function($query) use($request){
                //检测关键字
                $uname = $request->input('uname');
                $email = $request->input('email');
                //如果用户名不为空
                if(!empty($uname)) {
                    $query->where('uname','like','%'.$uname.'%');
                }
                //如果邮箱不为空
                if(!empty($email)) {
                    $query->where('email','like','%'.$email.'%');
                }
            })
            ->paginate($request->input('num', 10));
        //显示一个列表页
        return view('admin.user.index',['title'=>'用户列表页面','rs'=>$rs,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示页面
        return view('admin.user.create',['title'=>'用户添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        DB::beginTransaction();
        //获取表单传过来的数据
        $rs = $request->except('_token','uface','repassword');
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
        //对密码进行hash加密
        $rs['upwd'] = Hash::make($request->upwd);
        //往数据库里面进行添加数据
        $rs = User::create($rs);
        if($rs){
            //跳转
            DB::commit();
            return redirect('/admin/user')->with('success','添加成功');
        } else {
            DB::rollBack();
            return back()->with('error','添加失败');
        }
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //根据ID获取数据
        $user = User::find($id);
        // $abc = $user->sex;
        // echo $abc;
        // dd();
        //显示页面
        return view('admin.user.edit',['title'=>'用户修改页面','user'=>$user]);
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
            $dad = @unlink('.'.$res->uface);
            if(!$dad){
                return back()->with('error','删除图片失败');
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
                return redirect('/admin/user')->with('success','修改成功');
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
                return redirect('/admin/user')->with('success','修改成功');
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
        //利用 模型   find获取id的数据
        $user = User::find($id);

        $dad = @unlink('.'.$user->uface);
            if(!$dad){
                return back()->with('error','删除图片失败');
            }
        //获取图片路径
        $data = $user->uface;
        //$rs = Storage::delete($data);
        // dd($rs);
        //根据id删除数据
        $data = User::destroy($id);
        if($data){
            return redirect('/admin/user')->with('success','删除成功');
        } else {
            return back()->with('error','删除失败');
        }
    }
}
