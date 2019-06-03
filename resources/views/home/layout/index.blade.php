@include('home.common.index')
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

          <input class="autosearch-input form-control" type="text" value="" size="50"  placeholder="Search" name="search" id="search"/> 
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

         <a href="/homes/car"  class="top_cart dropdown-toggle" > 
          <div class="shopcart"> 
           <span class="handle pull-left"></span> 
           <span class="title">购物车</span> 
           <p class="text-shopping-cart cart-total-full"></p> 
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
    @show 
    @section('header') 
    <!-- Header Bottom --> 
    <div class="header-bottom"> 
     <div class="container"> 
      <div class="row">

       <!-- 分类处标记 -->
       <div class="sidebar-menu col-md-3 col-sm-6 col-xs-12 "> 
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
    </div> @show 
    <!-- Navbar switcher --> 
    <!-- //end Navbar switcher --> 
   </header> 
   <!-- //Header Container  --> 
   <!-- Block Spotlight1  --> 
   <section class="so-spotlight1 "> 
    <div class="container">
     <!-- 轮播图开始 -->
@section('lunbo')
     <div class="row"> 
      <div id="yt_header_right" class="col-lg-offset-3 col-lg-9 col-md-12"> 
       <div class="slider-container "> 
        <div class="module first-block"> 
         <div class="modcontent clearfix"> 
          <div id="custom_popular_search" class="clearfix"> 
           <h5 class="so-searchbox-popular-title pull-left">热门搜索:</h5> 
           <div class="so-searchbox-keyword"> 
            <ul class="list-inline">
             <li>&nbsp;<a href="javascript:;">Acer,</a></li>
             <li><a href="javascript:;">APPLE,</a></li>
             <li><a href="javascript:;">Black,</a></li>
             <li><a href="javascript:;">Canon,</a></li>
             <li><a href="javascript:;">Cogs,</a></li>
             <li><a href="javascript:;">Confi,</a></li>
             <li><a href="javascript:;">Kate,</a></li>
             <li><a href="javascript:;">Lor,</a></li>
             <li><a href="javascript:;">Product,</a></li>
             <li><a href="javascript:;">Zolof The Rock And Roll Destroyer</a></li>
            </ul> 
           </div> 
          </div> 
         </div> 
        </div> 
        <div id="so-slideshow" class="col-lg-8 col-md-8 col-sm-12 col-xs-12 two-block"> 
         <div class="module slideshow no-margin"> 
          @if(isset($lun))
          @foreach($lun as $k=>$v)
          <div class="item"> 
           <a href="{{ $v->url }}"><img src="/public/phone{{ $v->files }}" alt="slider1" class="img-responsive" /></a> 
          </div> 
          @endforeach
          @endif
         </div> 
         <div class="loadeding"></div> 
        </div> 
        <div class="module col-md-4  hidden-sm hidden-xs three-block "> 
         <div class="modcontent clearfix"> 
          <div class="htmlcontent-block"> 
           <ul class="htmlcontent-home"> 
            <li> 
             <div class="banners"> 
              <div> 
               <a href="javascript:;"><img src="/home/image/demo/cms/banner1.jpg" alt="banner1" /></a> 
              </div> 
             </div> </li> 
            <li> 
             <div class="banners"> 
              <div> 
               <a href="javascript:;"><img src="/home/image/demo/cms/banner2.jpg" alt="banner1" /></a> 
              </div> 
             </div> </li> 
            <li> 
             <div class="banners"> 
              <div> 
               <a href="javascript:;"><img src="/home/image/demo/cms/banner3.jpg" alt="banner1" /></a> 
              </div> 
             </div> </li> 
           </ul> 
          </div> 
         </div> 
        </div> 
        
       </div> 
      </div> 
     </div>
