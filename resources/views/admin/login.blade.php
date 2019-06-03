<!DOCTYPE HTML>
<html>
    <head>
        <title>
            {{$title}}
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
        />
        <script type="application/x-javascript">
            addEventListener("load",
            function() {
                setTimeout(hideURLbar, 0);
            },
            false);
            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <link href="/login/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="/login/sweetalert.css"/>
        <!-- Custom Theme files -->
        <link href="/login/css/style.css" rel="stylesheet" type="text/css" media="all"
        />
        <!--js-->
        <script src="/login/js/jquery-2.1.1.min.js"></script>
        <script src="/login/sweetalert.min.js"></script>
        <!--icons-css-->
        <link href="/login/css/font-awesome.css" rel="stylesheet">
        <!--Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet'
        type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
        <!--static chart-->
        <!-- 引入login图标 -->
        <link rel="icon" href="/assets/images/logo-white-bg@2x.png" type="image/x-icon"/>
        <!-- 结束 -->
    </head>
    
    <body>
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
        <div class="login-page">
            <div class="login-main">
                <div class="login-head">
                    <h1>
                        国商
                    </h1>
                </div>
                <div class="login-block">
                    <form action="/admin/dlogin" method="post">
                        {{csrf_field()}}
                        <input type="text" name="uname" placeholder="请输入用户名" required="">
                        <input type="password" name="upwd" class="lock" placeholder="请输入密码">
                        <div class="mws-form-item">
                            <input style='width:71%' type="text" name="code" class="mws-login-password required" placeholder="请输入验证码">
                            <img src="/admin/captcha" alt="" style="border-radius:5px;cursor:pointer" onclick='this.src = this.src+="?1"' style='display: inline'>
                        </div>
                        <input type="submit" name="Sign In" value="登录">
                    </form>
                </div>
            </div>
        </div>
        <!--COPY rights end here-->
        <!--scrolling js-->
        <script src="/login/js/jquery.nicescroll.js">
        </script>
        <script src="/login/js/scripts.js">
        </script>
        <!--//scrolling js-->
        <script src="/login/js/bootstrap.js">
        </script>
        <!-- mother grid end here-->
    </body>
</html>
<script type="text/JavaScript">
    setTimeout(function(){
        $('#error').fadeOut(2000);
    },1000);
    setTimeout(function(){
        $('#success').fadeOut(2000);
    },1000);
</script>
