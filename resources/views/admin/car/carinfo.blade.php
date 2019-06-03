<!-- @extends('admin/layout/index')
@section('content')

	<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">购物车管理</h3>
					
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


					
					<table class="table table-bordered table-striped" id="example-4"  >
						<thead>
							<tr>
								
								<th>购买时间</th>

									<td style="color: red;font-size: 15px;">
									
									</td>
							</tr>


							<tr>
								<th style="width:300px" >商品名称</th>
								<th>商品图片</th>
								<th>商品单价</th>
								<th>购买数量</th>
								<th>小计</th>
								
								
							</tr>

							<tr>
								<th style="width:300px" >{{$goods-}}</th>
								<th>商品图片</th>
								<th>商品单价</th>
								<th>购买数量</th>
								<th>小计</th>
								
								
							</tr>

						

							
							<tr>
								
							


							</tr>

							
							
						</thead>


						
					</table>
					<div class="panel-body">
				
				</div>
			</div>
			<!-- 分页 -->
			<div>
		
				
			</div>

@endsection -->