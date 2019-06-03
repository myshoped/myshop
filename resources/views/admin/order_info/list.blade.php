@extends('admin/layout/index')
@section('content')

	<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">浏览商品</h3>
					
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
				<form action="/admin/order" method="get">
						<div class="row-fluid">
							
						<div class="span6" style="width:350px;display:inline-block;">
							<div id="DataTables_Table_0_length" class="dataTables_length" >
								<label>
									

										
								</div>
							</div>
							<div class="span6" style="width:300px;display:inline-block;">
								
							</div>
						</div>
					</form>


					
					<table class="table table-bordered table-striped" id="example-4">
						<thead>
							<tr>
								
								<th>商品名称</th>
								<th>商品图片</th>
								<th>商品单价</th>
								<th>购买数量</th>
								<th>实付</th>
								<th>状态</th>
								
							</tr>
						</thead>


						<tbody>
							{{--用户:{{ $data3[0]->finduser['uname'] }} --}}
						@foreach($data3 as  $k => $v)

							<tr>
								
								
								
								
								
								
								
									{{--用户名--}}
									
									<td>{{ $v->findgoods['gname'] }}</td>
									<td> <img src="/public/images{{  $v->findgoods['images'] }}" alt="商品图片" style="width:100px;"></td>
									<td>{{ $v->findgoods['price']}}</td>
									
									<td>{{ $v->cnt}}</td>
									<td>{{ $v->price}}</td>
									<td>{{  $v->findorder['status']}}</td>
									
								



								
							</tr>
					@endforeach 
							
						</tbody>
					</table>
					<div class="panel-body">
				
				</div>
			</div>
			<!-- 分页 -->
			<div>
		
				
			</div>

@endsection