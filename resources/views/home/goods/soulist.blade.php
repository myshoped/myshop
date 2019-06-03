@extends('home.layout.index')
@section('sou')
<!-- Header center --> 
    <div class="header-center left"> 
     <div class="container"> 
      <div class="row"> 
       <!-- Logo --> 
       <div class="navbar-logo col-md-3 col-sm-12 col-xs-12"> 
        <a href="/"><img src="/assets/images/logo-white-bg@2x.png" title="Your Store" alt="Your Store" /></a> 
       </div> 
       <!-- //end Logo --> 
       <!-- Search --> 
       <div id="sosearchpro" class="col-sm-7 search-pro"> 
        <form action="/home/goods/sou" method="post" >
          {{ csrf_field() }} 
         <div id="search0" class="search input-group">

          <!-- <div class="select_category filter_type icon-select"> 
           <select class="no-border" name="category_id">
            <option value="0">All Categories</option> 
            <option value="78">Apparel</option> 
            <option value="77">Cables &amp; Connectors</option> 
            <option value="82">Cameras &amp; Photo</option> 
            <option value="80">Flashlights &amp; Lamps</option> <option value="81">Mobile Accessories</option> <option value="79">Video Games</option> <option value="20">Jewelry &amp; Watches</option> <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option> <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option> <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option> </select> 
          </div>  -->
          
          <input class="autosearch-input form-control" type="text" @if(isset($sou))  value="{{ $sou }}" @else  value="" @endif size="50"  placeholder="Search" name="search" id="search"/>   
          <span class="input-group-btn"> <input type="submit" class="button-search btn btn-primary" value="搜索" name="submit_search"><i class="fa fa-search" title="搜索" ></i>
            <!-- <script>
              function sou()
              {
                //alert('daas');
                var sou = $('#search').eq(0).val(); 
                $.post('/home/goods/sou',{
                  '_token':"{{ csrf_token() }}",
                  'sou':sou},function(mag){
                  alert(mag);
                  
                },'html');
              }
            </script> -->
          </button>
          </span> 
         </div> 
         <!-- <input type="hidden" name="route" value="product/search" /> --> 
        </form> 
       </div> 
       <!-- //end Search --> 
       <!-- Secondary menu --> 
       <div class="col-md-2 col-sm-5 col-xs-12 shopping_cart pull-right"> 
        <!--cart--> 
        <div id="cart" class=" btn-group btn-shopping-cart">

         <a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown"> 
          <div class="shopcart"> 
           <span class="handle pull-left"></span> 
           <span class="title">购物车</span> 
           <p class="text-shopping-cart cart-total-full">2 item(s) - $1,262.00 </p> 
          </div>
          </a> 
          
         <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu"> 
          <li> 
           <table class="table table-striped"> 
            <tbody> 
             <tr> 
              <td class="text-center" style="width:70px"> <a href="product.html"> <img src="/home/image/demo/shop/product/35.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview" /> </a> </td> 
              <td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td> 
              <td class="text-center"> x1 </td> 
              <td class="text-center"> $1,202.00 </td> 
              <td class="text-right"> <a href="product.html" class="fa fa-edit"></a> </td> 
              <td class="text-right"> <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a> </td> 
             </tr> 
             <tr> 
              <td class="text-center" style="width:70px"> <a href="product.html"> <img src="/home/image/demo/shop/product/141.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview" /> </a> </td> 
              <td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td> 
              <td class="text-center"> x1 </td> 
              <td class="text-center"> $60.00 </td> 
              <td class="text-right"> <a href="product.html" class="fa fa-edit"></a> </td> 
              <td class="text-right"> <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a> </td> 
             </tr> 
            </tbody> 
           </table> </li> 
          <li> 
           <div> 
            <table class="table table-bordered"> 
             <tbody> 
              <tr> 
               <td class="text-left"><strong>Sub-Total</strong> </td> 
               <td class="text-right">$1,060.00</td> 
              </tr> 
              <tr> 
               <td class="text-left"><strong>Eco Tax (-2.00)</strong> </td> 
               <td class="text-right">$2.00</td> 
              </tr> 
              <tr> 
               <td class="text-left"><strong>VAT (20%)</strong> </td> 
               <td class="text-right">$200.00</td> 
              </tr> 
              <tr> 
               <td class="text-left"><strong>Total</strong> </td> 
               <td class="text-right">$1,262.00</td> 
              </tr> 
             </tbody> 
            </table> 
            <p class="text-right"> <a class="btn view-cart" href="#"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="#"><i class="fa fa-share"></i>Checkout</a> </p> 
           </div> </li> 
         </ul> 
        </div> 
        <!--//cart--> 
       </div> 
      </div> 
     </div> 
    </div> 

    <!-- //Header center -->
