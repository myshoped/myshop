<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\Rounds;
use DB;

class RoundsController extends Controller
{
    /**
     * 显示添加模板
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Rounds::all();

        /*foreach($data as $k=>$v)
        {
            dump(explode(',',rtrim($v->files,',')));
        }*/
        //dump($data);
        //加载显示模板
        return view('admin.round.index',['data'=>$data]);

    }

    /**
     * 加载添加模板
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.round.create');

    }

    /**
     * 执行数据添加
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //将数据压入闪存;
        $request->flash();
        //处理上传数据
        //判断是否有文件上传
        if(!$request->file('images')){
            return back()->with('error','抱歉,请选择上传文件!');
        }
        //处理单上传文件
        $file = $request->file('images');
        
        //获取文件后缀
        $hou = $file->extension();
        //dd($hou);
        //创建新名字
        $names = '/uploads/images'.'/'.rand(1000,9999).time().'.'.$hou;
        
        $res = $file->storeAs('phone',$names);
        
       
       
        $brr = [];
        $brr['files'] = $names;
        //处理接收到的其他数据
        $brr['url'] = $request->input('url');
        //执行数据添加           
        $res = DB::table('rounds')->insert($brr);
        

        if($res){
            
            return redirect('/admin/round')->with('success','添加轮播成功!');
        }else{
            
            return back()->with('error','添加轮播失败!');
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
        //
    }

    /**
     * 执行修改数据库
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //处理上传数据
        if($request->file('images')){
            
             //删除图片所在的位置
            $res = Rounds::find($id);
            $data = @unlink('./public/phone'.$res->files);
                // if(!$data){

                //     echo '删除路径图片失败!';
                // }

            //处理单上传文件
            $file = $request->file('images');
            
            //获取文件后缀
            $hou = $file->extension();
            //创建新名字
            $names = '/uploads/images'.'/'.rand(1000,9999).time().'.'.$hou;
            
            $res = $file->storeAs('phone',$names);


            // goods添加数据
            //接收数据并生成数组
            $arr = [];
            $arr = $request->only(['url']);  
            //写入图片数据

            
            $arr['files'] = $names;
           
            // dump($id);
            // dd($arr);

            //开启事务
            // DB::beginTransaction();
            // $res = DB::table('goods')->insertGetId($arr);
            $res = DB::table('rounds')->where('id',$id)->update($arr);


            if($res){
                //提交事务
                    // DB::commit();
                return redirect('/admin/round')->with('success','修轮播改成功!');
            }else{
                //回滚事务
                    // DB::rollBack();
                return back()->with('error','修改轮播失败!');
            }
            
        }

         // goods添加数据
            //接收数据并生成数组
            $arr = [];
            $arr = $request->only(['url']);  
            //写入图片数据

            $rou = Rounds::find($id);
            $im = $rou->files;


            
            $arr['files'] = $im;
           
            // dump($id);
            // dd($arr);

            //开启事务
            // DB::beginTransaction();
            // $res = DB::table('goods')->insertGetId($arr);
            $res = DB::table('rounds')->where('id',$id)->update($arr);


            if($res){
                //提交事务
                    // DB::commit();
                return redirect('/admin/round')->with('success','修轮播改成功!');
            }else{
                //回滚事务
                    // DB::rollBack();
                return back()->with('error','修改轮播失败!');
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

    /**
     * 加载修改模板
     */

    public function edi($id)
    {
        $data = Rounds::find($id);

        return view('admin.round.edi',['data'=>$data]);
    } 

    /**
     * 删除数据
     */
    public function del(Request $request)
    {
        $id = $request->input('id');

        //3删除图片所在的位置
        $res = Rounds::find($id);
        $data = @unlink('./public/phone'.$res->files);
            if(!$data){

                echo '删除路径图片失败!';
            }
        //删除rouds数据

        $res = DB::table('rounds')->where('id','=',$id)->delete();

        //删除goods_details数据
        if($res){
           
            echo 'success';
            
        }else{
           
            echo 'error';
             
        }
    }

    /**
     * 开启状态
     */
    public function kai(Request $request)
    {
        $id =  $request->input('id');
        $rou = Rounds::find($id);

        //echo $rou->status;
        if($rou->status == '0'){
            $rou->status = '1';
            
        }else{
            $rou->status = '0';
            
        }
        $res = $rou->save();
        $rou1 = Rounds::find($id);
        $su = $rou1->status;
        // $res = $rou->save();

        if($res){
            echo $su;
        }else{
            echo 'error';
        }
    }

    /**
     * 关闭状态
     */
    public function guan(Request $request)
    {
        
    }
}
