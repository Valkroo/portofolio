<?php

namespace App\Http\Controllers;

use App\Policies\PostsPolicy;
use Illuminate\Http\Request;
use App\Models\Post;

class FrontendController extends Controller
{
    public function index(){ 
        return view('index', [
            'posts' => Post::all()
        ]); 
        
    }

    public function posts(){
        return view('posts', [
            "posts" => Post::all()
        ]); 
        
    }
    
    public function detailPost(Post $posts)
    {
        return view('detailPost', [
            "post" => $posts
        ]);
    }
}
