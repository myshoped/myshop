<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Car;
use App\Models\Admin\order;
use DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //读取登录用户的id
        $uid = session('id');
        // dd($uid);
        //根据得到的uid查询购物车中的信息
        $goods = Car::where('uid','=',$uid)->get();

        //dd($goods);
        //将数据发送到前台
        return view('/home/car/index',['title'=>'结算页','goods'=>$goods]);

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

    //删除购物车的方法
    public function remcart(Request $request)
    {
        $gid = $request->gid;

        $res = DB::table('shop_cart')->where('gid',$gid)->delete();

        if($res){

            return response()->json(['success'=>'删除成功','code'=>1]);

        } else {

            return response()->json(['error'=>'删除失败','code'=>0]);
        }

       
    }
// 将购物车信息存到cook
    public function shmcart(Request $request)
    {

        $all = $request;
       
        $rs =  array_combine($all['gid'],$all['cnt']);

        session(['rs'=>$rs]);

        return view('home/car/addr');
        
    }

    //存储订单地址信息

    public function addr(Request $request)
    {
        
        //读取用户id
        $user_id = session('id');
        
        //商品id和数量
        $rs = session('rs');
 
        // 商品总价
        $sum = 0;

        //商品总数
        $cnt = 0;

        //查询商品单价($v是数量)
        foreach ($rs as $k => $v) {

           $dj = DB::table('goods')->where('id',$k  )->value("price");
           
           $sum += $dj * $v;

           $cnt += $v;


       }

        
        //收货人
        $rec = $request['rec'];

        //收货地址
        $addr = $request['addr'];
        //联系电话
        $tel = $request['tel'];

        //买家留言
        $umsg = $request['umsg'];

        //dump($umsg);
        //生成一个格式化时间戳
        $create_at = Date('Y-m-d H:i:s',time());

        //生成一个订单号
        $oid = time().rand(1111, 99999);

        //要查询到数据
        $chaxun=['sum' => $sum,'cnt' => $cnt,'user_id'=>$user_id,'rec' => $rec, 'addr' => $addr,'tel'=>$tel,'umsg' => $umsg,'create_at'=>$create_at,'oid'=>$oid];
        //操作订单主表
     
        $orders_id = DB::table('order')->insertGetId($chaxun);

        //遍历操作商品详情表($vv是数量)


        
        foreach ($rs as $kk => $vv) {
           
            $dj = DB::table('goods')->where('id',$kk  )->value("price");

            $price = 0;

            $price = $dj * $v;
            
            DB::table('order_info')->insert(['gid'=>$kk,'price'=>$price,'cnt'=>$vv, 'uid'=>$user_id,'orders_id'=>$orders_id]);

            
            //清空已购买的商品
           DB::table('shop_cart')->where('gid',$kk)->delete();

           
            
 }
            //查询订单表数据
         $aa = order::find($orders_id);
        //查询订单表详情数据   
         $bb = $aa->hasManyorder;



         session(['sid'=>$orders_id]);
         
            //返回确认收货信息
           return view('/home/car/again' ,['title'=>'收货信息页','rs1'=>$bb,'rss'=>$aa]);
        
    }

   /* //确认收货信息
    public function again()
    {


      

    }*/

    //订单完成
    public function ok(Request $re)
    {
       
       $sid = session('sid');
       
       
   $aa = order::where('id',$sid)->first();
        // //查询订单表数据   
       return view('/home/car/success',['rss'=>$aa,'title'=>'ok页']);
    }
}