@show
      <!-- 轮播图结束 -->
    </div> 
   </section> 
   <!-- //Block Spotlight1  --> 
   <!-- Main Container  --> 
   <div class="main-container container"> 
    <div class="row"> 
     <div id="content" class="col-sm-12">
       @section('body') 
      <div class="module tab-slider titleLine"> 
       <h3 class="modtitle">火爆商品</h3> 
       <div id="so_listing_tabs_1" class="so-listing-tabs first-load module"> 
        <div class="loadeding"></div> 
        <div class="ltabs-wrap"> 
         <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="#" data-type_source="0"> 
          <!--Begin Tabs--> 
          <div class="ltabs-tabs-wrap"> 
           <span class="ltabs-tab-selected">珠宝 &amp; 手表 </span> 
           <span class="ltabs-tab-arrow">▼</span> 
           <div class="item-sub-cat"> 
            <ul class="ltabs-tabs cf"> 
             <li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">{{ isset($aa) ? $aa : '' }} </span> </li> 
             <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18"> <span class="ltabs-tab-label">{{ isset($bb) ? $bb : '' }} </span> </li> 
             <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"> <span class="ltabs-tab-label">{{ isset($cc) ? $cc : '' }} </span> </li> 
            </ul> 
           </div> 
          </div> 
          <!-- End Tabs--> 
         </div> 
         <div class="ltabs-items-container"> 
          <!--Begin Items--> 
          <div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10"> 
           <div class="ltabs-items-inner ltabs-slider "> 
            <!-- 一 -->
            @if(isset($data0))
            @foreach($data0 as $k=>$v)
            @foreach($v as $kk=>$vv)
            <div class="ltabs-item product-layout"> 
             <div class="product-item-container"> 
              <div class="left-block"> 
                <a target="_blank" href="/home/goods/details/{{ $vv->id }}" >
               <div class="product-image-container second_img "> 
                <img src="/public/images{{ $vv->images }}" alt="Apple Cinema 30&quot;" class="img-responsive" /> 
                <img src="/public/old/hDS3Vr2cgE2976oLpIU7Lj2cOM8E4lL8LiDTJ4yL.jpeg" alt="Apple Cinema 30&quot;" class="img_0 img-responsive" /> 
               </div>
               </a> 
               <!--Sale Label--> 
               <span class="label label-sale">火</span> 
               <!--full quick view block--> 
               <!-- <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="#"> Quickview</a>  -->
               <!--end full quick view block--> 
              </div> 
              <div class="right-block"> 
               <div class="caption"> 
                <h4><a target="_blank" href="/home/goods/details/{{ $vv->id }}"><p style="width: 200px; overflow:hidden;white-space:nowrap; text-overflow:ellipsis;">
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
                 <span class="price-old">￥{{ round(($vv->price) / 9.8,2) }}</span> 
                </div> 
               </div> 
               <div class="button-group">
               <a href="/home/goods/two/{{ $vv->id }}" id="gowuche" onclick="go({{ $vv->id }})"> 
                <button class="addToCart" type="button" data-toggle="tooltip" title="购物车" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">购物车</span></button>
                </a> 
                <a href="/home/goods/collected/{{ $vv->id }}"><button class="wishlist" type="button" data-toggle="tooltip" title="收藏" ><i class="fa fa-heart"></i></button></a>

               </div> 
              </div>
              <!-- right block --> 
             </div> 
            </div> 
            @endforeach
            @endforeach
            @endif
            
            
            <!-- 结束 -->
           </div> 
          </div> 
          <div class="ltabs-items items-category-18 grid" data-total="11"> 
           <div class="ltabs-items-inner ltabs-slider ">
            <!-- 二 -->
            @if(isset($data1))
            @foreach($data1 as $k=>$v)
            @foreach($v as $kk=>$vv)
            <div class="ltabs-item product-layout"> 
             <div class="product-item-container"> 
              <div class="left-block"> 
                <a target="_blank" href="/home/goods/details/{{ $vv->id }}" >
               <div class="product-image-container second_img "> 
                <img src="/public/images{{ $vv->images }}" alt="Apple Cinema 30&quot;" class="img-responsive" /> 
                <img src="/public/old/hDS3Vr2cgE2976oLpIU7Lj2cOM8E4lL8LiDTJ4yL.jpeg" alt="Apple Cinema 30&quot;" class="img_0 img-responsive" /> 
               </div>
               </a> 
               <!--Sale Label--> 
               <span class="label label-sale">Fiery</span> 
               <!--full quick view block--> 
               <!-- <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="#"> Quickview</a>  -->
               <!--end full quick view block--> 
              </div> 
              <div class="right-block"> 
               <div class="caption"> 
                <h4><a target="_blank" href="/home/goods/details/{{ $vv->id }}"><p style="width: 200px; overflow:hidden;white-space:nowrap; text-overflow:ellipsis;">
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
                 <span class="price-old">￥{{ round(($vv->price) / 9.8,2) }}</span> 
                </div> 
               </div> 
               <div class="button-group">
               <a href="/home/goods/two/{{ $vv->id }}" id="gowuche" onclick="go({{ $vv->id }})"> 
                <button class="addToCart" type="button" data-toggle="tooltip" title="购物车" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">购物车</span></button>
                </a> 
                <a href="/home/goods/collected/{{ $vv->id }}"><button class="wishlist" type="button" data-toggle="tooltip" title="收藏" ><i class="fa fa-heart"></i></button></a>
               </div> 
              </div>
              <!-- right block --> 
             </div> 
            </div> 
            @endforeach
            @endforeach
            @endif
            

            <!-- 结束 -->
           </div> 
          </div> 
          <div class="ltabs-items  items-category-25 grid" data-total="11"> 
           <div class="ltabs-items-inner ltabs-slider ">
            <!-- 三 -->
            @if(isset($data2))
            @foreach($data2 as $k=>$v)
            @foreach($v as $kk=>$vv)
            <div class="ltabs-item product-layout" > 
             <div class="product-item-container" > 
              <div class="left-block"> 
                <a target="_blank" href="/home/goods/details/{{ $vv->id }}" >
               <div class="product-image-container second_img "> 
                <img src="/public/images{{ $vv->images }}" alt="Apple Cinema 30&quot;" class="img-responsive" /> 
                <img src="/public/old/hDS3Vr2cgE2976oLpIU7Lj2cOM8E4lL8LiDTJ4yL.jpeg" alt="Apple Cinema 30&quot;" class="img_0 img-responsive" /> 
               </div>
               </a> 
               <!--Sale Label--> 
               <span class="label label-sale">Fiery</span> 
               <!--full quick view block--> 
               <!-- <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="#"> Quickview</a>  -->
               <!--end full quick view block--> 
              </div> 
              <div class="right-block"> 
               <div class="caption"> 
                <h4><a target="_blank" href="/home/goods/details/{{ $vv->id }}"><p style="width: 200px; overflow:hidden;white-space:nowrap; text-overflow:ellipsis;">
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
                 <span class="price-old">￥{{ round(($vv->price) / 9.8,2) }}</span> 
                </div> 
               </div> 
               <div class="button-group">
               <a href="/home/goods/two/{{ $vv->id }}" id="gowuche" onclick="go({{ $vv->id }})"> 
                <button class="addToCart" type="button" data-toggle="tooltip" title="购物车" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">购物车</span></button>
                </a> 
                <a href="/home/goods/collected/{{ $vv->id }}"><button class="wishlist" type="button" data-toggle="tooltip" title="收藏" ><i class="fa fa-heart"></i></button></a>
               </div> 
              </div>
              <!-- right block --> 
             </div> 
            </div> 
            @endforeach
            @endforeach
            @endif
            
            
            <!-- 结束 -->
           </div> 
          </div> 
         </div> 
         <!--End Items--> 
        </div> 
       </div> 
      </div> 
      <div class="module "> 
       <div class="modcontent clearfix"> 
        <div class="banner-wraps "> 
         <div class="m-banner row"> 
          <div class="banner htmlconten1 col-lg-4 col-md-4 col-sm-6 col-xs-12"> 
           <div class="banners"> 
            <div> 
             <a href="javascript:;"><img src="/home/image/demo/cms/banner2-1.png" alt="banner1" /></a> 
            </div> 
           </div> 
          </div> 
          <div class="htmlconten2 col-lg-4 col-md-4 col-sm-6 col-xs-12"> 
           <div class="module banners"> 
            <div> 
             <a href="javascript:;"><img src="/home/image/demo/cms/banner2-2.png" alt="banner1" /></a> 
            </div> 
           </div> 
           <div class="banners"> 
            <div> 
             <a href="javascript:;"><img src="/home/image/demo/cms/banner2-3.png" alt="banner1" /></a> 
            </div> 
           </div> 
          </div> 
          <div class="banner htmlconten3 hidden-sm col-lg-4 col-md-4 col-sm-6 col-xs-12"> 
           <div class="banners"> 
            <div> 
             <a href="javascript:;"><img src="/home/image/demo/cms/banner2-4.png" alt="banner1" /></a> 
            </div> 
           </div> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
      <div class="module tab-slider titleLine"> 
       <h3 class="modtitle">上架新品</h3> 
       <div id="so_listing_tabs_2" class="so-listing-tabs first-load module"> 
        <div class="loadeding"></div> 
        <div class="ltabs-wrap "> 
         <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="#" data-type_source="0"> 
          <!--Begin Tabs--> 
          <div class="ltabs-tabs-wrap"> 
           <span class="ltabs-tab-selected">珠宝 &amp; 手表 </span> 
           <span class="ltabs-tab-arrow">▼</span> 
           <div class="item-sub-cat"> 
            <!-- <ul class="ltabs-tabs cf"> 
             <li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">珠宝 &amp; 手表 </span> </li> 
             <li class="ltabs-tab " data-category-id="2" data-active-content=".items-category-2"> <span class="ltabs-tab-label">电子产品 </span> </li> 
             <li class="ltabs-tab " data-category-id="3" data-active-content=".items-category-3"> <span class="ltabs-tab-label">运动 &amp; 户外活动 </span> </li> 
            </ul> --> 
           </div> 
          </div> 
          <!-- End Tabs--> 
         </div> 
         <div class="ltabs-items-container"> 
          <!--Begin Items--> 
          <div class="ltabs-items  ltabs-items-selected items-category-1 grid" data-total="10"> 
           <div class="ltabs-items-inner ltabs-slider ">
            @if(isset($bet))
            @foreach($bet as $k=>$v)
            <div class="ltabs-item product-layout" > 
             <div class="product-item-container" > 
              <div class="left-block"> 
                <a target="_blank" href="/home/goods/details/{{ $v->id }}" >
               <div class="product-image-container second_img "> 
                <img src="/public/images{{ $v->images }}" alt="Apple Cinema 30&quot;" class="img-responsive" style="height:241.75px"/> 
                <img src="/public/old/hDS3Vr2cgE2976oLpIU7Lj2cOM8E4lL8LiDTJ4yL.jpeg" alt="Apple Cinema 30&quot;" class="img_0 img-responsive" /> 
               </div>
               </a> 
               <!--Sale Label--> 
               <span class="label label-sale">新</span> 
               <!--full quick view block--> 
               <!-- <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="#"> Quickview</a>  -->
               <!--end full quick view block--> 
              </div> 
              <div class="right-block"> 
               <div class="caption"> 
                <h4><a target="_blank" href="/home/goods/details/{{ $v->id }}"><p style="width: 200px; overflow:hidden;white-space:nowrap; text-overflow:ellipsis;">
                    {{ $v->gname }}
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
                 <span class="price-new">￥{{ $v->price }}</span> 
                 
                </div> 
               </div> 
               <div class="button-group">
               <a href="/home/goods/two/{{ $vv->id }}" id="gowuche" onclick="go({{ $v->id }})"> 
                <button class="addToCart" type="button" data-toggle="tooltip" title="购物车" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">购物车</span></button>
                </a> 
                <a href="/home/goods/collected/{{ $vv->id }}"><button class="wishlist" type="button" data-toggle="tooltip" title="收藏" ><i class="fa fa-heart"></i></button></a>
               </div> 
              </div>
              <!-- right block --> 
             </div> 
            </div>
             @endforeach
            @endif
           </div> 
          </div> 
          
          
         </div> 
         <!--End Items--> 
        </div> 
       </div> 
      </div>
    
      <div class="module tab-slider titleLine"> 
       <h3 class="modtitle">别致礼物--送给TA</h3> 
       <div id="so_listing_tabs_2" class="so-listing-tabs first-load module"> 
        <div class="loadeding"></div> 
        <div class="ltabs-wrap "> 
         <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="#" data-type_source="0"> 
          <!--Begin Tabs--> 
          <div class="ltabs-tabs-wrap"> 
           <span class="ltabs-tab-selected">珠宝 &amp; 手表 </span> 
           <span class="ltabs-tab-arrow">▼</span> 
           
          </div> 
          <!-- End Tabs--> 
         </div> 
         
         <!--End Items--> 
        </div> 
       </div> 
      </div>
      <!-- 礼物推荐 -->
      <div class="ltabs-tabs-wrap" style="margin-top:21.5px;margin-bottom:43.5px;">
        <div class="module "> 
       <div class="modcontent clearfix"> 
        <div class="banner-wraps "> 
           <div class="banners"> 
            <div> 
             <a href="javascript:;">
                 <img src="/public/old/u=1530590343,111047832&fm=26&gp=0.jpg" alt="风暴瓶--礼物" title="风暴瓶--礼物" style="height:416px;width:100%">
             </a> 
            </div> 
           </div> 
        </div> 
       </div> 
      </div> 
      </div>


      <div class="module tab-slider titleLine"> 
       <h3 class="modtitle">国妆--美人美</h3> 
       <div id="so_listing_tabs_2" class="so-listing-tabs first-load module"> 
        <div class="loadeding"></div> 
        <div class="ltabs-wrap "> 
         <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="#" data-type_source="0"> 
          <!--Begin Tabs--> 
          <div class="ltabs-tabs-wrap"> 
           <span class="ltabs-tab-selected">珠宝 &amp; 手表 </span> 
           <span class="ltabs-tab-arrow">▼</span> 
           
          </div> 
          <!-- End Tabs--> 
         </div> 
         
         <!--End Items--> 
        </div> 
       </div> 
      </div>
      <div class="ltabs-tabs-wrap" style="margin-top:21.5px;margin-bottom:43.5px;">
        <div class="module "> 
       <div class="modcontent clearfix"> 
        <div class="banner-wraps "> 
           <div class="banners"> 
            <div> 
             <a href="javascript:;">
                 <img src="/public/old/timg (3).jpg" alt="国妆--礼物" title="国妆--礼物" style="height:416px;width:100%">
             </a> 
            </div> 
           </div> 
        </div> 
       </div> 
      </div> 
      </div>

      <div class="module tab-slider titleLine"> 
       <h3 class="modtitle">国艺--艺美</h3> 
       <div id="so_listing_tabs_2" class="so-listing-tabs first-load module"> 
        <div class="loadeding"></div> 
        <div class="ltabs-wrap "> 
         <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="#" data-type_source="0"> 
          <!--Begin Tabs--> 
          <div class="ltabs-tabs-wrap"> 
           <span class="ltabs-tab-selected">珠宝 &amp; 手表 </span> 
           <span class="ltabs-tab-arrow">▼</span> 
           
          </div> 
          <!-- End Tabs--> 
         </div> 
         
         <!--End Items--> 
        </div> 
       </div> 
      </div>
      <div class="ltabs-tabs-wrap" style="margin-top:21.5px;margin-bottom:43.5px;">
        <div class="module "> 
       <div class="modcontent clearfix"> 
        <div class="banner-wraps "> 
           <div class="banners"> 
            <div> 
             <a href="javascript:;">
                 <img src="/public/old/timg (4).jpg" alt="国妆--礼物" title="国妆--礼物" style="height:416px;width:100%">
             </a> 
            </div> 
           </div> 
        </div> 
       </div> 
      </div> 
      </div>
      <!-- 结束 -->
      <div class="module no-margin titleLine "> 
       <h3 class="modtitle">收藏</h3> 
       <div class="modcontent clearfix"> 
        <div id="collections_block" class="clearfix  block"> 
         <ul class="width6"> 
          <li class="collect collection_0"> 
           <div class="color_co">
            <a href="javascript:;">家具</a> 
           </div> </li> 
          <li class="collect collection_1"> 
           <div class="color_co">
            <a href="javascript:;">礼物的想法</a> 
           </div> </li> 
          <li class="collect collection_2"> 
           <div class="color_co">
            <a href="javascript:;">很酷的小工具</a> 
           </div> </li> 
          <li class="collect collection_3"> 
           <div class="color_co">
            <a href="javascript:;">户外运动</a> 
           </div> </li> 
          <li class="collect collection_4"> 
           <div class="color_co">
            <a href="javascript:;">配件</a> 
           </div> </li> 
          <li class="collect collection_5"> 
           <div class="color_co">
            <a href="javascript:;">女人世界</a> 
           </div> </li> 
         </ul> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <!-- //Main Container --> 
   <!-- Block Spotlight3  --> 
   <!-- <section class="so-spotlight3"> 
    <div class="container"> 
     <div class="row"> 
      <div id="so_categories_173761471880018" class="so-categories module titleLine preset01-4 preset02-3 preset03-3 preset04-1 preset05-1"> 
       <h3 class="modtitle">热门分类</h3> 
       <div class="wrap-categories"> 
        <div class="cat-wrap theme3"> 

         <div class="content-box"> 
          <div class="image-cat"> 
           <a href="javascript:;" title="Automotive" target="_blank"> <img src="/home/image/demo/shop/category/automotive-motocrycle.jpg" title="Automotive" alt="Automotive" /> </a> 
           <a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 
          </div> 
          <div class="inner"> 
           <div class="title-cat"> 
            <a href="javascript:;" title="Automotive " target="_blank">Automotive</a> 
           </div> 
           <div class="child-cat"> 
            <div class="child-cat-title"> 
             <a title="More Car Accessories" href="#" target="_blank">More Car Accessories </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Car Alarms and Security" href="#" target="_blank">Car Alarms and Security </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Car Audio &amp; Speakers" href="#" target="_blank">Car Audio &amp; Speakers </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Gadgets &amp; Auto Parts </a> 
            </div> 
           </div> 
          </div> 
         </div>

         <div class="clr1"></div> 
         <div class="content-box"> 
          <div class="image-cat"> 
           <a href="javascript:;" title="Automotive" target="_blank"> <img src="/home/image/demo/shop/category/health-beauty.jpg" title="Automotive" alt="Automotive" /> </a> 
           <a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 
          </div> 
          <div class="inner"> 
           <div class="title-cat"> 
            <a href="javascript:;" title="Health &amp; Beauty" target="_blank">Health &amp; Beauty</a> 
           </div> 
           <div class="child-cat"> 
            <div class="child-cat-title"> 
             <a title="More Car Accessories" href="#" target="_blank">Salon &amp; Spa Equipment </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Car Alarms and Security" href="#" target="_blank">Fragrances </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Car Audio &amp; Speakers" href="#" target="_blank">Shaving &amp; Hair Removal.. </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Bath &amp; Body </a> 
            </div> 
           </div> 
          </div> 
         </div> 
         <div class="clr1 clr2"></div> 
         <div class="content-box"> 
          <div class="image-cat"> 
           <a href="javascript:;" title="Automotive" target="_blank"> <img src="/home/image/demo/shop/category/bags-holiday-supplies-gifts.jpg" title="Automotive" alt="Automotive" /> </a> 
           <a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 
          </div> 
          <div class="inner"> 
           <div class="title-cat"> 
            <a href="javascript:;" title="Health &amp; Beauty" target="_blank">Bags, Holiday Supplies</a> 
           </div> 
           <div class="child-cat"> 
            <div class="child-cat-title"> 
             <a title="More Car Accessories" href="#" target="_blank">Gift &amp; Lifestyle Gadgets.. </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Car Alarms and Security" href="#" target="_blank">Lighter &amp; Cigar Supplies.. </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Car Audio &amp; Speakers" href="#" target="_blank">Gift for Woman </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Gift for Man </a> 
            </div> 
           </div> 
          </div> 
         </div> 
         <div class="clr1 clr3"></div> 
         <div class="content-box"> 
          <div class="image-cat"> 
           <a href="javascript:;" title="Automotive" target="_blank"> <img src="/home/image/demo/shop/category/toys-hobbies.jpg" title="Automotive" alt="Automotive" /> </a> 
           <a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 
          </div> 
          <div class="inner"> 
           <div class="title-cat"> 
            <a href="javascript:;" title="Health &amp; Beauty" target="_blank">Toys &amp; Hobbies</a> 
           </div> 
           <div class="child-cat"> 
            <div class="child-cat-title"> 
             <a title="More Car Accessories" href="#" target="_blank">Helicopters &amp; Parts </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Car Alarms and Security" href="#" target="_blank">RC Cars &amp; Parts </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Car Audio &amp; Speakers" href="#" target="_blank">FPV System &amp; Parts </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Walkera </a> 
            </div> 
           </div> 
          </div> 
         </div> 
         <div class="clr1 clr2 clr4"></div> 
         <div class="content-box"> 
          <div class="image-cat"> 
           <a href="javascript:;" title="Automotive" target="_blank"> <img src="/home/image/demo/shop/category/electronics.jpg" title="Automotive" alt="Automotive" /> </a> 
           <a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 
          </div> 
          <div class="inner"> 
           <div class="title-cat"> 
            <a href="javascript:;" title="Health &amp; Beauty" target="_blank">Electronics</a> 
           </div> 
           <div class="child-cat"> 
            <div class="child-cat-title"> 
             <a title="More Car Accessories" href="#" target="_blank">Home Audio</a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Car Alarms and Security" href="#" target="_blank">Mp3 Players &amp; Accessories.. </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Car Audio &amp; Speakers" href="#" target="_blank">Headphones, Headsets</a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Battereries &amp; Chargers.. </a> 
            </div> 
           </div> 
          </div> 
         </div> 
         <div class="clr1 clr5"></div> 
         <div class="content-box"> 
          <div class="image-cat"> 
           <a href="javascript:;" title="Automotive" target="_blank"> <img src="/home/image/demo/shop/category/jewelry-watches.jpg" title="Automotive" alt="Automotive" /> </a> 
           <a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 
          </div> 
          <div class="inner"> 
           <div class="title-cat"> 
            <a href="javascript:;" title="Health &amp; Beauty" target="_blank">Jewelry &amp; Watches</a> 
           </div> 
           <div class="child-cat"> 
            <div class="child-cat-title"> 
             <a title="More Car Accessories" href="#" target="_blank">Men Watches </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Car Alarms and Security" href="#" target="_blank">Wedding Rings </a> 
            </div> 
            <div class="child-cat-title"> 
             <a title="Car Audio &amp; Speakers" href="#" target="_blank">Earings </a> 
            </div> 
           </div> 
          </div> 
         </div> 
         <div class="clr1 clr2 clr3 clr6"></div> 
         
         <div class="clr1"></div> 
          
         <div class="clr1 clr2 clr4"></div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </section> --> 
   <!-- //Block Spotlight3  --> 
   <script type="text/javascript"><!--
	var $typeheader = 'header-home1';
	//-->
