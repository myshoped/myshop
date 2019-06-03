<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>{{$title}}</title>
	<meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/loghome/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/loghome/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/loghome/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/loghome/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/loghome/ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="/loghome/css/bootstrap/css/bootstrap.min.css">
	<link href="/loghome/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/loghome/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/loghome/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="/loghome/css/themecss/lib.css" rel="stylesheet">
	<link href="/loghome/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="/loghome/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="/loghome/css/themecss/so-categories.css" rel="stylesheet">
	<link href="/loghome/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="/loghome/css/responsive.css" rel="stylesheet">
	<script type="text/javascript" src="/loghome/js/jquery-2.2.4.min.js"></script>
	<link href="/loghome/css/responsive.css" rel="stylesheet">
	<link id="color_scheme" href="/loghome/css/theme.css" rel="stylesheet">
    <link href="/loghome/css/style.css" rel="stylesheet">
    <link href="/loghome/css/self.css" rel="stylesheet">
    <link href="/loghome/css/shortcodes.css" rel="stylesheet">
	<!-- 引入login图标 --> 
	<link rel="icon" href="/assets/images/logo-white-bg@2x.png" type="image/x-icon" /> 
	<!-- 结束 --> 

</head>

<body class="common-home res layout-home1">
<!-- 显示表单提交的错误信息开始 -->
@if (session('success'))
    <div class="alert alert-success" id="success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
            <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关闭</font></font></span>
        </button>
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger" id="error">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
            <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关闭</font></font></span>
        </button>
        {{ session('error') }}
    </div>
@endif
<!-- 显示表单提交的错误信息结束 -->
     


    <div id="wrapper" class="wrapper-full banners-effect-7">
	<!-- Header Container  -->
	<header id="header" class=" variantleft type_1">
<!-- Header Top -->
<div class="header-top compact-hidden">
	<div class="container">
		<div class="row">
			<div class="header-top-left form-inline col-sm-6 col-xs-12 compact-hidden">
				<div class="form-group currencies-block" style="margin-left: 22px;">
					<form>
						<a href="" class="btn btn-xs">
							<span class="icon icon-credit "></span>{{$user->uname}}
						</a>
					</form>
				</div>
			</div>
			<div class="header-top-right form-inline text-right collapsed-block col-sm-6 col-xs-12 compact-hidden">
				<div class="form-group currencies-block">
					<form>
						<a href="/loghome/orders" class="btn btn-xs">
							<span class=""></span> 我的订单 
						</a>
						
					</form>
				</div>
				<div class="form-group currencies-block">
					<form>
						<a href="/loghome/users" class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
							<span class="icon icon-credit "></span> 我的商城 <span class="fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu btn-xs">
							<li> <a href="/loghome/orders"><span class="fa fa-check-square"></span>购物车</a></li>
							<li> <a href="/loghome/returns"><span class="fa fa-facebook"></span>返修退换货</a></li>
							<li> <a href="/loghome/usersgoods"><span class="fa fa-heart"></span>我的收藏</a></li>
							<li> <a href="/loghome/concerns"><span class="fa fa-bell"></span>消息</a></li>
						</ul>
					</form>
				</div>
				<div class="form-group currencies-block">
					<form>
						<a class="btn btn-xs">
							<span class="icon icon-credit "></span> 商城会员
						</a>
					</form>
				</div>
				<div class="form-group currencies-block">
					<form>
						<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
							<span class="icon icon-credit "></span> 客户服务 <span class="fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu btn-xs">
							<li> <a href="#"><span class="fa fa-hops">帮助中心</a></li>
							<li> <a href="#">售后服务</a></li>
							<li> <a href="#"><span class="fa fa-headphones"></span>在线客服</a></li>
							<li> <a href="#">意见建议</a></li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Header Top -->

<!-- Header center -->
<div class="header-center left">
	<div class="container">
		<div class="row">
			<!-- Logo -->
			<div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
				<a href="/"><img src="/assets/images/logo-white-bg@2x.png" title="Your Store" alt="Your Store" /></a>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12"> 
				<a href="/home/user"><span style="font-size: 25px; vertical-align: inherit;"><span style="vertical-align: inherit;">个人中心</span></span></a>
			</div>
			<div class="col-md-2" style="float:right;margin-top: 0px;">
                <div class="input-group">
                    <img src="{{$user->uface}}" style="border-radius:50%;" alt="">
                </div>
            </div>
		</div>
	</div>

</div>

<!-- Navbar switcher -->
<!-- //end Navbar switcher -->
	</header>
