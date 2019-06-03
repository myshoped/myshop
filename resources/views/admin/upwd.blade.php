@extends('admin.layout.index')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            修改密码
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
        <form role="form" action="/admin/doupwd" method="post" enctype='multipart/form-data' class="form-horizontal">
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
                    用户名
                </label>
                <div class="col-sm-10">
                    <input type="text" name="uname" class="form-control" id="field-1" value="{{$rs->uname}}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">
                    旧密码
                </label>
                <div class="col-sm-10">
                    <input type="password" name="oldupwd" class="form-control" id="field-1" value="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">
                    新密码
                </label>
                <div class="col-sm-10">
                    <input type="password" name="upwd" class="form-control" id="field-1" value="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">
                    确认密码
                </label>
                <div class="col-sm-10">
                    <input type="password" name="repassword" class="form-control" id="field-1" value="">
                </div>
            </div>
            <div class="mws-button-row">
    			<input type="submit" value="修改" class="btn btn-primary" style="display:block;margin:0 auto">
    		</div>
        </form>
    </div>
</div>
@endsection
