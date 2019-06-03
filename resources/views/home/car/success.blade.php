<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
  .aa{
        display: block;
    padding: 0 26px;
    height: 36px;
    font: 400 18px/36px arial;
    font-size: 18px;
    background-color: #f50;
    color: #fff;
    text-align: center;
    cursor: pointer;
    outline: 0;
    z-index: 999;

  }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>付款成功页面</title>
<link rel="stylesheet"  type="text/css" href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css"/>
<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
<link href="/homes/basic/css/demo.css" rel="stylesheet" type="text/css" />

<link href="/homes/css/sustyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/home/basic/js/jquery-1.7.min.js"></script>

</head>

<body>




<!--悬浮搜索框-->



<div class="clear"></div>



<div class="take-delivery">
 <div class="status">
   <h2>您已成功付款</h2>
   <div class="successInfo">
     <ul>
       <li>付款金额<em>{{$rss->sum}}</em></li>
       <div class="user-info">
         <p>收货人：{{$rss->rec}}</p>
         <p>联系电话：{{$rss->tel}}</p>
         <p>收货地址：{{$rss->addr}}</p>
       </div>
             <p style="color: red;font-size: 17px;font-weight:bold;">请认真核对您的收货信息，如有错误请联系客服</p>
                               
     </ul>
    
    </div>
  </div>
  <a href="/" class="aa" tabindex="0" >回到首页</a>
</div>


<div class="footer" >
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


</body>
</html>
