<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\order;
use DB;

class DingdanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取登录用户的订单
        $uid = session('uid');
        //查询该用户下的所有订单
        $rs = order::where('user_id',$uid)->get();
        //发送数据到前台页面
        return view('/home/dingdan/index',['title'=>'订单页','rss'=>$rs]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    //订单收货
    public function shouhuo($id)
    {
        //
         $rs = order::where('id',$id)->update(['status' => '3']);
        return redirect("/homes/dingdan");
       
    } 

    //删除订单
    public function shanchu($id)
    {
       //订单表数据
       $order = order::find($id);
       //订单详情表数据
       //$order->hasManyorder;
       $res = $order->hasManyorder()->delete();
       $success = $order->delete();
       return redirect("/homes/dingdan");
         
        
       
    }
       
}
