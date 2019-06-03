<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //查询购物车中的所有数据
        //dump($request->all());
        
        $rs = car::all();
        

      
        
        

         //每页信息数
        $data = $request->input('paginte', '10');
        // 搜索框值
        $data2 = $request->input('sousuo');
        

        $data = Car::where('id', 'like', '%' . $data2 . '%')->paginate($data);



        // 显示数据
        return view('admin/car/index',['title' => '购物车管理','rs' => $rs,'rss'=>$data,'sousuo'=>$request->all()]);



        //dd($rs);
        
        // //查询id对应用户的信息
        // $car = Car::find($id)->select()->first();
        // //dd($car);
        
        // //查询id对应的用户信息
        // $user = Car::find($id)->hasOneuser->first();
        

        // //查询id对应商品标的信息
        // $goods = Car::find($id)->hasManygoods;
        
        // // 把数据发送到前台              
      
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

   
}
