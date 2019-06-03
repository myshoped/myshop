@extends('admin/layout/index')
@section('content')

{{--<h1>{{$rs->id}}</h1>--}}

<div class="panel panel-default">
			
				<div class="panel-heading">
					<div class="panel-title">
						<h1>订单详情修改</h1>
					</div>
					
					<small class="text-small pull-right" style="padding-top:5px;">
						<code>我是一条小青龙!小青龙!</code>
					</small>
				</div>
				
				<div class="panel-body">
				
					<form action="/admin/order/{{$rs->id}}" role="form" id="form1" method="post" class="validate">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						<div class="form-group">
							<label class="control-label">订单id</label>
							
							<input type="text" class="form-control" name="id" data-validate="required" data-message-required="This is custom message for required field." value="{{  $rs->id  }}"  readonly="readonly" onclick="alert('别点我,我不让你改!');" />
						</div>

						<div class="form-group">
							<label class="control-label">金额</label>
							
							<input type="text" class="form-control" name="sum" data-validate="required" data-message-required="This is custom message for required field." value="{{  $rs->sum  }}"  readonly="readonly" onclick="alert('别点我,我不让你改!');" />
						</div>
						
						<div class="form-group">
							<label class="control-label">商品总数</label>
							
							<input type="text" class="form-control" name="cnt" data-validate="required" data-message-required="This is custom message for required field." value="{{  $rs->cnt  }}"  readonly="readonly" onclick="alert('别点我,我不让你改!');" />
						</div>

						<div class="form-group">
							<label class="control-label">下单人</label>
							
							<input type="text" class="form-control" name="user_id" data-validate="required" data-message-required="This is custom message for required field." value="{{  $rs->cnt  }}"  readonly="readonly" onclick="alert('别点我,我不让你改!');" />
						</div>

						<div class="form-group">
							<label class="control-label">收货人</label>
							
							<input type="text" class="form-control" name="rec" data-validate="required" data-message-required="This is custom message for required field." value="{{  $rs->rec  }}"   />
						</div>

						<div class="form-group">
							<label class="control-label">收货地址</label>
							
							<input type="text" class="form-control" name="addr" data-validate="required" data-message-required="This is custom message for required field." value="{{  $rs->addr  }}"   />
						</div>

						<div class="form-group">
							<label class="control-label">联系电话</label>
							
							<input type="text" class="form-control" name="tel" data-validate="required" data-message-required="This is custom message for required field." value="{{  $rs->tel  }}"   />
						</div>

						<div class="form-group">
									<label class="col-sm-1 control-label">状态</label>

									<div class="col-sm-13">
										<select class="form-control" name="status">
											
												<option value="1" @if($rs['status']=='1') selected @endif>已下单未发货</option>
												
												<option value="2" @if($rs['status']=='2') selected @endif>发货</option>
												
												<option value="4" @if($rs['status']=='4') selected @endif>订单作废</option>
												
								 
											
										</select>
									</div>
								</div>

						
						<div class="form-group">
							<button value="submit" class="btn btn-success">修改</button>
							<button type="reset" class="btn btn-white">取消</button>
						</div>
					
					</form>
				
				</div>
			
			</div>

@endsection