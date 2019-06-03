@include('home.common.index')

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<style>
		.cart-empty{
			height: 98px;
		    padding: 80px 0 120px;
		    color: #333;

		}

		.cart-empty .message{
			height: 98px;
		    padding-left: 341px;
		    background: url(/car/car.png) 250px 22px no-repeat;
		}

		.cart-empty .message .txt {
		    font-size: 14px;
		}
		.cart-empty .message li {
		    line-height: 38px;
		}

		ol, ul {
		    list-style: outside none none;
		}

		.ftx-05, .ftx05 {
			color: #005ea7;
		}
		
		a {
		    color: #666;
		    text-decoration: none;
		    margin:0px;
		    padding:0px;
		    font-size:14px;
		}

		.cart-empty{
			display: none;
		}
		
	</style>	
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.js"></script>







		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>购物车页面</title>

		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/homes/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/homes/css/cartstyle.css" rel="stylesheet" type="text/css" />
		<link href="/homes/css/optstyle.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="../js/jquery.js"></script>

	</head>
<div id="cart">
	<body>

		<!--顶部导航条 -->
		<div class="am-container header">
		
			</div>

			<!--悬浮搜索框-->

			

			<div class="clear"></div>

			<!--购物车 -->
			<form action="/homes/shmcart"  method="post">
			<div class="concent">
				<div id="cartTable">
					<div class="cart-table-th">
						<div class="wp">
							<div class="th th-chk">
								<div id="J_SelectAll1" class="select-all J_SelectAll">

								</div>
							</div>
							<div class="th th-item">
								<div class="td-inner">商品信息</div>
							</div>
							<div class="th th-price">
								<div class="td-inner">单价</div>
							</div>
							<div class="th th-amount">
								<div class="td-inner">数量</div>
							</div>
							<div class="th th-sum">
								<div class="td-inner">小计</div>
							</div>
							<div class="th th-op">
								<div class="td-inner">操作</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>

					
					<div class="clear"></div>

					<tr class="item-list">
						<div class="bundle  bundle-last ">
							
							<div class="clear"></div>
							<form action="/homes/shmcart" method="post">
								{{csrf_field()}}
								
							<div class="bundle-main">
							
								@foreach($goods as $k => $v)
								
								<ul class="item-content clearfix">
									<li class="td td-chk">
										
										<div class="cart-checkbox ">
											<input class="check" id="J_CheckBox_170769542747" name="gid[]" value="{{$v->gid}}"  type="checkbox" gid = {{$v->gid}} 	>
											
										</div>
									</li>
									<li class="td td-item">
										<div class="item-pic">
											<a href="#" target="_blank"  class="J_MakePoint" data-point="tbcart.8.12">
												<img style="width: 90px;" src="/public/images{{$v->hasManygoods['images']}}" class="itempic J_ItemImg"></a>
										</div>
										<div class="item-info">
											<div class="item-basic-info" > 
												<a href="#" target="_blank" class="item-title J_MakePoint" data-point="tbcart.8.11">{{$v->hasManygoods['gname']}}</a>
											</div>
										</div>
									</li>
									<li class="td td-info">
										<div class="item-props ">
											
										</div>
									</li>
									<li class="td td-price">
										<div class="item-price price-promo-promo">
											<div class="price-content">
												
												<div class="price-line" >
													<em  class="J_Price price-now" tabindex="0">{{$v->hasManygoods['price']}}</em>
												</div>
											</div>
										</div>
									</li>
									<li class="td td-amount">
										<div class="amount-wrapper ">
											<div class="item-amount ">
												
												<input type="button" value="-"  class="min am-btn" />
												
												<input type="text" value="{{$v->cnt}}" class="shuliang" name="cnt[]" style="width:30px;" />
												<input type="button" value="+" id="jia" class="add am-btn"/>
												
											
											</div>
										</div>
									</li>
									<li class="td td-sum">
										<div class="td-inner">
											<!-- 单价 -->
											<!-- $dj = {{$v->hasManygoods['price']}}; -->
											<!-- 数量 -->
											<!-- $sl = {{$v->cnt}}; -->

											¥	<em tabindex="0" class="J_ItemSum number ">
												@php
												$dj = floatval($v->hasManygoods->price); 
												$sl = floatval($v->cnt);

												echo $dj * $sl; 

												@endphp
												</em>
										</div>
									</li>
									<li class="td td-op">
										<div class="td-inner">
											{{--<a title="移入收藏夹" class="btn-fav" href="#"> 移入收藏夹</a>--}}

											<a href="javascript:;" data-point-url="#" class="delete glyphicon glyphicon-trash"> 删除</a>
										</div>
									</li>
								</ul>

								@endforeach
							</div>
							</form>
						</div>
					</tr>
				</div>
				<div class="clear"></div>

				<div class="float-bar-wrapper">
					<div id="J_SelectAll2" class="select-all J_SelectAll">
						
					</div>
					
					<div class="float-bar-right">
						
						<div class="price-sum">
							<span class="txt">合计:</span>
							<strong class="price">¥<em id="J_Total">0.00</em></strong>
						</div>
						<!-- <a id="J_Go" class="submit-btn submit-btn-disabled" aria-label="请注意如果没有选择宝贝，将无法结算"> -->

						<div class="btn-area">
								<input type="submit" class="btn-area " value="结账" id="jiesuan"/>
								<!-- <button class="btn-area">结&nbsp;算</button> -->
								<!-- <span>结&nbsp;算</span> -->
							
						</div>
					<!-- </a> -->
					</div>
			</form>
				</div>


				<div class="footer">
					<div class="footer-hd">
						<p>
							<a href="#">恒望科技</a>
							<b>|</b>
							<a href="#">商城首页</a>
							<b>|</b>
							<a href="#">支付宝</a>
							<b>|</b>
							<a href="#">物流</a>
						</p>
					</div>
					<div class="footer-bd">
						<p>
							<a href="#">关于恒望</a>
							<a href="#">合作伙伴</a>
							<a href="#">联系我们</a>
							<a href="#">网站地图</a>
							<em>© 2015-2025 Hengwang.com 版权所有. 更多模板 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></em>
						</p>
					</div>
				</div>

			</div>
			
			<!--操作页面-->

			<div class="theme-popover-mask"></div>

			<div class="theme-popover">
				<div class="theme-span"></div>
				<div class="theme-poptit h-title">
					<a href="javascript:;" title="关闭" class="close">×</a>
				</div>
				<div class="theme-popbod dform">
			
				</div>
			</div>
		<!--引导 -->
		<div class="navCir">
			<li><a href="home.html"><i class="am-icon-home "></i>首页</a></li>
			<li><a href="sort.html"><i class="am-icon-list"></i>分类</a></li>
			<li class="active"><a href="shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>	
			<li><a href="/homes/person/index.html"><i class="am-icon-user"></i>我的</a></li>					
		</div>
	</body>
