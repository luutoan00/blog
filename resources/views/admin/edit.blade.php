 @extends('admin.layouts.index')

 @section('content')

 <div class="right_col" role="main">
 	<div class="">
 		<div class="clearfix"></div>

 		<div class="row">

 			<div class="col-md-12 col-sm-12 col-xs-12">
 				<div class="x_panel">
 					<div class="x_title">
 						<h2><i>Updates Information -<small>Mã bài viết: {{$posts->id}}</small></i></h2>
 						<ul class="nav navbar-right panel_toolbox">
 							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
 							</li>
 						</ul>
 						<div class="clearfix"></div>
 					</div>
 					<div class="x_content">
 						<form action="{{route('admin.update', $posts->id) }}" method="POST" role="form"  enctype="multipart/form-data">
 							{{csrf_field()}}

 							<input type="hidden" name="_method" value="put">

 							<div class="form-group">
 								<label for="">Title</label>
 								<input style="font-weight: bold;" type="text" class="form-control" name="title" id="title" value="{{$posts->title}}" placeholder="Title">
 							</div>

 							<div class="form-group">
 								<label for="">Post by</label>
 								<input type="text" class="form-control"  name="name"  id="name" value="{{$get_name->name}}"  placeholder="Slug ">
 							</div>

 							<div class="form-group">
 								<label for="">Slug</label>
 								<input type="text" class="form-control"  name="slug"  id="slug" value="{{$posts->slug}}"  placeholder="Slug ">
 							</div>

 							<div style="margin-bottom: 10px;">
 								<label > Thumbnail</label>
 								<p><img style="width: 200px; height: auto;" src="img/{{asset($posts->thumbnail)}}" alt="" /></p>
 								<input type="hidden" name="anh" value="{{$posts->thumbnail}}">

 								<input style="margin-top: -20px;"  type="file" name="avatar">
 							</div>

 							<div class="form-group">
 								<label for="">Content</label>
 								<textarea  type="text" class="form-control"  name="content"  id="content" value=""  placeholder="Content" cols="30" rows="30">{{$posts->content}}</textarea>
 							</div>

 							<button type="submit" class="btn btn-primary">Submit</button>
 						</form>


 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>

 <script>
 	CKEDITOR.replace('content');
 </script>



 @endsection