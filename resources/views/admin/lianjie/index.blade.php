@extends('admin/layout/index')
@section('content')
	<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">浏览友情链接</h3>
					
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
			


					
					<table class="table table-bordered table-striped" id="example-4">
						<thead>
							<tr>
								<th>链接id</th>
								<th>链接名</th>
								<th>连接地址</th>
								<th>操作</th>
							</tr>
						</thead>
						@foreach($data as $k => $v)

						<tbody>
								<td>{{ $v->id }}</td>
								<td>{{ $v->name }}</td>
								<td>{{ $v->http }}</td>

								

								<th>
									
									<!-- <form action="/admin/lianjie/{{ $v->id}}" method="post" >
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="fa fa-trash" ><i  title="删除">&nbsp;删除</i></button><br>
									</form> -->
										<a href="/admin/lianjie/del/{{ $v -> id }}" >
											<i class="fa fa-trash">删除</i>
											
										<a href="/admin/lianjie/{{ $v -> id }}/edit" >
										<i class="fa fa-gavel">修改</i>
									</a><br/>
									
									
								</th>

						</tbody>
					@endforeach
					</table>
					<div class="panel-body">
				
				</div>
			</div>
		
		


@endsection