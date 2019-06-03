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
    
    <!-- Theme CSS
    ============================================ -->
    
    <link href="/loghome/css/responsive.css" rel="stylesheet">
    <link href="/loghome/css/style.css" rel="stylesheet">
    <link href="/loghome/css/shortcodes.css" rel="stylesheet">
    <link href="/loghome/css/validator/bootstrapValidator.min.css" rel="stylesheet">
    <!-- 引入login图标 -->
    <link rel="icon" href="/assets/images/logo-white-bg@2x.png" type="image/x-icon"/>
    <!-- 结束 -->
<style type="text/css">
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
    }
    input[type="number"]{
      -moz-appearance: textfield;
    }
</style>
</head>
<script type="text/javascript" src="/loghome/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/loghome/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/loghome/js/validator/bootstrapValidator.min.js">
</script>
<body class="common-home res layout-home1">
<!-- 继承开始 -->
@section('content')
    <!-- 显示表单提交的错误信息开始 -->
        @if (count($errors) > 0)
            <div class="alert alert-danger" id="error">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
                    <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关闭</font></font></span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- 为了验证码的错误信息 -->
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
    <!-- Header center -->
    <div class="header-center left">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="navbar-logo col-md-3 col-sm-12 col-xs-12" style="padding: 50px 0px">
                    <a href="/"><img src="/assets/images/logo-white-bg@2x.png" title="Your Store" alt="Your Store" /></a>
                </div>
                <div class="col-md-2" style="float:right;padding-top:50px;">
                    <div class="input-group">
                        <a href="/home/login" target="_blank" title="" class="btn btn-info" style="color:black;">已有账号-前往登录</a>
                    </div>
                </div>
            </div>
                <!-- //end Logo -->
            </div>
        </div>
    </div>
    </header>
    <section class="flat-account background">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style=" margin-left: 300px">
                        <div class="form-register" style="height: 750px;">
                              <!-- Nav tabs -->
                            <div class="title">
                                <h2>欢迎注册</h2>
                            </div>
                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <form action="/home/doregist" method="post" id="form-login" accept-charset="utf-8">
                                        {{ csrf_field() }}
                                        <div id="name" class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon glyphicon glyphicon-user"></span>
                                                <input type="text" name="uname" class="form-control" placeholder="账号">
                                            </div>
                                        </div>
                                        <div style="margin-bottom: 35px;"></div>
                                        <div id="pwd" class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon glyphicon glyphicon-lock"></span>
                                                <input type="password" name="upwd" class="form-control" placeholder="密码">
                                            </div>
                                        </div>
                                        <div style="margin-bottom: 35px;"></div>
                                        <div id="pwd_confirmation" class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon glyphicon glyphicon-ok"></span>
                                                <input type="password" name="repassword" class="form-control" placeholder="确认密码">
                                            </div>
                                        </div>
                                        <div style="margin-bottom: 35px;"></div>
                                        <div id="phone" class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon glyphicon glyphicon-phone"></span>
                                                <input id="tel" type="text" name="email" class="form-control" placeholder="邮箱">
                                            </div>
                                        </div>
                                        <div style="margin-bottom: 35px;"></div>
                                        <div class="row" style="padding-left:15px;">
                                            <input type="text" style="width: 71%; display: inline;" class="form-control" name="code" placeholder="请输入验证码">
                                            <img src="/home/codes" style="border-radius:5px;cursor:pointer" onclick='this.src = this.src+="?1"' style='display: inline;'>
                                        </div>
                                        <div style="margin-bottom: 50px;"></div>
                                        <div class="form-box pull-left">
                                            <input type="submit"  value="注册" class="submit">
                                        </div>
                                        <!-- /.form-box -->
                                    </form><!-- /#form-login -->
                                </div>
                              </div>
                        </div><!-- /.form-login -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </section>
    <!-- Footer Container -->
    <footer class="footer-container">
        <!-- Footer Bottom Container -->
        <div class="footer-bottom-block ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 copyright-text">Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></div>
                    <div class="col-sm-7">
                        <div class="block-payment text-right"><img src="/loghome/image/demo/content/payment.png" alt="payment" title="payment" ></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer Bottom Container -->
    </footer>
    <!-- //end Footer Container -->
@show
<!-- 继承结束 -->
<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />
</body>
</html>
<!-- 错误信息淡出效果 开始 -->
<script type="text/JavaScript">
    setTimeout(function(){
        $('#error').fadeOut(2000);
    },2000);
    setTimeout(function(){
        $('#success').fadeOut(2000);
    },2000);
</script>
<!-- 错误信息淡出效果 结束 -->