</script>
 @show 
@section('footer') 
   <!-- Footer Container --> 
   <footer class="footer-container"> 
    <div id='footer' class="row" style="margin-left:200px;">
      <dl class="col-md-2">
        <dt>购物指南</dt>
        <dd>购物流程</dd>
        <dd>会员介绍</dd>
        <dd>生活旅行/团购</dd>
        <dd>常见问题</dd>
        <dd>大家电</dd>
        <dd>联系客服</dd>
      </dl>
      <dl class="col-md-2">
        <dt>配送方式</dt>
        <dd>上门自提</dd>
        <dd>211限时达</dd>
        <dd>配送服务查询</dd>
        <dd>配送费收取标准</dd>
        <dd>海外配送</dd>
      </dl>
      <dl class="col-md-2">
        <dt>支付方式</dt>
        <dd>货到付款</dd>
        <dd>在线支付</dd>
        <dd>分期付款</dd>
        <dd>邮局汇款</dd>
        <dd>公司转账</dd>
      </dl>
      <dl class="col-md-2" >
        <dt>售后服务</dt>
        <dd>售后政策</dd>
        <dd>价格保护</dd>
        <dd>退款说明</dd>
        <dd>返修/退换货</dd>
        <dd>取消订单</dd>
      </dl>
      <dl class="col-md-2">
        <dt>特色服务</dt>
        <dd>夺宝岛</dd>
        <dd>DIY装机</dd>
        <dd>延保服务</dd>
        <dd>京东E卡</dd>
        <dd>京东通信</dd>
        <dd>京东JD+</dd>
      </dl>
      <div class="module clearfix"> 
        <dt class="modtitle">合作伙伴</dt> 
        <div class="modcontent"> 
         <!-- 友情链接 --> 
         <ul class="menu">
          @if(!empty($links))
           @foreach($links as $k=>$v) 
          
          <li><a href="http://{{ $v->http }}" target="_blank">{{ $v->name }}</a></li> @endforeach 
          @endif
         </ul> 
        </div> 
       </div>
      <div style='clear:both;text-align:center;font-size:12px;line-height:20px;margin-left:-300px;margin-top:100px;'>
        关于我们 | 联系我们 | 联系客服 | 商家入驻 | 手机京东 | 友情链接 | 销售联盟 ｜ 京东社区 ｜ 京东公益 | English Site | ContacT Us　<br>
        <img src="" alt="">京公网安备 110000020000088号 | 京ICP证070359号 | 互联网药品信息服务资格证编号(京)-经营性-2014-0008 | 新出发京零 字第大120007号<br>
        互联网出版许可证编号新出网证(京)字150号 | 出版物经营许可证 | 网络文件经营许可证京网文[2014]2148-348号 | 违法和不良信息举报电话:4006561155<br>
        Copyright@2004-2016京东JD.com版权所有 | 消费者维权热线:4006067733<br>
        京东旗下网站:京东钱包<br>
        <img src="/static/home/images//f_1.png" alt="">
        <img src="/static/home/images//f_2.png" alt="">
        <img src="/static/home/images//f_3.jpg" alt="">
        <img src="/static/home/images//f_4.png" alt="">
        <img src="/static/home/images//f_5.jpg" alt="">
        <img src="/static/home/images//f_6.jpg" alt="">
      </div>
    </div>
   <!-- Footer Top Container --> 
   <section class="footer-top"> 
    <div class="container content"> 
     <div class="row"> 
      <div class="col-sm-6 col-md-3 box-information"> 
        
      </div> 
     </div> 
    </div> 
   </section> 

   <!-- /Footer Top Container --> 
   <!-- Footer Bottom Container --> 
   <div class="footer-bottom-block "> 
    <div class=" container"> 
     <div class="row"> 
      <div class="col-sm-5 copyright-text">
       Copyright &copy; 2017.Company name All rights reserved.
       <a target="_blank" href="http://sc.chinaz.com/moban/">网页模板</a>
      </div> 
      <div class="col-sm-7"> 
       <div class="block-payment text-right">
        <img src="/home/image/demo/content/payment.png" alt="payment" title="payment" />
       </div> 
      </div> 
      <!--Back To Top--> 
      <div class="back-to-top">
       <i class="fa fa-angle-up"></i>
       <span> Top </span>
      </div> 
     </div> 
    </div> 
   </div> 
   <!-- /Footer Bottom Container --> 
  </footer> 
   <!-- //end Footer Container --> @show 
  </div> 
  <!-- Social widgets --> 
  <section class="social-widgets visible-lg"> 
   <ul class="items"> 
    <li class="item item-01 facebook"> 
     <div class="tab-content"> 
      <div class="title"> 
       <h5>FACEBOOK</h5> 
      </div> 
      <div class="loading"> 
       <img src="/home/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader" /> 
      </div> 
     </div> </li> 
    <li class="item item-02 twitter"> 
     <div class="tab-content"> 
      <div class="title"> 
       <h5>TWITTER FEEDS</h5> 
      </div> 
      <div class="loading"> 
       <img src="/home/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader" /> 
      </div> 
     </div> </li> 
    <li class="item item-03 youtube">  
     <div class="tab-content"> 
      <div class="title"> 
       <h5>YouTube</h5> 
      </div> 
      <div class="loading"> 
       <img src="/home/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader" />
      </div> 
     </div> </li> 
   </ul> 
  </section> 
  <!-- End Social widgets --> 
  <link rel="stylesheet" property="stylesheet" href="/home/css/themecss/cpanel.css" type="text/css" media="all" /> 
  <!-- Preloading Screen --> 
  <div id="loader-wrapper"> 
   <div id="loader"></div> 
   <div class="loader-section section-left"></div> 
   <div class="loader-section section-right"></div> 
  </div> 
  <!-- End Preloading Screen --> 
  <!-- Include Libs & Plugins
