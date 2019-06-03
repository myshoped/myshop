<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LianjieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //echo '123';
        $data = DB::table('youqing')->get();
        // dd($data);
        return view('admin/lianjie/index',['title'=>'友情链接','data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin/lianjie/lianjie',['title'=>'添加友情']);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        DB::table('youqing')->insert(
        ['name' => "$request->name", 'http' => "$request->http"]
                );
            
       
        return redirect("/admin/lianjie");
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
       $data = DB::table('youqing')->where('id','=',$id)->first();
       return view('admin/lianjie/update',['data' => $data,'title'=>'修改友情']);

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
        //
        //echo '123的'.$id;
        DB::table('youqing')->where('id', $id)->update(['name' => $request->name,'http' => $request->http]);
        
        return redirect("/admin/lianjie");
      // $rs['name']
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
        DB::table('youqing')->where('id', '=', $id)->delete();
        return redirect("/admin/lianjie");
    }

    public function del($id)
    {
        // dd(123);
        DB::table('youqing')->where('id',$id)->delete();
        return redirect("/admin/lianjie");
    }

}
