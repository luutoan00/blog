<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class BlogController extends Controller
{
	public function index(){
		$posts = Post::getPostPanigate(env('PAGES'));
		$data =DB::table('posts')
		->select('posts.*','categories.name as category_name','users.name as author')
		->join('categories','posts.category_id','=','categories.id')
		->join('users','users.id','=','posts.user_id');
		// ->simplePaginate(8);
  //     // dd($data);

		return view('blog.home', ['posts' => $posts]);
	}
	public function show($slug){

      // dd("sdsds");

		$post=Post::where('slug',$slug)->first();

		return view('blog.blog',['post'=>$post]);
	}

	public function contact(){
		return view('blog.contact');
	}

	public function aboutus(){
		$posts = DB::table('posts')
		->join('categories', 'category_id', '=', 'categories.id')
		->select('posts.*', 'categories.name as category_name')
		->paginate(8);


		$left = DB::table('posts')
		->join('categories', 'category_id', '=', 'categories.id')
		->select('posts.*', 'categories.name as category_name')
		->paginate(1);

		$after = DB::table('posts')
		->join('categories', 'category_id', '=', 'categories.id')
		->select('posts.*', 'categories.name as category_name')
		->paginate(4);

		return view('blog.page-right-sidebar', [
			'posts' => $posts,
			'lefts' => $left,
			'afters' => $after,
		]);


	}

	public function pagerightsidebar(){
		$pages = DB::table('posts')
		->join('categories', 'category_id', '=', 'categories.id')
		->select('posts.*', 'categories.name as category_name')
		->paginate(1);

		$left = DB::table('posts')
		->join('categories', 'category_id', '=', 'categories.id')
		->select('posts.*', 'categories.name as category_name')
		->paginate(1);

		$after = DB::table('posts')
		->join('categories', 'category_id', '=', 'categories.id')
		->select('posts.*', 'categories.name as category_name')
		->paginate(4);

		return view('blog.page-right-sidebar', [
			'page' => $left,
			'lefts' => $left,
			'afters' => $after,
		]);


	}

	public function postrightsidebar(){
		return view('blog.post-right-sidebar');
	}
}
