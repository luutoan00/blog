<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title','slug','thumbnail','description','content','user_id','category_id'];

	public static function category($pages){
		return $this->beLongsTo('App\Category');
	}


	public static function getPostPanigate($pages){
		return Post::select('posts.*', 'categories.name as category_name','users.name as users_name')->join('categories', 'posts.category_id', '=', 'categories.id')
		->join('users', 'users.id', '=', 'posts.user_id')
		->simplePaginate($pages);
	}

	public static function updatePostsById($posts, $id){
		return Post::find($id)->update($posts);
	}

	public static function insertPostsById($posts){
		return Post::find($id)->insert($posts);
	}

	
}
