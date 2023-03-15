@extends('admin.layouts.main')

@section('dashboard')
    <div class="font-hahmlet text-3xl font-bold mb-4">
        Create New Post
    </div>
    <hr class="shadow">
    <form action="/dashboard/posts" method="post" class="font-inter mt-6">
    @csrf
    <div class="mb-4">
        <label class="block text-gray-500 text-base font-bold mb-2" for="title">Title</label>
        <input type="text" id="title" name="title" class="shadow text-sm appearance-none border focus:border-2 rounded max-w-3xl w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-400 focus:outline-blue-400 focus:shadow-lg focus:shadow-blue-100 " required autofocus placeholder="title" value="{{ old('title') }}">
    </div>
    <div class="mb-4">
        <label class="block text-gray-500 text-base font-bold mb-2" for="slug">Slug</label>
        <input type="text" id="slug" name="slug" class="shadow text-sm appearance-none border focus:border-2 rounded max-w-3xl w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-400 focus:outline-blue-400 focus:shadow-lg focus:shadow-blue-100" required placeholder="" value="{{ old('slug') }}">
    </div>
    <div class="mb-4">
        <label for="body" class="font-bold text-gray-500 text-base mb-2">Body</label>
        <textarea id="body" name="body" value="{{ old('body') }}">
        </textarea>
    </div>
    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md hover:shadow-lg active:outline-double active:outline-4 active:outline-blue-400"
     type="submit">Create</button>
    </form>
@endsection