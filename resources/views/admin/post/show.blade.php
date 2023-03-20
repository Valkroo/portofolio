@extends('admin.layouts.main')

@section('dashboard')
    <div class="text-3xl font-hahmlet font-bold mb-6">
        {{ $post->title }}
    </div>
    <div class="container mb-6"><img src="/image/gambar.png" alt="" class="max-w-3xl w-full"></div>
    <p class="text-slate-500 text-base">{!! $post->body !!}</p>
    <div class="flex gap-3 mt-6">
        <a href="/dashboard/posts" class="bg-sky-300 p-2 rounded-lg font-inter flex gap-2 items-center w-44">
            <span class="items-center">
            <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-black rotate-180">
                <path d="M0 8.67442H22M22 8.67442L14.4 1M22 8.67442L14.4 16"/>
            </svg>
            </span>
            <span class="items-center">Back to all posts</span>
        </a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="bg-yellow-300 p-2 rounded-lg font-inter flex gap-2 items-center w-20">
            <span class="items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
            </span>
            <span class="items-center">Edit</span>
        </a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
            @method('delete')
            @csrf
            <button class="bg-red-500 hover:bg-red-600 w-24 p-2 rounded-lg flex gap-2 items-center" type="submit" onclick="return confirm('Are You Sure to delete this Posts?')">
                <div class="items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentcolor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                </div>
                <span class="items-center font-inter">
                  Delete
                </span>
            </button>
        </form>
    </div>
@endsection