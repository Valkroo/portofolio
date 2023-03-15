@extends('layouts.main')

@section('content')

@if ($posts->count())
<section class="text-center py-20">
    <div class="container mx-auto px-6">
      <div class="font-hahmlet font-bold text-3xl">Welcome to my blog</div>
      <div class="font-inter text-light-80 my-6">Berikut merupakan post-post yang <span class="block">telah saya buat sendiri</span></div>
      <figure class="md:max-w-2xl max-w-xl bg-secondary mx-auto rounded-xl mb-12">
          <div>
              <a href="/post/{{ $posts[0]->slug }}"><img src="image/gambar1.png" alt="" class="w-screen sm:h-48 rounded-t-xl"></a>
          </div>
          <div class="p-6 text-start sm:text-center">
              <div class="font-hahmlet font-medium lg:text-2xl md:text-lg text-base "><a href="/post/{{ $posts[0]->slug }}">{{ $posts[0]->title }}.</a></div>
              <p class="font-inter pt-3 text-light-80 md:text-base text-sm">{{ $posts[0]->excerpt }}</p>
              <div class="font-inter text-sm pt-6"><a href="/post/{{ $posts[0]->slug }}">Read more</a></div>
          </div>
      </figure>
      <div class="lg:max-w-4xl md:max-w-3xl  justify-center flex flex-wrap mx-auto gap-x-8 gap-y-10">
        @foreach ($posts->skip(1) as $post)
        <figure class="bg-secondary text-start rounded-xl w-64 md:w-80 shadow-md">
          <a href="/post/{{ $post->slug }}"><img src="/image/gambar1.png" alt="" class="rounded-t-xl"></a>
          <div class="p-6">
            <div class="font-hahmlet font-medium lg:text-xl md:text-lg text-base "><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></div>
            <p class="font-inter pt-3 text-light-80 md:text-base text-sm">{{ $post->excerpt }}</p>
            <div class="font-inter text-sm pt-6"><a href="/post/{{ $post->slug }}">Read more</a></div>
          </div>
        </figure>
        @endforeach
      </div>
    </div>
</section>
    @else
    <p>no post found</p>
@endif
@endsection