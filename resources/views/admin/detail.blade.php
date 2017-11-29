 @extends('admin.layouts.index')

 @section('content')

 <div class="right_col" role="main">
 	<div class="">
 		<div class="clearfix"></div>

 		<div class="row">

 			<div class="col-md-12 col-sm-12 col-xs-12">
 				<div class="x_panel">
 					<div class="x_title">
 						<h2><i>Post by: {{$get_name->name}} -<small>Mã bài viết: {{$posts->id}}</small></i></h2>
 						<ul class="nav navbar-right panel_toolbox">
 							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
 							</li>
 							<li class="dropdown">
 								<a href="{{ route('admin.edit', $posts->id) }}" class="dropdown-toggle" role="" aria-expanded="false"><i class="fa fa-wrench"></i></a>
 							</li>
 						</ul>
 						<div class="clearfix"></div>
 					</div>
 					<div class="x_content">
 						<h1 style="text-align: center;">{{$posts->title}}</h1>
 						<p style="text-align: center; margin: 25px;"><img src="{{$posts->thumbnail}}" alt=""></p>
 						<p style="font-size: 18px;">{!!$posts->content!!}</p>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>



 @endsection