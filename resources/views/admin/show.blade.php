 @extends('admin.layouts.index')

 @section('content')

 <div class="right_col" role="main">
 	<div class="">
 		<div class="page-title">
 			<div class="title_left">
 				<h3>Post <small>Some examples to get you started</small></h3>
 			</div>

 			<div class="title_right">
 				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
 					<div class="input-group">
 						<input type="text" class="form-control" placeholder="Search for...">
 						<span class="input-group-btn">
 							<button class="btn btn-default" type="button">Go!</button>
 						</span>
 					</div>
 				</div>
 			</div>
 		</div>

 		<div class="clearfix"></div>

 		<div class="row">
 			<div class="col-md-12 col-sm-12 col-xs-12">
 				<div class="x_panel">
 					<div class="x_title">
 						<h2>Default Example <small>Users</small></h2>
 						<ul class="nav navbar-right panel_toolbox">
 							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
 							</li>
 							<li><a class="close-link"><i class="fa fa-close"></i></a>
 							</li>
 						</ul>
 						<div class="clearfix"></div>
 					</div>
 					<div class="x_content">

 						<table class="table table-hover" id="users-table">
 							<thead>
 								<tr>
 									<th>#</th>
 									<th>Thumbnail</th>
 									<th>Title</th>
 									<th>Category_name</th>
 									<th>Authors</th>
 									{{-- <th>Time</th> --}}
 									<th>Hành động</th>
 								</tr>
 							</thead>
 							
 						</table>
 					</div>

 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- /page content -->

 @endsection
 @section('script')
 <script>
 	$(function() {
 		$('#users-table').DataTable({
 			processing: true,
 			serverSide: true,
 			ajax: '{!! route('admin.json.show') !!}',
 			columns: [
 			{ data: 'id', name: 'id' },
 			{ data: 'thumbnail', name: 'thumbnail',orderable: false, searchable: false },
 			{ data: 'title', name: 'title' },
 			{ data: 'category_name', name: 'category_name' },
 			{data: 'action', name: 'action', orderable: false, searchable: false}
 			]
 		});
 		
 		$('#users-table').on('click','.btn-warning',function (){
 			$.ajaxSetup({
 				headers: {
 					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 				}
 			});
 			$.ajax({
 				type: 'delete',
 				url:'destroy/' + $(this).data('id'),
 				data:{
 					'hihi':'ahihi',
 					'huhu':'ahuhu'
 				},
 				succsess:function (response){
 										// list.ajax.reload();
 										alert('đã xóa thành công');
 									},
 									error:function (error){
 										alert('lỗi rồi');				

 									}

 								});
 		});
 	});


 </script>
 @endsection
