<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use App\Models\Admin\Goods_types;
use App\Models\Admin\Goods;
use App\Models\Admin\Rounds;
use App\Http\Controllers\Home\GoodsController;

use DB;

class DefaultsController extends Controller
{
    /**
     *  无限极分类的递归
     *
     * @return \Illuminate\Http\Response
     */
    public static function getType($pid)
    {
        
        //前台的遍历
        /*foreach ($rs as $key => $value) {
            # code...

            foreach ($v->sub_type as $key => $value) {
                # code...

                foreach ($v->sub_type as $key => $value) {
                    # code...
                }
            }
        }*/

        //获取顶级的分类
        $cate = Goods_types::where('pid',$pid)->get();
        
        $arr = [];

        foreach($cate as $k=>$v){

            if($v->pid==$pid){

                $v->sub=self::getType($v->id);

                $arr[]=$v;
            }
        }  
        return $arr;
    }

    /**
     * 加载前台浏览模板
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$pid = 0)
    {
        //获取登录信息
        $rs = DB::table('user')->where('id',session('id'))->first();
        
          //友情链接
        $links = DB::table('youqing')->get();

        //轮播图
        // $a = 7;
        // $b = 8;
        // $c = 9;
        // $d = 10;
        // $one = Rounds::find($a);
        // $two = Rounds::find($b);
        // $three = Rounds::find($c);
        // $fore = Rounds::find($d);

        $lun = Rounds::where('status','=','1')->orderBy('status','desc')->limit(4)->get();
        //dump($lun);
        // foreach($lun as $k=>$v)
        // {
        //     dump($v->url);
        // }

        //商品各种活动
        $arr = self::getType($pid);

        //压入登录用户的id
        //session(['uid' => '1']);

        // 前台首页火爆商品/新商品
        $a = 2;//手机
        $b = 7;//母婴
        $c = 10;//鲜花

        //查类别
        $aa = Goods_types::find($a);
        $aa = $aa->cname;//手机

        $bb = Goods_types::find($b);
        $bb = $bb->cname;//母婴

        $cc = Goods_types::find($c);
        $cc = $cc->cname;//鲜花

        //查数据
        //实例化GoodsController对象
        $goods = new GoodsController;
        $data0 = $goods::common($a);
        $data1 = $goods::common($b);
        $data2 = $goods::common($c);
        // $data = self::getType($a);
        // $data1 = self::getType($b);
        // $data2 = self::getType($c);
        // dump($data);

        //上架新品
        //$users = DB::table('users') ->whereBetween('votes', [1, 100])->get();
        //倒序取出20条新鲜商品
        $bet = Goods::orderBy('id','desc')->limit(10)->get();
        


        return view('home.layout.index',['title'=>'国商首页','arr'=>$arr,'data0'=>$data0,'data1'=>$data1,'data2'=>$data2,'aa'=>$aa,'bb'=>$bb,'cc'=>$cc,'bet'=>$bet,'lun'=>$lun,'links'=>$links,'rs'=>$rs]);
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
}
