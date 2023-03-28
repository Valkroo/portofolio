<?php

namespace App\Http\Controllers\ApiControllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorepostsRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return PostResource::collection($posts);
        // return response()->json(['data' => $posts]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json(['data' => $post]);
    }

    public function store(StorepostsRequest $request)
    {
        $data = $request->validated();
        $data['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        $newpost = Post::create($data);

        return new PostResource($newpost);
    }

    public function update(StorepostsRequest $request,$id)
    {
        $data = $request->validated();
        $data['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        // Post::where('id', $post->id)->update($updateData);
        $updatepost = Post::findOrFail($id);
        $updatepost->update($data);
        return new PostResource($updatepost);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return new PostResource($post);
    }
}
