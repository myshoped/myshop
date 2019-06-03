@extends('admin.layout.index')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            修改管理员页面
        </h3>
        <div class="panel-options">
            <a href="#" data-toggle="panel">
                <span class="collapse-icon">
                    –
                </span>
                <span class="expand-icon">
                    +
                </span>
            </a>
        </div>
    </div>
    <div class="panel-body">
        <form role="form" action="/admin/users/{{$users->uid}}" method="post" enctype='multipart/form-data' class="form-horizontal">
        	{{method_field('PUT')}}
            {{csrf_field()}}
            @if (count($errors) > 0)
			    <div class="alert alert-danger" id="success">
			        <button type="button" class="close" data-dismiss="alert">
			            <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
			            <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关闭</font></font></span>
			        </button>
			        <ul id="error">
			            @foreach ($errors->all() as $error)
			                <li >{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">
                    账号
                </label>
                <div class="col-sm-10">
                    <input type="text" name="uname" class="form-control" id="field-1" value="{{$users->uname}}" readonly>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    性别
                </label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="sex" value="m" @if($users->sex == 'm') checked @endif>
                            男
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="sex" value="w" @if($users->sex == 'w') checked @endif>
                            女
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="sex" value="x" @if($users->sex == 'x') checked @endif>
                            保密
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-2">
                    手机号
                </label>
                <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" id="field-2" placeholder="请输入手机号" value="{{$users->phone}}">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-2">
                    邮箱
                </label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="field-2" placeholder="请输入邮箱" value="{{$users->email}}">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-2">
                    地址
                </label>
                <div class="col-sm-10">
                    <input type="test" name="addr" class="form-control" id="field-2" placeholder="请输入地址" value="{{$users->addr}}">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-4">
                    头像
                </label>
                <div class="col-sm-10">
                	<img src="{{$users->uface}}" alt="" id="photo" style="width:500px;">
                    <input type="file" name="uface" class="form-control" id="pic">
                </div>
            </div>
            <div class="mws-button-row">
    			<input type="submit" value="修改" class="btn btn-primary" style="display:block;margin:0 auto">
    		</div>
        </form>
    </div>
</div>
@endsection

@section('js')
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
</script>
@stop