@extends('admin.layout.index')
@section('content')



<div class="panel panel-default" style="height:540px;">
	<div class="panel-heading">
		<h1 class="panel-title">轮播图添加</h1>
		<div class="panel-options">
			<a href="#" data-toggle="panel">
				<span class="collapse-icon">–</span>
				<span class="expand-icon">+</span>
			</a>
			<a href="#" data-toggle="remove">
				×
			</a>
		</div>
	</div>
	<div class="panel-body">
		
		<form role="form" class="form-horizontal"
		action="/admin/round" method="post" enctype="multipart/form-data" id="file1">
		{{ csrf_field() }}

                <div class="form-group has-info" style="margin-left:-130px;">
                <label class="col-sm-2 control-label" for="field-6">跳转url</label>
                
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="url" value="{{ old('url') }}" style="width:700px;">
                </div>
            </div>
			
				<div style="margin-left:90px;width:270px;height:270px;">
                    <img src="/a.jpg" alt="图片" style="width:270px;height:270px;" id="img_url" >
                </div>
                <div class="form-group">

                    <label class="col-sm-2 control-label" for="images"><i class="fa fa-upload" title="上传附图">点我上传图片</i></label>
                    
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="images" name="images" onchange="url()" style="display:none;">
                    </div>
                </div>
           		
				
				<input type="submit" name="" value="上传photo" class="btn btn-success" >


		</form>
		
	</div>
</div>
 <!-- 实例化编辑器 -->

<script>
	   $('#img_url').css('display','none');    
//这里是单文件上传预览功能      
$("#images").change(function(event){
    var files = event.target.files;
    var file;
    
    if (files && files.length > 0) {
        file = files[0];
        
        var URL = window.URL || window.webkitURL;
        // 本地图片路径
        var imgURL = URL.createObjectURL(file);
        
        var imgObj = $('#img_url').eq(0);
        imgObj.attr("src", imgURL);
        imgObj.show();
    }
});

</script>
@endsection