@extends('admin.layout.index')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            添加角色页面
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
        <form role="form" action="/admin/role" method="post" class="form-horizontal">
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
                    角色名
                </label>
                <div class="col-sm-10">
                    <input type="text" name="rolename" class="form-control" id="field-1" placeholder="请输入角色名">
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
                            <input type="radio" name="status" value="1" checked>
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
            <div class="mws-button-row">
                <input type="submit" value="添加" class="btn btn-primary" style="display:block;margin:0 auto">
            </div>
        </form>
    </div>
</div>
@endsection