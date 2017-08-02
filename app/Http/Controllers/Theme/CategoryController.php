<?php

namespace App\Http\Controllers\Theme;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
    public function index($name)
    {
    	$category = Category::where('name', $name)->first();
    	if($category){
    		$posts = Post::where('category_id', $category->id)->where('status', 1)->paginate(5);
    		return view('theme.category', compact('category', 'posts'));
    	} else {
            $post = Post::where('name', $name)->first();
            return view('theme.post', compact('post'));
    	}
    }
}
