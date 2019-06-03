@extends('home.layout.index')
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
      <li>
      <a href="javascript:;">商品详情页</a></li>
  </ul>
    <div class="row"> 
     <!--Middle Part Start--> 
     <div id="content" class="col-md-12 col-sm-12"> 
     	<!-- 整个商品详情 -->

     
      <div class="product-view row"> 
       <div class="left-content-product col-lg-10 col-xs-12"> 
        <div class="row"> 
         <div class="content-product-left class-honizol col-sm-6 col-xs-12 "> 
          <div class="large-image" >
           <!-- 放大镜 -->
           <img itemprop="image" class="product-image-zoom" src="/public/images{{ $data->images }}" data-zoom-image="/public/images{{ $data->images }}" title="{{ $data->gname }}" alt="Bint Beef" onclick="img()" style="height:436px;width:436px"/>
            <!-- 放大镜结束 -->
            <script>
            	function img(even)
            	{
            		event.stopPropagtion();//阻止事件冒泡
            		// return false;
            	}
            </script>
          </div> 
          <!-- <a class="thumb-video pull-left" href="javascript:;"><i class="fa fa-youtube-play"></i></a> --> 
          <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">
			<!-- 版本图片 -->
			     @foreach($data->versions as $k=>$v)
			     @foreach($v->goods_details as $kk=>$vv)
           <a data-index="0" class="img thumbnail " data-image="/public/files{{ $vv->files }}" title="Bint Beef"> 
           	<img src="/public/files{{ $vv->files }}" title="Bint Beef" alt="Bint Beef" /> 
           </a> 
            @endforeach
            @endforeach
          </div> 
         </div> 
         <div class="content-product-right col-sm-6 col-xs-12"> 
          <div class="title-product"> 
           <h1>商品参数</h1> 
          </div> 
          <!-- Review ----> 
          <div class="box-review form-group"> 
           <div class="ratings"> 
            <div class="rating-box"> 
             <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> 
             <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> 
             <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> 
             <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> 
             <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> 
            </div> 
           </div> 
           <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">累计评论 0</a> | 
           <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">去看评论</a> 
          </div> 
          <div class="product-label form-group"> 
           <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer"> 
            <span class="price-new" itemprop="price">￥{{ $data->price }}</span> 
            <span class="price-old">￥{{ round(($data->price) / 9.8,2) }}</span> 
           </div> 
           <div class="stock">
            <span>可用性:</span> 
            <span class="status-stock">库存</span>
           </div> 
          </div> 
          <div class="product-box-desc"> 
           <div class="inner-box-desc"> 
            <div class="price-tax">
             <span>降价前:</span> ￥{{ ($data->price) + round(($data->price) / 9.8,2) }}
            </div> 
            <div class="reward">
             <span>奖励积分价格:</span> 100
            </div> 
            <div class="brand">
             <span>品牌:</span>
            <a href="javascript:;"">Apple</a> 
            </div> 
            <div class="model">
             <span>产品编号:</span> {{ $data->num }}
            </div> 
            <div class="reward">
             <span>奖励积分:</span> {{ ($data->price) / 100 }}
            </div> 
           </div> 
          </div> 
          <div id="product"> 
           <h4>选择版本</h4>

           <div>
             <span><a href="" style="color:black;">&nbsp;你好</a></span>
           </div> 
           
           <div class="image_option_type form-group required"> 
            <label class="control-label">颜色</label> 
            <ul class="product-options clearfix" id="input-option231"> 
             <li class="radio"> <label> <input class="image_radio" type="radio" name="option[231]" value="33" /> <img src="/home/image/demo/colors/blue.jpg" data-original-title="blue +$12.00" class="img-thumbnail icon icon-color" /> <i class="fa fa-check"></i> <label> </label> </label> </li> 
             <li class="radio"> <label> <input class="image_radio" type="radio" name="option[231]" value="34" /> <img src="/home/image/demo/colors/brown.jpg" data-original-title="brown -$12.00" class="img-thumbnail icon icon-color" /> <i class="fa fa-check"></i> <label> </label> </label> </li> 
             <li class="radio"> <label> <input class="image_radio" type="radio" name="option[231]" value="35" /> <img src="/home/image/demo/colors/green.jpg" data-original-title="green +$12.00" class="img-thumbnail icon icon-color" /> <i class="fa fa-check"></i> <label> </label> </label> </li> 
             <li class="selected-option"> </li> 
            </ul> 
           </div> 
           <div class="box-checkbox form-group required"> 
            <label class="control-label">可分期</label> 
            <div id="input-option232"> 
             <div class="checkbox"> 
              <label for="checkbox_1"><input type="checkbox" name="option[232][]" value="36" id="checkbox_1" /> ￥12.00起 分12期</label> 
             </div> 
             <div class="checkbox"> 
              <label for="checkbox_2"><input type="checkbox" name="option[232][]" value="36" id="checkbox_2" /> ￥24.00起 分8期</label> 
             </div> 
             <div class="checkbox"> 
              <label for="checkbox_3"><input type="checkbox" name="option[232][]" value="36" id="checkbox_3" /> ￥36.00起 分6期</label> 
             </div> 
             <div class="checkbox"> 
              <label for="checkbox_4"><input type="checkbox" name="option[232][]" value="36" id="checkbox_4" /> ￥48.00起 分4期</label> 
             </div> 
            </div> 
           </div>

           <form action="javascript:;" method=""> 
           <div class="form-group box-info-product"> 
            <div class="option quantity"> 
             <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;"> 
              <label>数量</label> 
              <input class="form-control" type="text" name="quantity" value="1"  gid="{{ $data->id }}"/> 
              <input type="hidden" name="product_id" value="50" /> 
              <span class="input-group-addon product_quantity_down">−</span> 
              <span class="input-group-addon product_quantity_up">+</span> 
             </div> 
            </div> 
            <div class="cart" style="margin-left:7px"> 
            	<!-- <a href="/home/goods" class="btn btn-mega btn-warning btn-lg" title="添加到购物车" data-original-title="添加到购物车" style="height:42px;"><h3>加入购物车</h3></a> -->
             <input type="button" data-toggle="tooltip" title="添加到购物车" value="添加到购物车" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="添加到购物车"  /> 
             <script>
        				$('#button-cart').click(function(){
        					var quantity = $('input[name=quantity]').val();
        					var gid = $('input[name=quantity]').attr('gid');
        					alert(quantity);
        					$.post('/home/goods/cart',{
        						'_token':"{{ csrf_token() }}",
        						'id':gid,
        						'number':quantity
        						},function(mag){
        						 //alert(mag);
        						if(mag == 'success'){
        							alert('成功添加到购物车!');
        							//重新设置 数量的值
        							 $('input[name=quantity]').val(1);
        						}else if(mag == 'error'){
        							alert('添加购物车失败!');
        						}
        					},'html');
        				});
             	
             </script>
            </div> 
            <div class="add-to-links wish_comp"> 
             <ul class="blank list-inline"> 
              <li class="wishlist"> <a href="/home/goods/collected/{{ $vv->id }}" class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('50');" data-original-title="添加到收藏"><i class="fa fa-heart"></i> </a> </li> 
              
             </ul> 
            </div> 
           </div>
           </form>


          </div> 
          <!-- end box info product --> 
         </div> 
        </div> 
       </div> 
       <section class="col-lg-2 hidden-sm hidden-md hidden-xs slider-products"> 
        <div class="module col-sm-12 four-block"> 
         <div class="modcontent clearfix"> 
          <div class="policy-detail"> 
           <div class="banner-policy"> 
            <div class="policy policy1"> 
            <a href="javascript:;""> <span class="ico-policy">&nbsp;</span> 90 天 <br /> 退款 </a> 
            </div> 
            <div class="policy policy2"> 
            <a href="javascript:;""> <span class="ico-policy">&nbsp;</span> 店内交换 </a> 
            </div> 
            <div class="policy policy3"> 
            <a href="javascript:;""> <span class="ico-policy">&nbsp;</span> 最低价格保证 </a> 
            </div> 
            <div class="policy policy4"> 
            <a href="javascript:;""> <span class="ico-policy">&nbsp;</span> 购物保证 </a> 
            </div> 
           </div> 
          </div> 
         </div> 
        </div> 
       </section> 
      </div> 
		

      <!-- 整个商品详情结束 -->
      <!-- Product Tabs --> 
      <div class="producttab "> 
       <div class="tabsslider  vertical-tabs col-xs-12"> 
        <ul class="nav nav-tabs col-lg-2 col-sm-3"> 
         <li class="active"><a data-toggle="tab" href="#tab-1">描述</a></li> 
         <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">评论</a></li> 
         <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">标签</a></li> 
         <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">自定义</a></li> 
        </ul> 
        <div class="tab-content col-lg-10 col-sm-9 col-xs-12"> 
         <div id="tab-1" class="tab-pane fade active in"> 
          <p>{!! $data->content !!}</p> 
          
         </div> 
         <div id="tab-review" class="tab-pane fade"> 
          <form> 
           <div id="review"> 
            <table class="table table-striped table-bordered"> 
             <tbody> 
              <tr> 
               <td style="width: 50%;"><strong>Super Administrator</strong></td> 
               <td class="text-right">29/07/2015</td> 
              </tr> 
              <tr> 
               <td colspan="2"> <p>Best this product opencart</p> 
                <div class="ratings"> 
                 <div class="rating-box"> 
                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> 
                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> 
                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> 
                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> 
                  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> 
                 </div> 
                </div> </td> 
              </tr> 
             </tbody> 
            </table> 
            <div class="text-right"></div> 
           </div> 
           <h2 id="review-title">Write a review</h2> 
           <div class="contacts-form"> 
            <div class="form-group"> 
             <span class="icon icon-user"></span> 
             <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}" /> 
            </div> 
            <div class="form-group"> 
             <span class="icon icon-bubbles-2"></span> 
             <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea> 
            </div> 
            <span style="font-size: 11px;"><span class="text-danger">Note:</span> HTML is not translated!</span> 
            <div class="form-group"> 
             <b>Rating</b> 
             <span>Bad</span>&nbsp; 
             <input type="radio" name="rating" value="1" /> &nbsp; 
             <input type="radio" name="rating" value="2" /> &nbsp; 
             <input type="radio" name="rating" value="3" /> &nbsp; 
             <input type="radio" name="rating" value="4" /> &nbsp; 
             <input type="radio" name="rating" value="5" /> &nbsp;
             <span>Good</span> 
            </div> 
            <div class="buttons clearfix">
             <a id="button-review" class="btn buttonGray">Continue</a>
            </div> 
           </div> 
          </form> 
         </div> 
         <div id="tab-4" class="tab-pane fade"> 
         <a href="javascript:;"">Monitor</a>, 
         <a href="javascript:;"">Apple</a> 
         </div> 
         <div id="tab-5" class="tab-pane fade"> 
          <p>Lorem ipsum  diam voluptua. </p> 
          <p>At verolitr.</p> 
          <p>Sedet.</p> 
         </div> 
        </div> 
       </div> 
      </div> 
      <!-- //Product Tabs --> 
      <!-- Related Products --> 
      <div class="related titleLine products-list grid module "> 
       <h3 class="modtitle">相似商品</h3> 
       <div class="releate-products "> 
       	@foreach($date as $k=>$v)
       	@foreach($v as $kk=>$vv)
        <div class="product-layout">
         <!-- 开始 -->

		
         <div class="product-item-container"> 
          <div class="left-block">
          <a target="_blank" href="/home/goods/details/{{ $vv->id }}" > 
           <div class="product-image-container second_img "> 
            <img src="/public/images{{ $vv->images }}" title="Apple Cinema 30&quot;" class="img-responsive" style="height:240px"/> 
            <img src="/201711101555115178.jpg" title="Apple Cinema 30&quot;" class="img_0 img-responsive" /> 
           </div> 
           <!--Sale Label--> 
           <!-- <span class="label label-sale">Sale</span>  -->
           <!--full quick view block--> 
           <!-- <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="#"> Quickview</a>  -->
           <!--end full quick view block--> 
          </div>
          </a> 
          <div class="right-block"> 
           <div class="caption"> 
            <h4>
              <a href="product.html"><p style="width: 200px; overflow:hidden;white-space:nowrap; text-overflow:ellipsis;">
                {{ $vv->gname }}
              </p></a>
            </h4> 
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
             <span class="price-old">￥{{ ($vv->price) / 4 }}</span> 
             <span class="label label-percent">-40%</span> 
            </div> 
            <div class="description item-desc hidden"> 
             <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p> 
            </div> 
           </div> 
           <div class="button-group"> 
            
              
           </div> 
          </div>
          <!-- right block --> 
         </div>
		

			<!-- 结束 -->
        </div> 
		@endforeach
		@endforeach


        
       </div> 
      </div> 
      <!-- end Related  Products--> 
     </div> 
    </div> 
    <!--Middle Part End--> 
   </div> 


@stop			


