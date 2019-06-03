<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@foreach($rs as $k=>$v)
	<a href="http://{{$v->http}}">{{$v->name}}</a>&nbsp;&nbsp;	
	@endforeach
	
</body>
</html>