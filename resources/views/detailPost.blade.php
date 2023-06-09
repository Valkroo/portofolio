@extends('layouts.main')

@section('content')
<section class="md:my-20 sm:my-16 mb-20 mt-10">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <div class="font-hahmlet font-bold lg:text-2xl sm:text-xl text-base">{{ $post->title }}</div>
            <div class="lg:my-12 md:my-8 my-4">
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="" class=" w-full">
                @else
                <img src="/image/gambar.png" alt="" class=" w-full">
                @endif
            </div>
            <div class="font-inter pt-3 text-gray-600 md:text-base text-sm">{!! $post->body !!}</div>
            
            <div class="mt-14">
                <div class="text-xl font-bold font-inter">Share This Post</div>
                <ul class="flex gap-6 mt-6">
                    <a href=""><li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.08577 23.9151C4.65848 23.8502 3.88314 23.6127 3.36743 23.4115C2.6841 23.1455 2.19693 22.8288 1.68407 22.3166C1.17122 21.8045 0.853806 21.3173 0.589176 20.634C0.388029 20.1183 0.150504 19.3429 0.0855946 17.9157C0.0142658 16.3728 0 15.9099 0 12.0011C0 8.09225 0.0156923 7.63004 0.0848813 6.08577C0.14979 4.65848 0.388742 3.88457 0.588463 3.36743C0.854519 2.6841 1.17193 2.19693 1.68336 1.68336C2.1955 1.17122 2.68268 0.853092 3.36672 0.588463C3.88243 0.387315 4.65777 0.14979 6.08506 0.0848813C7.62861 0.0142658 8.09225 0 11.9996 0C15.9085 0 16.3707 0.0156923 17.9149 0.0848813C19.3422 0.14979 20.1161 0.388742 20.6333 0.588463C21.3166 0.853092 21.8038 1.17122 22.3166 1.68336C22.8295 2.1955 23.1455 2.68339 23.4115 3.36672C23.6127 3.88243 23.8502 4.65777 23.9151 6.08506C23.9857 7.62933 24 8.09154 24 12.0004C24 15.9077 23.9857 16.3714 23.9151 17.9157C23.8502 19.3429 23.6113 20.1183 23.4115 20.634C23.1455 21.3173 22.8288 21.8045 22.3166 22.3166C21.8045 22.8288 21.3166 23.1455 20.6333 23.4115C20.1176 23.6127 19.3422 23.8502 17.9149 23.9151C16.3721 23.9857 15.9085 24 11.9996 24C8.09225 24 7.62862 23.9864 6.08577 23.9151Z" fill="url(#paint0_radial_113_5300)"/>
                            <path d="M9.27709 11.915C9.27709 10.4579 10.4579 9.27645 11.915 9.27645C13.3721 9.27645 14.5535 10.4579 14.5535 11.915C14.5535 13.3721 13.3721 14.5535 11.915 14.5535C10.4579 14.5535 9.27709 13.3721 9.27709 11.915ZM7.85074 11.915C7.85074 14.1597 9.67031 15.9793 11.915 15.9793C14.1597 15.9793 15.9793 14.1597 15.9793 11.915C15.9793 9.67031 14.1597 7.85074 11.915 7.85074C9.67031 7.85074 7.85081 9.67018 7.85081 11.915M15.1904 7.68959C15.1903 7.87745 15.246 8.0611 15.3503 8.21734C15.4546 8.37357 15.6029 8.49537 15.7764 8.56733C15.9499 8.63929 16.1409 8.65817 16.3251 8.6216C16.5094 8.58502 16.6787 8.49463 16.8116 8.36185C16.9444 8.22907 17.035 8.05987 17.0717 7.87564C17.1084 7.69141 17.0897 7.50043 17.0179 7.32685C16.946 7.15327 16.8244 7.00488 16.6682 6.90045C16.5121 6.79603 16.3285 6.74025 16.1406 6.74017H16.1402C15.8884 6.74029 15.647 6.84034 15.4689 7.01836C15.2908 7.19637 15.1906 7.43779 15.1904 7.68959ZM8.71734 18.3577C7.94566 18.3225 7.52623 18.194 7.24749 18.0854C6.87796 17.9415 6.61429 17.7702 6.33708 17.4934C6.05986 17.2165 5.88827 16.9531 5.74504 16.5836C5.63638 16.305 5.50784 15.8854 5.47276 15.1137C5.43439 14.2794 5.42673 14.0288 5.42673 11.9151C5.42673 9.80144 5.43502 9.55152 5.47276 8.71652C5.5079 7.94484 5.63739 7.5261 5.74504 7.24667C5.8889 6.87713 6.06024 6.61347 6.33708 6.33625C6.61391 6.05904 6.87732 5.88744 7.24749 5.74421C7.5261 5.63556 7.94566 5.50702 8.71734 5.47194C9.55164 5.43356 9.80227 5.4259 11.915 5.4259C14.0277 5.4259 14.2786 5.43407 15.1136 5.47206C15.8853 5.50721 16.304 5.6367 16.5835 5.74434C16.953 5.88757 17.2167 6.05955 17.4939 6.33638C17.7711 6.61322 17.942 6.87726 18.0859 7.2468C18.1946 7.5254 18.3231 7.94496 18.3582 8.71664C18.3966 9.55164 18.4042 9.80157 18.4042 11.9153C18.4042 14.0289 18.3966 14.2789 18.3582 15.1139C18.323 15.8855 18.1939 16.305 18.0859 16.5837C17.942 16.9532 17.7707 17.2169 17.4939 17.4935C17.217 17.7701 16.953 17.9417 16.5835 18.0855C16.3048 18.1942 15.8853 18.3227 15.1136 18.3578C14.2793 18.3962 14.0287 18.4038 11.915 18.4038C9.80132 18.4038 9.55139 18.3962 8.71734 18.3578M8.6518 4.04793C7.8092 4.08631 7.23344 4.21991 6.73061 4.41557C6.21018 4.61762 5.76903 4.8887 5.32852 5.32852C4.888 5.76834 4.61762 6.20955 4.41557 6.73061C4.21991 7.23375 4.08631 7.8092 4.04793 8.6518C4.00893 9.49573 4 9.76554 4 11.915C4 14.0645 4.00893 14.3343 4.04793 15.1782C4.08631 16.0209 4.21991 16.5962 4.41557 17.0994C4.61762 17.6198 4.88806 18.0619 5.32852 18.5015C5.76897 18.9411 6.20955 19.2118 6.73061 19.4144C7.23439 19.6101 7.8092 19.7437 8.6518 19.7821C9.49618 19.8204 9.76554 19.83 11.915 19.83C14.0645 19.83 14.3343 19.8211 15.1782 19.7821C16.0209 19.7437 16.5962 19.6101 17.0994 19.4144C17.6198 19.2118 18.061 18.9413 18.5015 18.5015C18.942 18.0617 19.2118 17.6198 19.4144 17.0994C19.6101 16.5962 19.7443 16.0208 19.7821 15.1782C19.8204 14.3336 19.8294 14.0645 19.8294 11.915C19.8294 9.76554 19.8204 9.49573 19.7821 8.6518C19.7437 7.80914 19.6101 7.23344 19.4144 6.73061C19.2118 6.21018 18.9413 5.76903 18.5015 5.32852C18.0617 4.888 17.6198 4.61762 17.1 4.41557C16.5962 4.21991 16.0208 4.08567 15.1788 4.04793C14.3348 4.00937 14.0651 4 11.916 4C9.76681 4 9.49649 4.00893 8.65212 4.04793" fill="white"/>
                            <defs>
                            <radialGradient id="paint0_radial_113_5300" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1.55326 23.4742) scale(30.4711)">
                            <stop offset="0.09" stop-color="#FA8F21"/>
                            <stop offset="0.78" stop-color="#D82D7E"/>
                            </radialGradient>
                            </defs>
                        </svg>
                    </li></a>
                    <a href="">
                        <li>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_113_5299)">
                                <path d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4688H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9701 4.6875 17.3438 4.92188 17.3438 4.92188V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.75V12H17.2031L16.6711 15.4688H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z" fill="#1877F2"/>
                                <path d="M16.6711 15.4688L17.2031 12H13.875V9.75C13.875 8.80102 14.34 7.875 15.8306 7.875H17.3438V4.92188C17.3438 4.92188 15.9705 4.6875 14.6576 4.6875C11.9166 4.6875 10.125 6.34875 10.125 9.35625V12H7.07812V15.4688H10.125V23.8542C11.3674 24.0486 12.6326 24.0486 13.875 23.8542V15.4688H16.6711Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_113_5299">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </li>
                    </a>
                </ul>
            </div>
            <div class="border shadow-md rounded-lg mt-8 font-inter">
                <div class="m-8">
                    <div class="font-semibold text-lg">Leave Comment Here</div>                
                    <form action="/post/{{ $post->id }}/comment" method="post" class="mt-4">
                        @csrf
                        <input type="hidden" name="post_slug" value="{{ $post->slug }}">
                        <div class="mb-4">
                            <label class="block text-gray-500 text-base font-medium mb-2" for="name">Name :</label>
                            <input type="text" id="name" name="name" class="shadow text-sm appearance-none border focus:border-2 rounded  w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-400 focus:outline-blue-400 focus:shadow-lg focus:shadow-blue-100 " placeholder="name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-500 text-base font-medium mb-2" for="comment">Comment :</label>
                            <textarea name="comment" id="comment" cols="30" rows="4" class="shadow text-sm appearance-none border focus:border-2 rounded  w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-400 focus:outline-blue-400 focus:shadow-lg focus:shadow-blue-100 " placeholder="" value="{{ old('comment') }}"></textarea>
                        </div>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md hover:shadow-lg active:outline-double active:outline-4 active:outline-blue-400"
                        type="submit">submit</button>
                    </form>
                </div>
            </div>
            <div class="border border-gray-100 rounded shadow-lg mt-8 font-inter">
                <div class="p-5 font-semibold text-lg">Comments</div>
                <div class="max-h-56 overflow-auto">
                    <div class="mx-8 pb-4">
                        @if ($comments->count() > 0)
                          @foreach ($comments as $comment)
                            <div class="border border-gray-100 shadow-md px-8 py-4 rounded-md mb-5">
                              <div class="flex items-center mb-2 gap-4">
                                <div class="font-semibold text-base items-center">{{ $comment->name }}</div>
                                <div class="text-sm text-blue-400 items-center mr-auto">{{ $comment->created_at->diffForHumans() }}</div>
                              </div>
                              <p class="text-gray-500 font-medium text-sm">
                                  {{ $comment->comment }}
                              </p>
                              @can('admin')
                                <div class="mt-4">
                                    <form action="/post/{{ $post->slug }}/comment/{{ $comment->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="bg-red-500 hover:bg-red-600 flex items-center gap-2 p-2 rounded-lg" type="submit" onclick="return confirm('Are You Sure to delete this commment?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                            <div class="text-sm items-center">Delete</div>
                                        </button>
                                    </form>
                                </div>
                                @endcan
                            </div>
                          @endforeach
                         @else
                           <p class="font-semibold text-base mb-2">no comments yet</p>
                        @endif
                    </div>
                </div>
            </div>
            <a href="/posts">
                <button class="bg-yellow-300 hover:bg-yellow-400 rounded-xl p-2 gap-x-3 flex font-inter text-base active:bg-yellow-500 group active:shadow-lg shadow-md hover:shadow-lg mt-8 items-center">
                  <div class="group-hover:stroke-slate-700 group-active:stroke-slate-600 ml-2">
                    <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="group-hover:stroke-slate-700 group-active:stroke-slate-600 stroke-black rotate-180">
                      <path d="M0 8.67442H22M22 8.67442L14.4 1M22 8.67442L14.4 16"/>
                    </svg>
                  </div>
                  <div class="group-hover:text-slate-700 group-active:text-slate-600 mr-2">
                    Back To Posts
                  </div>
                </button>
            </a>
        </div>
    </div>
</section>
@endsection