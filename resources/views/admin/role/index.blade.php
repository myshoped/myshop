@extends('admin.layout.index')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            角色列表页面
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
        <div id="example-1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <form action="/admin/role" method='get'>
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
            <div class="row">
                <div class="col-xs-6">
                    <div class="dataTables_length" id="example-1_length">
                        <label>
                            显示
                            <select name="num" aria-controls="example-1" class="form-control input-sm">
                                <option value="5" @if($request->num == '5') selected="selected" @endif >
                                    5
                                </option>
                                <option value="10" @if($request->num == '10') selected="selected" @endif >
                                    10
                                </option>
                                <option value="15" @if($request->num == '15') selected="selected" @endif >
                                    15
                                </option>
                            </select>
                            条
                        </label>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div id="example-1_filter" class="dataTables_filter" style="float: right;">
                        <label>
                            角色名:
                            <input type="text" name="rolename" class="form-control input-sm" placeholder="请输入角色名" aria-controls="example-1" value="{{$request->rolename}}">
                        </label>
                        <button class='btn btn-info' style="margin-top:11px;">搜索</button>
                    </div>
                </div>
            </div>
        </form>
            <table id="example-1" class="table table-striped table-bordered dataTable"
            cellspacing="0" width="100%" role="grid" aria-describedby="example-1_info"
            style="width: 100%;">
                <thead>
                    <tr role="row">
                    	<th class="sorting_asc" tabindex="0" aria-controls="example-1" rowspan="1"
                        colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column ascending"
                        style="width: 120px;">
                            ID
                        </th>
                        <th class="sorting_asc" tabindex="0" aria-controls="example-1" rowspan="1"
                        colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column ascending"
                        style="width: 150px;">
                            角色名
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example-1" rowspan="1"
                        colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">
                            状态
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example-1" rowspan="1"
                        colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;">
                            操作
                        </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th rowspan="1" colspan="1">
                            ID
                        </th>
                        <th rowspan="1" colspan="1">
                            角色名
                        </th>
                        <th rowspan="1" colspan="1">
                            状态
                        </th>
                        <th rowspan="1" colspan="1">
                            操作
                        </th>
                    </tr>
                </tfoot>
                <tbody>
                	@foreach($rs as $k => $v)
                    <tr role="row" class="odd">
                        <td class="sorting_1">
                            {{$v->id}}
                        </td>
                        <td>
                            {{$v->rolename}}
                        </td>
                        <td>
                            @if($v->status == '1')
                                开启
                            @else
                                禁用
                            @endif
                        </td>
                        <td>
                            <a class='btn btn-primary' href="/admin/roleper?rid={{$v->id}}">权限</a>
                        	<a class='btn btn-warning' href="/admin/role/{{$v->id}}/edit">修改</a>
                            <form action="/admin/role/{{$v->id}}" method='post' style='display: inline'>
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class='btn btn-danger'>删除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-xs-6">
                    <div class="dataTables_info" id="example-1_info" role="status" aria-live="polite">
                        显示 {{$rs->firstItem()}} 至 {{$rs->lastItem()}} &nbsp;&nbsp;&nbsp; 有 {{$rs->count()}} 条数据&nbsp;&nbsp;&nbsp;&nbsp;总共是{{$rs->total()}}条数据
                    </div>
                </div>
                <div class="col-xs-6">
                	{{$rs->appends($request->all())->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection