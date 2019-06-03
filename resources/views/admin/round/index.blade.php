@extends('admin/layout/index')
@section('content')
<!-- 显示验证错误信息 -->
	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
<!-- 结束 -->
<div class="row" style="background:white;">
  <!-- Gallery Album Optipns and Images -->
  <div class="col-sm-9 gallery-right" style="width:100%;">
    <!-- Album Header -->
    <div class="album-header">
    	<br>
      <h2>轮播浏览</h2>
      <br>
      <ul class="album-options list-unstyled list-inline" style="float:right">
        <li>
          <div class="cbr-replaced">
            <div class="cbr-input">
              <input type="checkbox" class="cbr cbr-done" id="select-all"></div>
            <div class="cbr-state">
              <span></span>
            </div>
          </div>
          <label for="select-all">全选</label></li>
        <li>
          <a href="/admin/round/create">
            <i class="fa-upload"></i>添加图片</a>
        </li>
        <li>
          <a href="javascript:;" data-action="sort">
            <i class="fa-arrows"></i>重新排序</a>
        </li>
        <!-- <li>
          <a href="javascript:;" data-action="edit">
            <i class="fa-edit"></i>编辑</a>
        </li> -->
        <li>
          <a href="javascript:;" data-action="trash">
            <i class="fa-trash"></i>垃圾</a>
        </li>
      </ul>
    </div>
    <!-- Sorting Information -->
    <div class="album-sorting-info">
      

    </div>
    <br>
    <br><br>
    <!-- Album Images -->
    
    <div style="margin-top:10px;margin-bottom:10px;">
    	<h3>轮播</h3><br><br>
	    <div class="album-images row">
	      <!-- Album Image -->
	      
	      <!-- Album Image -->
	      @foreach($data as $k=>$v)
	      <div class="col-md-3 col-sm-4 col-xs-6" style="margin-top:10px;margin-bottom:10px;" id="lili">
	      	
	        <div class="album-image" style="border:1px solid black;padding:10px">
	          <a href="javascript:;" class="thumb" data-action="edit">
	            <img src="/public/phone{{ $v->files }}" class="img-responsive" style="width:286.41px;height:255.48px;"   onclick="taggle({{ $v->id }},this)">
	        	</a>
	            <br>
	          <a href="javascript:;" class="name">
	            <span>跳转 : {{ $v->url }}</span>
	            <em>&nbsp;&nbsp;&nbsp;id--{{ $v->id }}</em></a>
	          <div class="image-options" >
	            <a href="/admin/round/edi/{{ $v->id }}" data-action="edit" >
	              <i class="fa-pencil" title="修改" style="height:30px;width:30px;"></i>
	            </a>
	            <a href="javascript:;" data-action="trash">
	              <i class="fa-trash" title="删除"  style="height:30px;width:30px;" onclick="del({{ $v->id }},this)"></i>
	            </a>
	          </div>
	          @if($v->status == '1')
	          状态: <span class="status" >开启</span>
	          @else 		
	          状态: <span class="status" >关闭</span>
	          @endif

	          <!-- <button class="btn btn-success status"  style="border-radius:5px;display:block;">开启</button>
	          <button class="btn btn-danger statusd"  style="border-radius:5px;display:block;" >禁用</button> -->
	          
	          <!-- <button class="btn btn-danger statusd" value="" style="border-radius:5px;"  title="点击开启">禁用</button> -->
	         
	          <!-- <div class="image-checkbox" style="displsy:inline-block">
	            <div class="cbr-replaced">
	              <div class="cbr-input">
	                <input type="checkbox" class="cbr cbr-done"></div>
	              <div class="cbr-state">
	                <span></span>
	              </div>
	            </div>
	          </div> -->
	        </div>
			
	      </div>
	      @endforeach
	     
	    </div>
	 </div>
	
	
    <button class="btn btn-white btn-block">
      <i class="fa-bars"></i>Load More Images</button>
  </div>
  <!-- Gallery Sidebar -->
</div>


	<script>
	
		function taggle(id,obj)
		{


			$.post('/admin/round/kai',{'_token':"{{ csrf_token() }}",'id':id},function(msg){
				 //alert(msg);
				// alert(msg);
				if(msg == '0'){
					// $('.status').css('display','none');
					//状态
					$(obj).parent().next().next().next().next().html('关闭');
				}else if(msg == '1'){
					// $('.statusd').css('display','none');
					$(obj).parent().next().next().next().next().html('开启');
				}else if(msg == 'error'){
					alert('无法开启!');
				}
			});
		}
		//改变状态
		// $('.status').click(function(){
			
		// 	var a = $(this).val();

		// 	$.post('/admin/round/kai',{'_token':"{{ csrf_token() }}",'id':a},function(msg){
		// 		alert(msg);
		// 		// alert(msg);
		// 		if(msg == '0'){
		// 			$('.status').html('禁用');
		// 		}else if(msg == '1'){
		// 			$('.status').html('开启');
		// 		}else if(msg == 'error'){
		// 			alert('无法开启!');
		// 		}
		// 	});
			

		// });

		$('.statusd').click(function(){
			alert('关闭');
		});

		// 删除
		function del(id,obj)
		{
			$.post('/admin/round/del',{'_token':"{{ csrf_token() }}",'id':id},function(data){
					if (data === 'success') {
						alert('删除成功!');
						$(obj).parent().parent().parent().parent().remove();
						// $(this).parent('album-images').find('#lili').remove();
					}else if(data == 'error'){
						alert('删除失败!');
					}
			},'html');
		}
		
		
	</script>
	

@endsection