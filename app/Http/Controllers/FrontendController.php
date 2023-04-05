<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsRequest;
use App\Models\Comment;
use App\Models\Post;

class FrontendController extends Controller
{
    public function index(){ 
        return view('index', [
            'posts' => Post::latest()->get()
        ]); 
        
    }

    public function posts(){
        return view('posts', [
            "posts" => Post::latest()->get()
        ]); 
        
    }
    
    public function detailPost(Post $post)
    {
        return view('detailPost', [
            "post" => $post,
            "comments" => $post->comments()->get()
        ]);
    }

    public function StoreComment(Post $posts, CommentsRequest $request)
    {
        $data = $request->validated();
        $comment = new Comment();

        $comment->post_id   = $posts->id;
        $comment->name      = $data['name'];
        $comment->comment   = $data['comment'];
        $comment->save();

        return redirect()->back();
    }

    public function DestroyComment(Post $post, Comment $comment)
    {
        Comment::destroy($comment->id);
        return redirect()->back();
    }
}