@stop
@section('header') 
    <!-- Header Bottom --> 
    <div class="header-bottom"> 
     <div class="container"> 
      <div class="row">

       <!-- 分类处标记 -->
       <div class="col-md-3 col-sm-6 col-xs-12 "> 
        <div class="responsive so-megamenu "> 
         <div class="so-vertical-menu no-gutter compact-hidden"> 
          <nav class="navbar-default"> 
           <div class="container-megamenu vertical open"> 
            <div id="menuHeading"> 
             <div class="megamenuToogle-wrapper"> 
              <div class="megamenuToogle-pattern"> 
               <div class="container"> 
                <div> 
                 <span></span> 
                 <span></span> 
                 <span></span> 
                </div> 所有分类 

                <i class="fa pull-right arrow-circle fa-chevron-circle-up"></i> 
               </div> 
              </div> 
             </div> 
            </div> 
            <div class="navbar-header"> 
             <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt"> </button> 所有分类 
            </div> 
            <div class="vertical-wrapper"> 
             <span id="remove-verticalmenu" class="fa fa-times"></span> 
             <div class="megamenu-pattern"> 
              <div class="container"> 
               <ul class="megamenu">
                 @foreach($arr as $k=>$v) 
                <li class="item-vertical style1 with-sub-menu hover"> <p class="close-menu"></p> <a target="_blank" href="/home/goods/list/{{ $v->id }}" class="clearfix"> 
                  <span class="fa fa-home"></span> <span>{{ $v->cname }}</span> </a> 
                 <div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;"> 
                  <div class="content" style="display: none;"> 
                   <div class="row"> 
                    <div class="col-sm-12"> 
                     <div class="row">
                       @foreach($v->sub as $kk=>$vv) 
                      <div class="col-md-4 static-menu"> 
                       <div class="menu"> 
                        <ul> 
                         <li> <a target="_blank" href="/home/goods/list/{{ $vv->id }}" class="main-menu">{{ $vv->cname }}</a> 
                          <ul>
                            @foreach($vv->sub as $kkk=>$vvv) 
                           <li> <a target="_blank" href="/home/goods/list/{{ $vvv->id }}">{{ $vvv->cname }}</a>
                           </li>
                           <li> 
                            @endforeach 
                           </li>
                          </ul> 
                      </li> 
                        </ul> 
                       </div> 
                      </div>
                       @endforeach 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                 </div> 
             </li>
              @endforeach 
               </ul> 
              </div> 
             </div> 
            </div> 
           </div> 
          </nav> 
         </div> 
        </div> 
       </div> 
       <!-- 结束分类 -->

       <!-- Main menu --> 
       <div class="megamenu-hori header-bottom-right  col-md-9 col-sm-6 col-xs-12 "> 
        <div class="responsive so-megamenu "> 
         <nav class="navbar-default"> 
          <div class=" container-megamenu  horizontal"> 
           <div class="navbar-header"> 
            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> Navigation 
           </div> 
           <div class="megamenu-wrapper"> 
            <span id="remove-megamenu" class="fa fa-times"></span> 
            <div class="megamenu-pattern"> 
             <div class="container"> 
              <ul class="megamenu " data-transition="slide" data-animationtime="250"> 
               <li class="home hover"> <a href="">家 <b class="caret"></b></a> 
                <div class="sub-menu" style="width:100%;"> 
                 <div class="content"> 
                  <span>开发中,敬请期待...</span>
                </li> 
               <li class="with-sub-menu hover"> <p class="close-menu"></p> <a href="javascript:;" class="clearfix"> <strong>功能</strong> <span class="label"> Hot</span> <b class="caret"></b> </a> 
                <div class="sub-menu" style="width: 100%; right: auto;"> 
                 <div class="content"> 
                  <div class="row"> 
                    <span>开发中,敬请期待...</span>
                  </div> 
                 </div> 
                </div> </li> 
               <li class="with-sub-menu hover"> <p class="close-menu"></p> <a href="javascript:;" class="clearfix"> <strong>页面</strong> <span class="label"> Hot</span> <b class="caret"></b> </a> 
                <div class="sub-menu" style="width: 40%; "> 
                 <div class="content"> 
                  <span>开发中,敬请期待...</span> 
                 </div> 
                </div> </li> 
               <li class="with-sub-menu hover"> <p class="close-menu"></p> <a href="javascript:;" class="clearfix"> <strong>分类</strong> <span class="label"></span> <b class="caret"></b> </a> 
                <div class="sub-menu" style="width: 100%; display: none;"> 
                 <div class="content"> 
                  <span>开发中,敬请期待...</span> 
                   </li> 
               <li class="with-sub-menu hover"> <p class="close-menu"></p> <a href="javascript:;" class="clearfix"> <strong>饰品</strong> <b class="caret"></b> </a> 
                <div class="sub-menu" style="width: 100%; display: none;"> 
                 <div class="content" style="display: none;"> 
                  <span>开发中,敬请期待...</span>
                 </div> 
                </div> </li> 
               <li class=""> <p class="close-menu"></p> <a href="javascript:;" class="clearfix"> <strong>博客</strong> <span class="label"></span> </a> </li> 
               <li class="hidden-md"> <p class="close-menu"></p> <a href="javascript:;" class="clearfix"> <strong>买主题</strong> </a> </li> 
              </ul> 
             </div> 
            </div> 
           </div> 
          </div> 
         </nav> 
        </div> 
       </div>
       <!-- //end Main menu --> 
      </div> 
     </div> 
    </div>