</div>

<div>
	<body>
	<div class="cart-empty"> 
	    <div class="message">
	        <ul>
	            <li class="txt">
	                购物车空空的哦~，去看看心仪的商品吧~
	            </li>
	            <li class="mt10">
	                <a href="/" class="ftx-05">
	                    去购物&gt;
	                </a>
	            </li>
	            
	        </ul>
	    </div>
	</div>
</body>
</div>
</html>


<script>

	
	

	//加的jq
	$('.add').click(function(){
		
		//获取数量
		var num = $(this).prev().val().trim();
		//console.log(num);

		//数量加一
		num++;

		// 赋值回去
		$(this).prev().val(num);

		//获取单价
		var dj = $(this).parents('ul').find('.price-now').text();

		//获取小计
		//改变小计价格
		var a=  $(this).parents('ul').find('.J_ItemSum').text(accMul(num,dj));
		console.log(a);

		duoxuankuang();
		
	

	});

	
	//减的jq
	$('.min').click(function(){
		
		//获取数量
		var num = $(this).next().val().trim();
		//console.log(num);

		//数量减一
		if(num>1){
		num--;
		}
		// 赋值回去
		$(this).next().val(num);


		//获取单价
		var dj = $(this).parents('ul').find('.price-now').text();

		//获取小计
		

		//改变小计价格
		var a=  $(this).parents('ul').find('.J_ItemSum').text(accMul(num,dj));
		console.log(a);

		duoxuankuang();

		
	});

	//乘法处理函数
	function accMul(arg1,arg2)
	{
		var m=0,s1=arg1.toString(),s2=arg2.toString();
		try{m+=s1.split(".")[1].length}catch(e){}
		try{m+=s2.split(".")[1].length}catch(e){}
		return Number(s1.replace(".",""))*Number(s2.replace(".",""))/Math.pow(10,m);
	}



	//点击多选框
	$('.cart-checkbox').click(function(){
		duoxuankuang();
	});

	//封装多选框函数
	function duoxuankuang(){

	 	// 赋给totals初始值
		var totals = 0;
		//遍历循环相加(已勾选的部分)
		$(":checkbox:checked").each(function(){
			//得到选中像的text值
			var tos = parseFloat($(this).parents('ul').find('.J_ItemSum').text());
			totals += tos;
		});
			// console.log(totals);
			//改变合计的值
    		$('#J_Total').text(totals);
		
		
	}

	// //全选
	// $(".check-all").click( function(){
	// 	//alert(123);

 //        $(".check").prop("checked",true);
 //        duoxuankuang();
 //    });

	//删除
	$('.delete').click(function(){
		//确认提示框
		var tishi = confirm('你确认删除吗?');
		if(!tishi){return} ;

		//获取选中项的gid
		var gid = $(this).parents('ul').find('.check').attr('gid');
		var rems = $(this);
		//console.log(gid);

		// 发送ajax
		$.post('/homes/remcart',{'_token':"{{csrf_token()}}",gid:gid},function(data){

			//console.log(data);
			if (data.code == 1) {

				alert(data.success);
				rems.parents('ul').remove();

				//relaods();

				duoxuankuang();
				//duoxuankuang();
				//隐藏购物车信息(删除购物车所有信息后)
				 var gids = $('.check').attr('gid');

				if (gids == undefined) {
					//location.reload();
					$('#cart').hide();
					$('.cart-empty').show();
				}
			}else{

				alert(data.error);

			}
		})


	});

	function relaods()
	{
				var gids = $('.check').attr('gid');

		//隐藏购物车信息(删除购物车所有信息后)
				 
					if (gids == undefined) {
					//location.reload();
					$('#cart').hide();
					$('.cart-empty').show();
				}
	}

		relaods();



// if($('shuliang').is(':checked')) {
//    alert(123);
// }

	
</script>


                
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




