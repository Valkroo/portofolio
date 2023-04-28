@extends('layouts.main')

@section('content')
<section class="bg-primary">
  <div class="container mx-auto">
      <div class="max-w-5xl mx-auto px-8">
          <div class="sm:flex block text-center sm:text-left justify-between">
              <div class="sm:py-20 py-12">
                  <div class="font-hahmlet text-sm sm:text-base">HI 👋, Perkenalkan saya
                    <span class="font-hahmlet font-bold text-3xl block mt-3">Fahmi Ahmad</span>
                  </div>
                  <div class="font-inter font-bold sm:text-xl text-lg mt-3">Frontend & Backend Developer</div>
                  <div class="mt-2 text-light-70">Saya berasal dari indonesia, 
                    <span class="block"> Siswa SMKN 17 Jakarta, jurusan </span> 
                    <span class="block"> Rekayasa Perangkat Lunak (RPL)</span> 
                  </div>
                  <form action="" class="mt-4">
                    <button class="bg-white hover:bg-slate-200 rounded-xl flex px-2 py-1 font-inter text-base mx-auto active:bg-slate-400 active:shadow-lg sm:mx-0 shadow-md hover:shadow-lg">
                      <svg width="19" class="mr-2" height="25" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.45355 0.418069C7.58819 0.145581 10.7406 0.145581 13.8752 0.418069L15.3854 0.549351C16.3908 0.636746 17.2519 1.23641 17.698 2.09419C17.7551 2.20393 17.7123 2.33679 17.6071 2.4019L11.3412 6.28082C9.99732 7.11274 8.3028 7.1302 6.94209 6.32613L0.634259 2.59878C0.532348 2.53856 0.485571 2.4146 0.531498 2.3055C0.939655 1.33593 1.85729 0.643758 2.94332 0.549351L4.45355 0.418069Z" fill="black"/>
                        <path d="M0.526365 4.27734C0.370402 4.18518 0.171398 4.28435 0.153218 4.46459C-0.100517 6.98023 -0.039106 9.51968 0.337451 12.0238C0.535965 13.3439 1.61337 14.3559 2.94332 14.4716L4.45355 14.6028C7.58819 14.8753 10.7406 14.8753 13.8752 14.6028L15.3854 14.4716C16.7154 14.3559 17.7928 13.3439 17.9913 12.0238C18.3788 9.44671 18.4326 6.83219 18.1525 4.24473C18.1329 4.06321 17.9305 3.96587 17.7753 4.06197L12.1307 7.55622C10.3125 8.68176 8.01996 8.70537 6.17899 7.61752L0.526365 4.27734Z" fill="black"/>
                      </svg>
                      <div class="pr-2">Email</div></button>
                  </form>
              </div>
                <div class="pt-4">
                  <img src="/image/profile.png" alt="" class="mx-auto">
                </div>
          </div>
      </div>
  </div>
</section>

<section class="bg-gray-300 text-center">
  <div class="container mx-auto">
    <div class="font-hahmlet font-bold text-2xl pt-20">Bahasa Pemrograman & Framework <span class="block">yang saya kuasai:</span></div>
      <div class="flex flex-wrap lg:gap-8 gap-8 justify-center lg:max-w-4xl mt-6 pb-20 mx-auto px-2">
        <div class="bg-slate-50 rounded-xl min-w-fit font-hahmlet font-semibold italic pb-4 shadow-xl"><img src="/image/php.png" alt="">PHP</div>
        <div class="bg-slate-50 rounded-xl min-w-fit font-hahmlet font-semibold italic pb-4 shadow-xl"><img src="/image/html.png" alt="">HTML</div>
        <div class="bg-slate-50 rounded-xl min-w-fit font-hahmlet font-semibold italic pb-4 shadow-xl"><img src="/image/css.png" alt=""> CSS</div>
        <div class="bg-slate-50 rounded-xl min-w-fit font-hahmlet font-semibold italic pb-4 shadow-xl"><img src="/image/laravel.png" alt="">laravel</div>
        <div class="bg-slate-50 rounded-xl min-w-fit font-hahmlet font-semibold italic pb-4 px-2 shadow-xl"><img src="/image/bootstrap.png" alt="">BOOTSTRAP</div>
      </div>
  </div>
</section >

<section class="text-center py-20">
  <div class="container mx-auto">
    <div class="font-hahmlet font-bold text-2xl">Blog</div>
    <div class="font-inter text-light-80 my-6">Berikut merupakan post-post yang <span class="block">telah saya buat sendiri</span></div>
    <div class="lg:max-w-4xl md:max-w-3xl sm:max-w-2xl justify-center flex flex-wrap mx-auto gap-x-8 gap-y-10 px-4">
      @foreach ($posts->take(4) as $post)
      <figure class="bg-secondary text-start rounded-xl w-64 sm:w-72 md:w-80 lg:w-96 shadow-md">
        @if ($post->image)
        <a href="/post/{{ $post->slug }}" alt="/post/{{ $post->slug }}"><img src="{{ asset('storage/' . $post->image) }}" alt="/post/{{ $post->slug }}" class="rounded-t-xl w-screen h-40"></a>
        @else
        <a href="/post/{{ $post->slug }}" alt="/post/{{ $post->slug }}"><img src="/image/gambar1.png" alt="" class="rounded-t-xl"></a>
        @endif
        <div class="p-6">
          <div class="font-hahmlet font-medium lg:text-xl md:text-lg text-base "><a href="/post/{{ $post->slug }}" alt="/post/{{ $post->slug }}">{{ $post->title }}</a></div>
          <p class="font-inter pt-3 text-light-80 md:text-base text-sm">{{ $post->excerpt }}</p>
          <div class="font-inter text-sm pt-6"><a href="/post/{{ $post->slug }}" alt="/post/{{ $post->slug }}">Read more</a></div>
        </div>
      </figure>
      @endforeach
    </div>
    <form action="/posts">
      <button class="bg-yellow-300 hover:bg-yellow-400 rounded-xl flex px-6 py-1 font-inter text-base active:bg-yellow-500 group active:shadow-lg shadow-md hover:shadow-lg mx-auto mt-10">
        <div class="pr-4 group-hover:text-slate-700 group-active:text-slate-600">
          Lihat Selengkapnya
        </div>
        <div class="group-hover:stroke-slate-700 group-active:stroke-slate-600 py-1">
          <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="group-hover:stroke-slate-700 group-active:stroke-slate-600 stroke-black">
            <path d="M0 8.67442H22M22 8.67442L14.4 1M22 8.67442L14.4 16"/>
          </svg>
        </div>
      </button>
    </form>
  </div>
</section>
@endsection