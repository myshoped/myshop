@extends('admin/layout/index')
@section('content')
	<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">浏览收藏</h3>
					
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
				<form action="/admin/collect/index" method="get">
						<div class="row-fluid">
						<div class="span6" style="width:350px;display:inline-block;margin-top:10px">
							<div id="DataTables_Table_0_length" class="dataTables_length" >
								<label>
									<select size="1" name="paginte" aria-controls="DataTables_Table_0" style="width:80px;height:27.6px;">

										<option value="10"
										@if(isset($sousuo['paginte'] ))
										@if($sousuo['paginte'] == '10')
											selected
										@endif
										@endif 
										>10</option>
										<option value="25" @if(isset($sousuo['paginte'] ))
										@if($sousuo['paginte'] == '25')
											selected
										@endif
										@endif >25</option>
										<option value="50" @if(isset($sousuo['paginte'] ))
										@if($sousuo['paginte'] == '50')
											selected
										@endif
										@endif >50</option>
										<option value="100" @if(isset($sousuo['paginte'] ))
										@if($sousuo['paginte'] == '100')
											selected
										@endif
										@endif >100</option>
										
									
									</select> 每页记录</label>
								</div>
							</div>
							<div class="span6" style="width:300px;display:inline-block;float:right;" >
								<div class="dataTables_filter" id="DataTables_Table_0_filter">
									<label>
										@if(isset($sousuo['sousuo']))
										<input type="text" aria-controls="DataTables_Table_0" style="height:27.6px" name="sousuo" value="{{ $sousuo['sousuo']  }}">
										@else
										<input type="text" aria-controls="DataTables_Table_0" style="height:27.6px" name="sousuo" value="">
										@endif
									</label>
									<input  type="submit" class="btn btn-success" value="搜索" style="margin-top:10px;height:30.6px">
								</div>
							</div>
						</div>
					</form>


				<div class="panel-body">
					
					<table class="table table-bordered table-striped" id="example-4">
						<thead>
							<tr>
								<th>用户名</th>
								<th>商品名</th>
								<th>商品图片</th>
								<th>收藏时间</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($data as $k=>$v)
							<tr>
								<td>{{ $v->user->uname }}</td>
								<td><p style="width: 20px;height:70px; overflow:hidden; text-overflow:ellipsis;" title="{{ $v->goods->gname }}">
										{{ $v->goods->gname }}
									</p>
								</td>
								
								<td>
									<img src="/public/images{{ $v->goods->images }}" alt="图片" style="width:70px;height:70px;" >
								</td>
								<td>{{ $v->created_at }}</td>
								
							</tr>
							@endforeach
							
						</tbody>
					</table>
					
				</div>
			</div>
			<!-- 分页 -->
			<div>
		
				{{ $data->appends($sousuo)->links() }}
			</div>
<script>
	
</script>
@endsection