<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\Collects;
use App\Models\Admin\Goods;

class CollectsController extends Controller
{
    //
    /**
     * 后台浏览收藏
     */
    public function index(Request $request)
    {
    	$sousuo = $request->input('sousuo');
        $paginte = $request->input('paginte','1');
        if(isset($sousuo)){
        	$data = Collects::where('id','=',$sousuo)->paginate($paginte);
        }else{
        	$data = Collects::paginate($paginte);
        }
    	
    	
    	//dump($data);
    	// foreach($data as $k=>$v)
    	// {
    	// 	dump($v->goods);
    	// }

    	//显示模板
    	return view('admin.collect.index',['data'=>$data,'sousuo'=>$request->all(),'title'=>'收藏浏览']);
    }

    /**
     * 前台浏览收藏
     */

    public function look()
    {
    	

    	//拿去数据
    	$data = Collects::all();
        // foreach($data as $k=>$v)
        // {
        //     dump($v->goods->gname);
        // }
        //dump($data);
        //热门推荐
        $remen = Goods::orderBy('sales','desc')->limit(6)->get();
// dd();
    	return view('home.collect.look',['title'=>'我的收藏','data'=>$data,'remen'=>$remen]);
    }

    /**
     * 前台收藏删除
     */

    public function del(Request $request)
    {
    	$id = $request->input('id');
    	$res = Collects::destroy($id);

    	if($res){
            echo "success";
        }else{
            echo 'error';
        }
    }
}
