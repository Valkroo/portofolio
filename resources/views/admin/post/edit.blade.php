@extends('admin.layouts.main')

@section('dashboard')
    <div class="font-hahmlet text-3xl font-bold mb-4">
        Edit Post
    </div>
    <hr class="shadow">
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="font-inter mt-6" enctype="multipart/form-data">
        @method('put')
    @csrf
    <div class="mb-4">
        <label class="block text-gray-500 text-base font-bold mb-2" for="title">Title</label>
        <input type="text" id="title" name="title" class="shadow text-sm appearance-none border focus:border-2 rounded max-w-3xl w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-400 focus:outline-blue-400 focus:shadow-lg focus:shadow-blue-100 " required autofocus placeholder="title" value="{{ old('title', $post->title) }}">
    </div>
    <div class="mb-4">
        <label class="block text-gray-500 text-base font-bold mb-2" for="slug">Slug</label>
        <input type="text" id="slug" name="slug" class="shadow text-sm appearance-none border focus:border-2 rounded max-w-3xl w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-400 focus:outline-blue-400 focus:shadow-lg focus:shadow-blue-100" required placeholder="" value="{{ old('slug', $post->slug) }}">
    </div>
    <div class="mb-4">
        <label class="block max-w-3xl" for="image">
            <span class="font-inter text-gray-500 text-base font-bold">Image</span>
            <input type="hidden" name="oldImage" value="{{ $post->image }}">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-preview my-4">
            @else
                <img src="" alt="" class="img-preview my-4">
            @endif
            <input type="file" id="image" name="image" class="mt-2 border block w-full rounded text-sm text-slate-500 shadow file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-violet-200 file:text-violet-700 hover:file:bg-violet-100" onchange="previewImage()">
        </label>
    </div>
    <div class="mb-4">
        <label for="body" class="font-bold text-gray-500 text-base mb-2">Body</label>
        <textarea id="body" name="body" >
            <p>{{ $post->body }}</p>
        </textarea>
    </div>
    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md hover:shadow-lg active:outline-double active:outline-4 active:outline-blue-400"
     type="submit">Update post</button>
    </form>
@endsection