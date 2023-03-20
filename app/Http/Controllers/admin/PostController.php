<?php

namespace App\Http\Controllers\Admin;

use App\Models\posts;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorepostsRequest;
use App\Http\Requests\UpdatepostsRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index', [
            "posts" => Posts::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepostsRequest $request)
    {
        $newdata = $request->validated();

        $newdata['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');
        Posts::create($newdata);

        return redirect('/dashboard/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(posts $post)
    {
        return view('admin.post.show', [
            'post' => $post
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
   public function edit(posts $post)
    {
        return view('admin.post.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepostsRequest $request, posts $post)
    {
        $newdata = $request;
        if ($request->slug != $post->slug) {
            $newdata['slug'] = 'required|unique:posts';
        }
        $dataupdate = $request->validated($newdata);
        $dataupdate['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');
        Posts::where('id', $post->id)->update($dataupdate);

        return redirect('/dashboard/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(posts $post)
    {
        Posts::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }

    public function Slug(Request $request)
    {
        $slug = SlugService::createSlug(Posts::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
