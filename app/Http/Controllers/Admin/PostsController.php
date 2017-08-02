<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostsRequest;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(PostsRequest $request)
    {
        $image = request()->image->store('uploads/' . date('Y/m'));
        Post::create([
            'title' => request()->title,
            'name' => str_slug(request()->title),
            'subtitle' => request()->subtitle,
            'image' => $image,
            'body' => request()->body,
            'category_id' => request()->category_id,
            'user_id' => auth()->user()->id,
            'status' => request()->status,
        ]);

        return redirect()->route('admin.posts.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        if(request()->hasFile('image')){
            $image = request()->image->store('uploads/' . date('Y/m'));
        } else {
            $image = Post::where('id', $id)->select('image')->first()->image;
        }

        $post = Post::find($id);
        $post->title = request()->title;
        $post->name = str_slug(request()->title);
        $post->subtitle = request()->subtitle;
        $post->image = $image;
        $post->body = request()->body;
        $post->category_id = request()->category_id;
        $post->user_id = auth()->user()->id;
        $post->status = request()->status;
        $post->save();

        return redirect()->route('admin.posts.index');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        Storage::delete($post->image);
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}