@extends('admin.layout.index')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            添加用户页面
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
        <form role="form" action="/admin/user" method="post" enctype='multipart/form-data' class="form-horizontal">
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
                    <input type="text" name="uname" class="form-control" id="field-1" placeholder="请输入用户名">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-2">
                    密码
                </label>
                <div class="col-sm-10">
                    <input type="password" name="upwd" class="form-control" id="field-2" placeholder="请输入密码">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-2">
                    确认密码
                </label>
                <div class="col-sm-10">
                    <input type="password" name="repassword" class="form-control" id="field-2" placeholder="请输入确认密码">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-2">
                    年龄
                </label>
                <div class="col-sm-10">
                    <input type="text" name="age" class="form-control" id="field-2" placeholder="请输入年龄">
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
                            <input type="radio" name="sex" value="m">
                            男
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="sex" value="w">
                            女
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="sex" value="x" checked>
                            保密
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    状态
                </label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="1">
                            开启
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="0">
                            禁用
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
                    <input type="text" name="phone" class="form-control" id="field-2" placeholder="请输入手机号" value="">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-2">
                    邮箱
                </label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="field-2" placeholder="请输入邮箱" value="">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-2">
                    地址
                </label>
                <div class="col-sm-10">
                    <input type="test" name="addr" class="form-control" id="field-2" placeholder="请输入地址" value="">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-4">
                    头像
                </label>
                <div class="col-sm-10">
                    <input type="file" name="uface" class="form-control" id="field-4">
                </div>
            </div>
            <div class="mws-button-row">
    			<input type="submit" value="添加" class="btn btn-primary" style="display:block;margin:0 auto">
    		</div>
        </form>
    </div>
</div>
@endsection