@stop
@section('lunbo')
@stop
@section('body')
	<div class="main-container container">
  <ul class="breadcrumb">
    <li>
      <a href="javascript:;">
        <i class="fa fa-home" title="家导航"></i>
      </a>
    </li>
    <li>
      <a href="javascript:;">商品列表页</a></li>

  </ul>
  <div class="row">
    <!--Left Part Start -->
    <aside class="col-sm-4 col-md-3" id="column-left">
      <div class="module menu-category titleLine">
        <h3 class="modtitle">智能商品分类</h3>
        <div class="modcontent">
          <div class="box-category">
            <!-- 分类 -->
            <ul id="cat_accordion" class="list-group">
              @if(isset($tuijian))
              @foreach($tuijian as $a=>$b)

              <li class="hadchild cutom-parent-li">
                <a href="/home/goods/list/{{ $b->id }}" class="cutom-parent">{{ $b->cname }}
                  <span class="dcjq-icon"></span></a>
                
                <!-- <span class="button-view  fa fa-plus-square-o"></span> -->
                
              </li>
              @endforeach
              
              <span>doing...</span>
            @endif
              <!-- 结束 -->

            </ul>
            

          </div>
        </div>
      </div>
      <div class="module latest-product titleLine">
        <h3 class="modtitle"> 热门商品推荐 </h3>
        <div class="modcontent ">
          @foreach($remen as $k=>$v)
          <div class="product-latest-item transition" style="height:80px">
            <div class="media">
              <div class="media-left">
                <a target="_blank" href="/home/goods/details/{{ $v->id }}">
                  <img src="/public/images{{ $v->images }}" alt="Cisi Chicken" title="{{ $v->gname }}" class="img-responsive" style="width: 100px; height:82px;"></a>
              </div>
              <div class="media-body">
                <div class="caption">
                  <h4>
                    <a target="_blank" href="/home/goods/details/{{ $v->id }}"><p style="width: 100px; overflow:hidden;white-space:nowrap; text-overflow:ellipsis;">
                    {{ $v->gname }}
                  </p></a></h4>
                  <div class="price">
                    <span class="price-new">￥{{ $v->price }}</span></div>
                  <div class="ratings">
                    <div class="rating-box">
                      <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-1x"></i> 
                      </span>
                      <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-1x"></i>
                        
                      </span>
                      <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-1x"></i>
                        
                      </span>
                      <span class="fa fa-stack">
                        <i class="fa fa-star-o fa-stack-1x"></i>
                        
                      </span>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="module">
        <div class="modcontent clearfix">
          <div class="banners">
            <div>
              <a href="#">
                <img src="/home/image/demo/cms/left-image-static.png" alt="left-image"></a>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <!--Left Part End -->
    <!--Middle Part Start-->
    <div id="content" class="col-md-9 col-sm-8">
      <div class="products-category">
        <div class="category-derc">
          <div class="row">
            <div class="col-sm-12">
              <div class="banners">
                <div>
                  <a href="#">
                    <img src="/public/old/timg (6).jpg" alt="Apple Cinema 30&quot;" style="width:847.5px;height:400px">
                    <br></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Filters -->
        <div class="product-filter filters-panel">
          <div class="row">
            <div class="col-md-2 visible-lg">
              <div class="view-mode">
                <div class="list-view">
                  <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid">
                    <i class="fa fa-th"></i>
                  </button>
                  <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List">
                    <i class="fa fa-th-list"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- 搜索处 -->
            <form action="/home/goods/list/{ id = 0 }" method="get">
            <div class="short-by-show form-inline text-right col-md-7 col-sm-8 col-xs-12">
              
              
              
              
            </div>
            </form>
            <!-- 结束 -->
          </div>
        </div>
        <!-- //end Filters -->
        <!--changed listings-->
        <!-- 详情 -->

        
        <div class="products-list row grid">
          @if(isset($goo))
          @foreach($goo as $a=>$b)
            <div class="product-layout col-md-4 col-sm-6 col-xs-12 "> 
         <div class="product-item-container"> 
          <div class="left-block"> 
            <a target="_blank" href="/home/goods/details/{{ $b->id }}" >
           <div class="product-image-container lazy second_img "> 
              <img data-src="/public/images{{ $b->images }}" src="/public/images{{ $b->images }}" alt="Apple Cinema 30&quot;" class="img-responsive" style="height:222px"> 
              <!-- style="height:150px;" -->
              <img data-src="/201711101555115178.jpg" src="" alt="Apple Cinema 30&quot;" class="img_0 img-responsive" > 
            
           </div> 
           </a>
           <!--Sale Label--> 
           <!-- <span class="label label-sale">Sale</span> --> 
           <!--countdown box--> 
           <div class="countdown_box"> 
            <div class="countdown_inner">
             <!-- 图片浮动信息 -->
             <!-- <div class="title">
              This limited offer ends
             </div> --> 
             <!-- <div class="defaultCountdown-30"></div>  -->
            </div> 
           </div> 
           <!--end countdown box--> 
           <!--full quick view block--> 
           <!-- <a class="quickview  visible-lg" data-fancybox-type="iframe" href="#"> 快速浏览 </a>  -->
           <!--end full quick view block--> 
          </div> 
          <div class="right-block"> 
           <div class="caption"> 
            <h4><a href="/home/goods/details/{{ $b->id }}"><p style="width: 200px; overflow:hidden;white-space:nowrap; text-overflow:ellipsis;">
          {{ $b->gname }}
        </p></a></h4> 
            <div class="ratings"> 
             <div class="rating-box"> 
              <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> 
              <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> 
              <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> 
              <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> 
              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> 
             </div> 
            </div> 
            <div class="price"> 
             <span class="price-new">￥{{ $b->price }}</span> 
             <span class="price-old">￥{{ ($b->price) / 4 }}</span> 
             <span class="label label-percent">-40%</span> 
            </div> 
            <div class="description item-desc hidden"> 
             <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam  . </p> 
            </div> 
           </div> 
           <div class="button-group"> 
            <a href="/home/goods/two/{{ $b->id }}" id="gowuche" onclick="go({{ $b->id }})">
            <button class="addToCart" type="button" data-toggle="tooltip" title="加入购物车" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">加入购物车</span></button> 
             </a>
            <script>
                  function go(id){
                  
                      $.get('/home/goods/two?id='+id,function(mag){
                        alert(mag);
                        // if(mag == 'success'){
                        //   alert('成功添加到购物车!');
                         
                           
                        // }else if(mag == 'error'){
                        //   alert('添加购物车失败!');
                        // }
                      },'html');
                  }
                  
               
            </script>
            <button class="wishlist" type="button" data-toggle="tooltip" title="收藏" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button> 
            <button class="compare" type="button" data-toggle="tooltip" title="关注" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button> 
           </div> 
          </div>
          <!-- right block --> 
         </div> 
        </div> 
        <div class="clearfix visible-xs-block"></div> 
          @endforeach
          @else
		<!-- 商品列表 -->
		    @foreach($data as $k=>$v)
        @foreach($v as $kk=>$vv)
		<div class="product-layout col-md-4 col-sm-6 col-xs-12 "> 
         <div class="product-item-container"> 
          <div class="left-block"> 
            <a target="_blank" href="/home/goods/details/{{ $vv->id }}" >
           <div class="product-image-container lazy second_img "> 
            	<img data-src="/public/images{{ $vv->images }}" src="/public/images{{ $vv->images }}" alt="Apple Cinema 30&quot;" class="img-responsive" style="height:222px"> 
              <!-- style="height:150px;" -->
            	<img data-src="/201711101555115178.jpg" src="" alt="Apple Cinema 30&quot;" class="img_0 img-responsive" > 
            
           </div> 
           </a>
           <!--Sale Label--> 
           <!-- <span class="label label-sale">Sale</span> --> 
           <!--countdown box--> 
           <div class="countdown_box"> 
            <div class="countdown_inner">
             <!-- 图片浮动信息 -->
             <!-- <div class="title">
              This limited offer ends
             </div> --> 
             <!-- <div class="defaultCountdown-30"></div>  -->
            </div> 
           </div> 
           <!--end countdown box--> 
           <!--full quick view block--> 
           <!-- <a class="quickview  visible-lg" data-fancybox-type="iframe" href="#"> 快速浏览 </a>  -->
           <!--end full quick view block--> 
          </div> 
          <div class="right-block"> 
           <div class="caption"> 
            <h4><a href="/home/goods/details/{{ $vv->id }}"><p style="width: 200px; overflow:hidden;white-space:nowrap; text-overflow:ellipsis;">
					{{ $vv->gname }}
				</p></a></h4> 
            <div class="ratings"> 
             <div class="rating-box"> 
              <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> 
              <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> 
              <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> 
              <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> 
              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> 
             </div> 
            </div> 
            <div class="price"> 
             <span class="price-new">￥{{ $vv->price }}</span> 
             <span class="price-old">￥12</span> 
             <span class="label label-percent">-40%</span> 
            </div> 
            <div class="description item-desc hidden"> 
             <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam  . </p> 
            </div> 
           </div> 
           <div class="button-group"> 
            <a href="/home/goods/two/{{ $vv->id }}" id="gowuche" onclick="go({{ $vv->id }})">
            <button class="addToCart" type="button" data-toggle="tooltip" title="加入购物车" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">加入购物车</span></button> 
             </a>
            <script>
                  function go(id){
                  
                      $.get('/home/goods/two?id='+id,function(mag){
                        alert(mag);
                        // if(mag == 'success'){
                        //   alert('成功添加到购物车!');
                         
                           
                        // }else if(mag == 'error'){
                        //   alert('添加购物车失败!');
                        // }
                      },'html');
                  }
                  
               
            </script>
            <button class="wishlist" type="button" data-toggle="tooltip" title="收藏" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button> 
            <button class="compare" type="button" data-toggle="tooltip" title="关注" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button> 
           </div> 
          </div>
          <!-- right block --> 
         </div> 
        </div> 
        <div class="clearfix visible-xs-block"></div> 

		<!-- 列表结束 -->
        @endforeach
        @endforeach
        @endif
		<!--  -->
  
        </div>
        
        <!--// End Changed listings-->
        <!-- Filters -->
        <!-- <div class="product-filter product-filter-bottom filters-panel">
          <div class="row">
            <div class="col-md-2 hidden-sm hidden-xs"></div>
            <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
              <div class="form-group" style="margin: 7px 10px">Showing 1 to 9 of 10 (2 Pages)</div></div>
            <div class="box-pagination col-md-3 col-sm-4 text-right">
              <ul class="pagination">
                <li class="active">
                  <span>1</span></li>
                <li>
                  <a href="#">2</a></li>
                <li>
                  <a href="#">&gt;</a></li>
                <li>
                  <a href="#">&gt;|</a></li>
              </ul>
            </div>
          </div>
        </div> -->
        <!-- //end Filters --></div>
    </div>
  </div>
  <!--Middle Part End--></div>

@stop		
		