<section class="flat-account background">
            <div class="container">
                <div class="row col-md-12">
                    <div class="col-md-2 pull-left" >
				    <div class="m_left">
				        	<div class="left_n">管理中心</div>
				        	<div class="left_m">
				                <ul>
				                	<li ><a href="/home/user/{{ $user->id }}/edit">修改信息</a></li>
				                    <li><a href="/home/upwd">修改密码</a></li>
				                </ul>
				            </div>
				            <div class="left_m">
				            	<div class="left_m_t t_bg1">订单中心</div>
				                <ul>
				                	<li><a href="">我的订单</a></li>
				                    <li><a href="">收货地址</a></li>
				                </ul>
				            </div>
				            <div class="left_m">
				            	<div class="left_m_t t_bg1">会员中心</div>
				                <ul>
				                    <li><a href="">我的收藏</a></li>
				                </ul>
				            </div>
				        </div>
							
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-10 pull-right">
				        <div class="m_right" style="margin-left: 50px;">
				            <div class="table-responsive" style="margin-left: 50px; margin-top:50px;">				            </div>
				            <div class="mem_t">修改信息</div>
				        <form action="/home/user/{{$user->id}}" method="post" enctype="multipart/form-data">
				        	{{method_field('PUT')}}
				        	{{ csrf_field() }}
				           	<div class="table-responsive">
				           		<table class="table" border="0" style="width:750px; margin-top:20px;" cellspacing="0" cellpadding="0">
				              	<tbody><tr height="45">
				                <td style="width: 80px;" align="right">用户名</td>
				                <td>                            
					                <input type="text" name="uname" class="form-control" value="{{ $user->uname }}" readonly>
				                </td>
				               </div>
				              </tr>
				              <tr height="45">
				                <td align="right">昵称&nbsp; &nbsp;</td>
				                <td>
				                    <input type="text" name="nickname" class="form-control" value="{{ $user->nickname }}">
				                </td>
				              </tr>
				              <tr height="45">
				                <td align="right">性别 &nbsp; &nbsp;</td>
				                <td style="padding-top:5px;">
				                <div class="form-group">
				                	<div class="input-group">
				                		<div class="radio">
				                		<label>
					                        <input type="radio" name="sex" value="m" @if($user->sex == 'm') checked @endif>男
					                    </label>
					                    <div class="radio">
					                    <label>
					                        <input type="radio" name="sex" value="w" @if($user->sex == 'w') checked @endif>女
					                    </label>
					                    <div class="radio">
					                    <label>    
					                        <input type="radio" name="sex" value="x" @if($user->sex == 'x') checked @endif>保密
					                    </label>
				                	</div>
				                </div>
				                </td>
				              </tr>
				              <tr height="45">
				                <td align="right">电话&nbsp; &nbsp;</td>
				                <td>
				                    <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
				                </td>
				              </tr>
				              <tr height="45">
				                <td align="right">邮箱&nbsp; &nbsp;</td>
				                <td>
				                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
				                </td>
				              </tr>
				              <tr height="45">
				                <td align="right">头像&nbsp; &nbsp;</td>
				                <td>
					                <div class="form-group">
					                    <img src="{{$user->uface}}" alt="" id="photo" style="width:500px">
                    					<input type="file" name="uface" class="form-control" id="pic">
					                </div>
				            	</td>
				              </tr>
				              <tr height="45">
				                <td align="right">地址&nbsp; &nbsp;</td>
				                <td><div class="form-group">
				                        <input type="text" name="addr" class="form-control" value="{{ $user->addr }}">
				                </div></td>
				              </tr>
				              <tr height="50" valign="bottom">
				                <td>&nbsp;</td>
				                <td><input type="submit" value="提交" class="btn btn-danger"></td>
				              </tr>
				            </tbody>
				        </table>
				        </div>
				    </form>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
<script>
	$(function() {
        $("#pic").change(function() {
            var $file = $(this);
            var objUrl = $file[0].files[0];
            //获得一个http格式的url路径:mozilla(firefox)||webkit or chrome  
            var windowURL = window.URL || window.webkitURL;
            //createObjectURL创建一个指向该参数对象(图片)的URL  
            var dataURL = windowURL.createObjectURL(objUrl);
            $("#photo").attr("src", dataURL);
        });
    });
    //错误信息淡出效果 开始
    setTimeout(function(){
        $('#error').fadeOut(2000);
    },2000);
    setTimeout(function(){
        $('#success').fadeOut(2000);
    },2000);
	//错误信息淡出效果 结束
</script>
	<!-- Footer Container -->
	<footer class="footer-container">
		<!-- Footer Top Container -->
		<section class="footer-top">
			<div class="container content">
				<div class="row">
					<div class="col-sm-6 col-md-3 box-information">
						<div class="module clearfix">
							<h3 class="modtitle"></h3>
							<div class="modcontent">
							</div>
							<div style="margin-bottom: 50px;"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Footer Top Container -->
		<!-- Footer Bottom Container -->
		<div class="footer-bottom-block ">
			<div class=" container">
				<div class="row">
					<div class="col-sm-5 copyright-text">Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></div>
					<div class="col-sm-7">
						<div class="block-payment text-right"><img src="/loghome/image/demo/content/payment.png" alt="payment" title="payment" ></div>
					</div>
					<!--Back To Top-->
					<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>

				</div>
			</div>
		</div>
		<!-- /Footer Bottom Container -->
		
		
	</footer>
	<!-- //end Footer Container -->

    </div>
	<!-- Social widgets -->

<link rel='stylesheet' property='stylesheet'  href='/loghome/css/themecss/cpanel.css' type='text/css' media='all' />
	
<!-- Preloading Screen -->
<!-- End Preloading Screen -->
	
<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->

<script type="text/javascript" src="/loghome/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/loghome/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="/loghome/js/themejs/libs.js"></script>
<script type="text/javascript" src="/loghome/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="/loghome/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/loghome/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="/loghome/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="/loghome/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/loghome/js/jquery-ui/jquery-ui.min.js"></script>


<!-- Theme files
============================================ -->
<script type="text/javascript" src="/loghome/js/themejs/application.js"></script>

<script type="text/javascript" src="/loghome/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="/loghome/js/themejs/addtocart.js"></script>	
<script type="text/javascript" src="/loghome/js/themejs/cpanel.js"></script>
</body>
</html>