============================================ --> 
  <!-- Placed at the end of the document so the pages load faster --> 
  <script type="text/javascript" src="/home/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="/home/js/owl-carousel/owl.carousel.js"></script> 
  <script type="text/javascript" src="/home/js/themejs/libs.js"></script> 
  <script type="text/javascript" src="/home/js/unveil/jquery.unveil.js"></script> 
  <script type="text/javascript" src="/home/js/countdown/jquery.countdown.min.js"></script> 
  <script type="text/javascript" src="/home/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script> 
  <script type="text/javascript" src="/home/js/datetimepicker/moment.js"></script> 
  <script type="text/javascript" src="/home/js/datetimepicker/bootstrap-datetimepicker.min.js"></script> 
  <script type="text/javascript" src="/home/js/jquery-ui/jquery-ui.min.js"></script> 
  <!-- Theme files
============================================ --> 
  <script type="text/javascript" src="/home/js/themejs/application.js"></script> 
  <script type="text/javascript" src="/home/js/themejs/toppanel.js"></script> 
  <script type="text/javascript" src="/home/js/themejs/so_megamenu.js"></script> 
  <script type="text/javascript" src="/home/js/themejs/addtocart.js"></script> 
  <script type="text/javascript" src="/home/js/themejs/cpanel.js"></script>   
 </body>
</html>