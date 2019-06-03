<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Home\DefaultsController;
use App\Models\Admin\Goods_types;
use App\Models\Admin\Goods;
use App\Models\Admin\Collects;
use App\Models\Admin\Shop_cart;
use DB;

class GoodsController extends Controller
{
    /**
     * 生成分类搜索的公共头部
     */
    public static function common($id = 0)
    {
        //处理接收到的父级分类id
        $type = Goods_Types::where('path','like',"%,$id,%")->select('id')->get();
        $arr = [];
        foreach($type as $k=>$v)
        {
            $arr[] = $v->id;
        }
        $arr[] = (int)$id;
         //执行搜索
        $data = [];
        foreach($arr as $k=>$v){
            $data[] = Goods::where('goods_types_id',$v)->get();
        }

        return $data;
    }

    /**
     * 前台商品列表模板页
     */
    public function list(Request $request,$id = 0)
    {	
        //友情链接
        $links = DB::table('youqing')->get();
        //为热门商品推荐那数据
        $remen = Goods::orderBy('sales','desc')->limit(6)->get();
        //dump($remen);
        //列表详细分类
        // dump($id);


    	//实例化DefaultsController类
    	$de = new DefaultsController;

    	return view('home.goods.list',['data'=>self::common($id),'title'=>'商品列表页','arr'=>$de::getType(0),'tuijian'=>$de::getType($id),'remen'=>$remen,'links'=>$links]);
    	// return view('home.layout.index',['title'=>'商品列表页']);
    }
    /**
     * 加载商品详情页面
     */
    public function show($id)
    {

        //友情链接
        $links = DB::table('youqing')->get();
        // dd(session('uid'));
        //根据id查询数据

        $data = Goods::find($id);


        //類似商品推荐
        
        $ad = $data->goods_types_id;
        $go = Goods_types::find($ad);
        $pa = $go->pid;

        $date = self::common($pa);
        // dump($pa);
        // $type = Goods_Types::where('path','like',"%,$pa,%")->select('id')->get();
        // $arr = [];
        // foreach($type as $k=>$v)
        // {
        //     $arr[] = $v->id;
        // }
        // $arr[] = (int)$pa;
        

        //执行搜索
        // $date = [];
        // foreach($arr as $k=>$v){
        //     $date[] = Goods::where('goods_types_id',$v)->get();
        // }
        
        // dump($date);
        //dd($data->images);
        //$ver = $data->versions()->get();
        // foreach ($data->versions as $k => $v) {
        //     dd($v->version);
        // }
        //实例化DefaultsController类
        $de = new DefaultsController;

        return view('home.goods.details',['data'=>$data,'title'=>'商品详情页','arr'=>$de::getType(0),'date'=>$date,'links'=>$links]);
    }

    /**
     * 执行添加数据到购物车
     */
    public function cart(Request $request)
    {

        //接收数据
        $gid = $request->input('id');
        $number = $request->input('number');
        // //执行添加
        $shop_cart = New Shop_cart;
        $shop_cart->gid = $gid;
        $shop_cart->cnt = $number;
        $shop_cart->uid = session('id');
        $shop_cart->otime = Date('Y-m-d H:i:s',time());
        $res = $shop_cart->save();

        if($res){
            echo 'success';
        }else{
            echo 'error';
        }
        
            
    }

    /**
     * 推荐和列表的购物车 
     */
    public function two($id)
    {
       
        //接收数据
        $gid = $id;
        //执行添加
        $shop_cart = New Shop_cart;
        $shop_cart->gid = $gid;
        $shop_cart->cnt = 1;
        $shop_cart->uid = session('id');
        $shop_cart->otime = Date('Y-m-d H:i:s',time());
        $res = $shop_cart->save();
        if($res){
            echo "<script>alert('添加购物车成功!');history.back();</script>";
        }else{
            echo 'error';
        }
        
    }

    /**
     * 搜索引擎
     */
    public function sou(Request $request)
    {

         //友情链接
        $links = DB::table('youqing')->get();
        //热门推荐
        $remen = Goods::orderBy('sales','desc')->limit(6)->get();

        



        $sou = $request->input('search');
        $goo = Goods::where('gname','like','%'.$sou.'%')->get();
        //智能商品分类
        // foreach($goo as $k=>$v){
        //     dump($v->goods_types_id);
        // }
        //商品的goods_types_id
        $gid = $goo[0]->goods_types_id;
        //取类别表的数据
        $gos = Goods_types::find($gid);
        $pid = $gos->pid;

        //实例化DefaultsController类
        $de = new DefaultsController;
        return view('home.goods.soulist',['data'=>self::common(),'title'=>'商品列表页','arr'=>$de::getType(0),'goo'=>$goo,'sou'=>$sou,'remen'=>$remen,'tuijian'=>$de::getType($pid),'links'=>$links]);
    }

    /**
     * 执行数据收藏
     */
    public function collect(Request $request)
    {
        //接收数据
        $gid = $request->input('id');
        //执行添加
        $coll = New Collects;
        $coll->goods_id = $gid;
        
        $coll->users_id = session('id');
        
        $res = $coll->save();
        if($res){
            echo "success";
        }else{
            echo 'error';
        }




    }

    /**
     * 执行数据收藏--普通
     */
    public function collected(Request $request,$id)
    {
       
        
        //执行添加
        $coll = New Collects;
        $coll->goods_id = $id;
        
        $coll->users_id = session('uid');
        
        $res = $coll->save();
        if($res){
            echo "<script>alert('商品收藏成功!');history.back();</script>";
        }else{
            echo "<script>alert('商品收藏失败!');history.back();</script>";
        }

        
    }
}


