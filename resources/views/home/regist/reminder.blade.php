<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>激活邮件</title>
</head>
<body>
	<per>
		<p>尊敬的 {{$rs['uname']}}:</p>
		<hr>
		<p>您好，感谢您的注册。这是一封注册确认邮件。 
		请点击以下链接完成确认：<a href="http://www.myshop1.com/home/doremind?id={{$id}}&token={{$rs['token']}}">http://www.myshop1.com</a>&nbsp;&nbsp;&nbsp;如果链接不能点击，请复制地址到浏览器，然后直接打开。</p>
	</per>		
</body>
</html>
	