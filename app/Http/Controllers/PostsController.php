<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        if($request->input('search')) {
            $posts = Post::search($request->input('search'));
        } else {
            $posts = Post::with(['user', 'comments'])->paginate(10);
        }
        
        return view('posts', ['title' => 'Posts', 'posts' => $posts]);
    }
}