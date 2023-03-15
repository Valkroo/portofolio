<?php

namespace App\Http\Controllers;

use App\Policies\PostsPolicy;
use Illuminate\Http\Request;
use App\Models\posts;

class FrontendController extends Controller
{
    public function index(){ 
        return view('index', [
            'posts' => Posts::all()
        ]); 
        
    }

    public function posts(){
        return view('posts', [
            "posts" => Posts::all()
        ]); 
        
    }
    
    public function detailPost(Posts $posts)
    {
        return view('detailPost', [
            "post" => $posts
        ]);
    }
}
