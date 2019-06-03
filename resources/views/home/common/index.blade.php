<!DOCTYPE html>
<html lang="en">
 <head> 
  <!-- Basic page needs
	============================================ --> 
  <title>{{ $title }}</title> 
  <meta charset="utf-8" /> 
  <meta name="keywords" content="" /> 
  <meta name="author" content="Magentech" /> 
  <meta name="robots" content="index, follow" /> 
  <!-- Mobile specific metas
	============================================ --> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <!-- 引入login图标 --> 
  <link rel="icon" href="/assets/images/logo-white-bg@2x.png" type="image/x-icon" /> 
  <!-- 结束 --> 
  <!-- Favicon

  
	============================================ --> 
  <!-- 收藏 -->
<style type="text/css">
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
    }
    input[type="number"]{
      -moz-appearance: textfield;
    }
</style>
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

  <link rel="stylesheet" type="text/css" href="/home/css/zzsc.css">


  <script type="text/javascript" class="library" src="/home/js/zzsc.js"></script>
  <script type="text/javascript">
    $('.vertical').removeClass('open');

  </script>
  <!-- 结束 -->

  <!-- layui弹窗引入 -->
    <link rel="stylesheet" href="/layui/css/layui.css">
    <script src="/layui/layui.all.js"></script>
    
    <!-- <link rel="stylesheet" href="/layui/css/layui.css">
    <script src="/layui/layui.js"></script> -->
    <!-- layui引入结束 -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/home/ico/apple-touch-icon-144-precomposed.png" /> 
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/home/ico/apple-touch-icon-114-precomposed.png" /> 
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/home/ico/apple-touch-icon-72-precomposed.png" /> 
  <link rel="apple-touch-icon-precomposed" href="/home/ico/apple-touch-icon-57-precomposed.png" /> 
  <link rel="shortcut icon" href="/home/ico/favicon.png" /> 
  <!-- Google web fonts
	============================================ --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,300" rel="stylesheet" type="text/css" /> 
  <!-- Libs CSS
	============================================ --> 
  <link rel="stylesheet" href="/home/css/bootstrap/css/bootstrap.min.css" /> 
  <link href="/home/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" /> 
  <link href="/home/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" /> 
  <link href="/home/js/owl-carousel/owl.carousel.css" rel="stylesheet" /> 
  <link href="/home/css/themecss/lib.css" rel="stylesheet" /> 
  <link href="/home/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" /> 
  <!-- Theme CSS
	============================================ --> 
  <link href="/home/css/themecss/so_megamenu.css" rel="stylesheet" /> 
  <link href="/home/css/themecss/so-categories.css" rel="stylesheet" /> 
  <link href="/home/css/themecss/so-listing-tabs.css" rel="stylesheet" /> 
  <link id="color_scheme" href="/home/css/theme.css" rel="stylesheet" /> 
  <link href="/home/css/responsive.css" rel="stylesheet" /> 
  <script type="text/javascript" src="/home/js/jquery-2.2.4.min.js"></script> 

 </head> 
 <body class="common-home res layout-home1"> 
  <div id="wrapper" class="wrapper-full banners-effect-7"> 
   <!-- Header Container  --> 
   <header id="header" class=" variantleft type_1">
     @section('navbar') 
    <!-- Header Top -->
<div class="header-top compact-hidden"> 
     <div class="container"> 
      <div class="row"> 
       <div class="header-top-left form-inline col-sm-6 col-xs-12 compact-hidden">
        <div class="form-group currencies-block"> 
         <form action="" id="currency"> 
         <a href="/home/login" class="btn btn-xs dropdown-toggle"> <span class="icon icon-credit "></span> 登录 </a>
         </form> 
        </div>
        <div class="form-group currencies-block"> 
         <form action="" id="currency"> 
         <a href="/home/regist" class="btn btn-xs dropdown-toggle"> <span class="icon icon-credit "></span> 免费注册 </a>
         </form> 
        </div> 
       </div> 
       <div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-12 compact-hidden"> 
        <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5> 
        <div class="tabBlock" id="TabBlock-1"> 
         <ul class="top-link list-inline">
         
          <li class="account" id="my_account"> <a href="javascript:;" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span>{{empty($rs)? '请先登录' : $rs->nickname}}</span> <span class="fa fa-angle-down"></span></a> 
           <ul class="dropdown-menu "> 
            <li><a href="/home/user"><i class="fa fa-user"></i> 个人中心 </a></li> 
            <li><a href="/home/logout"><i class="fa fa-pencil-square-o"></i> 退出 </a></li> 
           </ul>
         </li>
        </ul> 
        <div class="form-group currencies-block">
          <form>
            <a href="/homes/dingdan" class="btn btn-xs">
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
              <li> <a href="/homes/car"><span class="fa fa-check-square"></span>购物车</a></li>
              <li> <a href="/loghome/returns"><span class="fa fa-facebook"></span>返修退换货</a></li>
              <li> <a href="/home/collect/look"><span class="fa fa-heart"></span>我的收藏</a></li>
              <li> <a href=""><span class="fa fa-bell"></span>消息</a></li>
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
     @show