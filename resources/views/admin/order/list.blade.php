@extends('admin/layout/index')
@section('content')
	<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">浏览订单</h3>
					
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
							<div class="span6" style="width:300px;display:inline-block;float:right;">
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


					
					<table class="table table-bordered table-striped" id="example-4">
						<thead>
							<tr>
								<th>订单id</th>
								<th>金额</th>
								<th>商品总数量</th>
								<th>下单人</th>
								<th>收货人</th>
								<th>收货地址</th>
								<th>联系电话</th>
								<th>状态</th>
								<th>买家留言</th>
								
								<th>操作</th>
							</tr>
						</thead>
						<tbody>

							@foreach($rs as $k=>$v)
							<tr>
								<td><p style="width: 20px;height:70px; overflow:hidden; text-overflow:ellipsis;" title="{{ $v->gname }}">
										{{  $v->id  }}
									</p>
								</td>
								<td>{{  $v->sum  }}</td>
								<td>{{  $v->cnt  }}</td>
								<td>{{  $v->user['uname']  }}</td>
								<td>{{  $v->rec  }}  </td>
								<td>{{  $v->addr  }}  </td>
								<td>{{  $v->tel  }}  </td>

								@if($v['status']=='1')
									<td>已下单未发货</td>
									@elseif($v['status']=='2')
									<td>出库,未收货</td>
									@elseif($v['status']=='3')
									<td>收货完成</td>
									@elseif($v['status']=='4')
									<td>作废</td>
								@endif
								 


								{{--<td>{{  $v->status  }}  </td>--}}
								<td>{{  $v->umsg  }}  </td>
								
								
								
								
								<td>

									<!-- <form action="/admin/order/{{ $v->id}}" method="post">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="fa fa-trash"><i  title="删除">&nbsp;删除</i></button>
									
									</form> -->
									
									
									<!-- <a href="/admin/order/del{{ $v->id}}" ">
										<i class="fa fa-trash" title="删除">&nbsp;删除2</i>
									</a> -->
									<br/>
									
									

									<a href="/admin/order/{{ $v -> id }}" >
										<i class="fa fa-search">详情</i>
									</a>
									<br/>

									<a href="/admin/order/fahuo/{{ $v -> id }}" >
										<i class="fa fa-arrow-right">发货</i>
									</a>
									<br/>
									

									<a href="/admin/order/{{ $v -> id }}/edit" >
										<i class="fa fa-gavel">修改</i>
									</a><br/>
								</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
					<div class="panel-body">
				
				</div>
			</div>
			<!-- 分页 -->
			<div>
		{{ $rs->appends($sousuo )->links() }}
				
			</div>


@endsection