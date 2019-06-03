<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UsersStoreRequest;
use App\Models\Admin\Users;
use App\Models\Admin\Role;

use Storage;
use Hash;
use DB;

class UsersController extends Controller
{
	/**
	 * 在管理员浏览页添加角色页面
	 */
	public function users_role(Request $request)
	{
		$uid = $request->id;
        $us = Users::find($uid);
        //获取所有的角色
        $roles = Role::all();
        //查找当前登录的管理员 具有哪些角色 关系：多对多
        $ur = $us->users_role()->get();

        $urr = [];
        foreach($ur as $k => $v){
            $urr[] = $v->id;
        }
        
		return view('admin.users.usersrole',['title'=>'用户角色的页面','us'=>$us,'roles'=>$roles,'urr'=>$urr]);
	}
	/**
	 * 处理用户和角色
	 */
	public function do_users_role(Request $request)
	{
		// $rs = $request->all();
		// dd($rs);
		//获取用户的id
        $uid = $request->id;
        //根据用户的id把user_role里面的相关信息 进行删除
        DB::table('users_role')->where('usersid',$uid)->delete();
        //获取角色的id
        $rid = $request->roleid;
        //遍历角色
        $ur = [];
        foreach($rid as $k => $v){
            $arr = [];
            $arr['usersid'] = $uid;
            $arr['roleid'] = $v;

            $ur[] = $arr;
        }
        //往数据表user_role里面添加数据
        $data = DB::table('users_role')->insert($ur);

        if($data){
            return redirect('/admin/users')->with('success','角色修改成功');
        } else {
            return back()->with('error','角色修改失败');
        }

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$rs = Users::orderBy('uid','asc')

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
			->paginate($request->input('num', 5));
		//显示一个列表页
		return view('admin.users.index',['title'=>'管理员列表页面','rs'=>$rs,'request'=>$request]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//显示页面
		return view('admin.users.create',['title'=>'管理员添加页面']);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(UsersStoreRequest $request)
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
		$rs = Users::create($rs);
		if($rs){
			//跳转
			DB::commit();
			return redirect('admin/users')->with('success','添加成功');
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
		$users = Users::find($id);
		//显示页面
		return view('admin.users.edit',['title'=>'管理员修改页面','users'=>$users]);
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
			$res = Users::find($id);
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
			$data = Users::where('uid',$id)->update($rs);
			if($data){
				return redirect('/admin/users')->with('success','修改成功');
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
			$data = Users::where('uid',$id)->update($rs);
			if($data){
				return redirect('/admin/users')->with('success','修改成功');
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
		$user = Users::find($id);
		//获取图片路径

			$dad = @unlink('.'.$user->uface);
			if(!$dad){
				return back()->with('error','删除图片失败');
			}

		$data = $user->uface;
		//$rs = Storage::delete($data);
		// dd($re);
		//根据id删除数据
		$data = Users::destroy($id);
		if($data){
			return redirect('/admin/users')->with('success','删除成功');
		} else {
			return back()->with('error','删除失败');
		}
	}
}
