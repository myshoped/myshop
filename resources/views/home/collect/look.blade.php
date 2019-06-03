@include('home.common.index')

  <div class="main-container container">
  <ul class="breadcrumb">
    <li>
      <a href="/">
        <i class="fa fa-home" title="家导航"></i>
      </a>
    </li>
    <li>
      <a href="javascript:;">商品收藏页</a></li>

  </ul>
    
    <div class="row">
      <!--Left Part Start -->
      <aside class="col-sm-4 col-md-3" id="column-left">
        
        <div class="module latest-product titleLine">
   <h3 class="modtitle">火热商品</h3>
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
               <!--  <a href="#"><img src="/home/image/demo/cms/left-image-static.png" alt="left-image"></a> -->
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
                    <a  href="#"><img src="/home/image/demo/shop/category/electronic-cat.png" alt="Apple Cinema 30&quot;"><br></a>
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
                    <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
                    <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                  </div>
                </div>
              </div>
              
              <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                <!-- 变量 -->
              </div>
            </div>
          </div>
          <!-- //end Filters -->
          <!--changed listings-->
          <div class="products-list row grid">
          <!-- 循环 -->

          @if(isset($data))
          @foreach($data as $k=>$v)
          <div class="product-layout col-md-4 col-sm-6 col-xs-12 ">
            <div class="product-item-container" style="height:420px">
              <div class="left-block">
                <div class="product-image-container lazy second_img ">
                  <img data-src="/public/images{{ $v->goods->images }}" src="/public/images{{ $v->goods->images }}"  alt="Apple Cinema 30&quot;" onerror="this.src='/public/images{{ $v->goods->images }}'" class="img-responsive" style="width:238px; height: 238px" />

                  <a href="javascript:;"><img data-src="/201711101555115178.jpg" src="/201711101555115178.jpg"  alt="Apple Cinema 30&quot;" onerror="this.src='/201711101555115178.jpg'" class="img_0 img-responsive" /></a>
                </div>
                <!--Sale Label-->
                <!-- <span class="label label-sale">Sale</span> -->
                <!--countdown box-->
                <div class="countdown_box">
                  <div class="countdown_inner">
                    
                    
                    
                  </div>
                  </div>
                <!--end countdown box-->
                
                <!--full quick view block-->
                <!-- <a class="quickview  visible-lg" data-fancybox-type="iframe"  href="#">  进入</a> -->
                <!--end full quick view block-->
              </div>
              
              
              <div class="right-block">
                <div class="caption">
                  <h4 style="height:52px"><a href="/home/goods/details/{{ $v->goods->id }}"><p style="width: 200px; overflow:hidden;white-space:nowrap; text-overflow:ellipsis;">
          {{ $v->goods->gname }}
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
                    <span class="price-new">￥{{ $v->goods->price }}</span> 
                    <span class="price-old">{{ round(($v->goods->price) / 9.8,2) }}</span>     
                    <span class="label label-percent">-2%</span> 
                    <div class="pull-right" style="margin-right:15px">
                      
                        <span style="font-size: 10px; color:#999">已收藏&nbsp;:</span>
                        <a href="javascript:;"  class="like"  style="display: none;">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="javascript:;" title="取消收藏" class="dislike" value="{{ $v->id }}" title="点击取消收藏">
                            <i class="fa fa-heart" style="color:#DA2723"></i>
                        </a>

                          
                      </div>   
                  </div>
                  <div class="description item-desc hidden">
                    <p>{{ $v->intro }}</p>
                  </div>
                  
                </div>
                
                
                  
              </div><!-- right block -->

            </div>

    </div>
  <div class="clearfix visible-xs-block"></div>
  @endforeach
   @endif
    
      <a href="/"><span class="text-right">&nbsp;&nbsp;&nbsp;<<去看看商品>></span></a>
   
  <!-- 循环结束 -->

  
  
  
  
  
</div>          <!--// End Changed listings-->
          <!-- Filters -->
          <div class="product-filter product-filter-bottom filters-panel" >
            <div class="row">
              <div class="col-md-2 hidden-sm hidden-xs">
              </div>
               <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
                
              </div>
            <div class="box-pagination col-md-3 col-sm-4 text-right"></div>
                  
             </div>
          </div>
          <!-- //end Filters -->
          
        </div>
        
      </div>
      
      
    </div>
    <!--Middle Part End-->
  </div>
  <!-- //Main Container -->

</header>
                
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
   <script>
    $('.dislike').click(function(){
                    var that = $(this);
                    
                    var gid = $(this).attr('value');
                    $.post('/home/collect/del', {'_token':"{{ csrf_token() }}",'id':gid}, function(msg){

                      if(msg == 'success') {
                        that.prev().css('display', '');
                        that.css('display', 'none');
                        that.prev().prev().html('收藏&nbsp;:');
                        that.parent().parent().parent().parent().parent().parent().remove();
                      } else {
                        alert('删除失败!');
                      }
                      
                    }, 'html');

                    
                  });
  </script>
 </body>
</html>