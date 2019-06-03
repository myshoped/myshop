<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\Role;
use App\Models\Admin\Permission;

use DB;

class RoleController extends Controller
{
    /**
     * 角色权限页面
     */
    public function role_per(Request $request)
    {
        //获取角色的id
        $rid = $request->rid;
        //查找角色名
        $res = Role::find($rid);
        //获取所有的权限信息
        $pers = Permission::all();
        //根据角色查找相对应的权限
        $rp = $res->role_per()->get();
        //遍历查询到的权限
        $arr = [];
        foreach($rp as $k => $v){
            $arr[] = $v->id;
        }
        //显示
        return view('admin.role.roleper',['title'=>'角色权限页面','res'=>$res,'pers'=>$pers,'arr'=>$arr]);
    }

    /**
     * 处理角色权限
     */
    public function doroleper(Request $request)
    {
        // $rs = $request->all();
        // dd($rs);

        //获取角色id
        $rid = $request->rid;
        //根据用户的id把role_per里面的相关信息 进行删除
        DB::table('role_per')->where('roleid',$rid)->delete();
        //获取权限的id
        $perid = $request->perid;
        
        $prr = [];
        //遍历 权限id的遍历
        foreach($perid as $k => $v){
            $arr = [];
            $arr['roleid'] = $rid;
            $arr['perid'] = $v;

            $prr[] = $arr;
        }
        //往role_per表里面添加数据  
        $data = DB::table('role_per')->insert($prr);

        if($data){
            return redirect('/admin/role')->with('success','添加权限成功');
        } else {
            return back()->with('error','添加失败');
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rs = Role::where('rolename','like','%'.$request->rolename.'%')->paginate($request->input('num', 5));
        return view('admin.role.index',['title'=>'角色的列表页面','rs'=>$rs,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示页面
        return view('admin.role.create',['title'=>'角色添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rs = $request->except('_token');
        try{
            $data = Role::create($rs);
            if($data){
                return redirect('/admin/role')->with('success','添加成功');
            }
        }catch(\Exception $e){
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
        //获取单条id信息
        $rs = Role::find($id);
        return view('admin.role.edit',['title'=>'角色的修改页面','rs'=>$rs]);
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
        $rs = $request->except('_token','_method');
        $data = Role::where('id',$id)->update($rs);
        if($data){
            return redirect('/admin/role')->with('success','修改成功');
        } else {
            return back()->with('error','修改失败');
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
        //获取id信息并删除
        $data = Role::destroy($id);
        if($data){
            return redirect('/admin/role')->with('success','删除成功');
        } else {
            return back()->with('error','修改成功');
        }
    }

    /**
     * 无权限跳回页面
     */
    public function power()
    {
        return view('admin.layout.power',['title'=>'权限不足']);
    }
}
