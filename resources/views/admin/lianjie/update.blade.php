@extends('admin/layout/index')
@section('content')
<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">添加友情链接</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">

							<form  action='/admin/lianjie/{{$data->id}}' method="post" role="form">
								{{ csrf_field() }}
								{{ method_field('PUT') }}
								<div class="form-group">
									<label for="email-1">友情链接名</label>
									<input type="text" name="name" class="form-control" 
										placeholder="请输入友情链接名&hellip;" value="{{$data->name}}">
								</div>

								<div class="form-group">
									<label for="password-1">http链接</label>
									<input name='http' type="text" class="form-control" id="password-1"
										placeholder="请输入友情链接地址" value="{{$data->http}}">
								</div>

								

								<div class="form-group">
								
									<button class="btn btn-info btn-single pull-right">提交</button>
									
								</div>

							</form>

						</div>
					</div>
@endsection