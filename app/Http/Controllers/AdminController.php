<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB;
use Yajra\Datatables\Datatables;

class AdminController extends Controller
{
	public function index(){
		return view('admin.index');

	}
	public function jsonshow(){
		$admin = User::select(['id', 'thumbnail', 'title', 'category_name', 'created_at', 'updated_at'])->orderBy('id','desc');

        return Datatables::of($admin)
            ->addColumn('action', function ($admin) {
                return '<a href="#edit-'.$admin->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button data-id='.$admin->id.' class="btn btn-xs btn-warning"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>';
            })
            ->addColumn('avata', function ($admin) {
                return '<img src="#">';
            })
         ->make(true);
	}

	// public function show(){
		
	// 	return view('admin.show');
	// }

	public function detail($id){
		$admin = DB::table('posts')
		->join('categories', 'category_id', '=', 'categories.id')
		->join('users', 'users.id', '=', 'posts.user_id')
		->select('posts.*', 'categories.name as category_name','users.name as users_name')
		->get();

		$posts = DB::table('posts')->where('id', $id)->first();

		$get_name = DB::table('users')->where('id', $posts->user_id)->first();

		// dd($get_name->name);

		return view('admin.detail',[
			'posts'		=>	$posts,
			'get_name'	=>	$get_name
		]);
	}

	public function destroy($id){
		DB::table('posts')->where('id', '=', $id)->delete();
		return redirect()->back();
	}

	public function edit($id){
		$posts = DB::table('posts')->where('id', $id)->first();
		
		$get_name = DB::table('users')->where('id', $posts->user_id)->first();
		// dd($posts);
		return view('admin.edit',[
			'posts'		=>	$posts,
			'get_name'	=>	$get_name
		]);
	}

	public function update(Request $request, $id){
		$posts = $request->all();

		Post::updatePostsById($posts, $id);
		return redirect()->route('admin.show');
	}

	public function create(){
		return view('admin.create');
	}

	public function store(Request $request){

		$posts = $request->all();
		Post::insertPostsById($posts);
		//return redirect()->route('admin.show');
		dd(posts);
		return redirect('show.store');
	}

	public function __construct()
	{
		$this->middleware('auth');
	}

}
