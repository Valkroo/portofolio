@extends('layouts.main')

@section('content')
<section>
    <div class="container mx-auto mt-10 mb-10">
        <div class="max-w-xl bg-slate-100 mx-auto">
            <form action="/login" method="post" class="font-inter mx-auto shadow-xl p-6 rounded-md ">
                @csrf
                <div class="text-center font-hahmlet text-2xl font-bold mb-5">Please Login</div>
                <div class="mb-4">
                    <label class="block text-gray-500 text-base font-semibold mb-2" for="email">Email</label>
                    <input type="text" id="email" name="email" class="shadow text-sm appearance-none border focus:border-2 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-400 focus:outline-blue-400 focus:shadow-lg focus:shadow-blue-100 " required autofocus placeholder="email" value="{{ old('email') }}">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-500 text-base font-bold mb-2" for="password">Password</label>
                    <input type="text" id="password" name="password" class="shadow text-sm appearance-none border focus:border-2 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-400 focus:outline-blue-400 focus:shadow-lg focus:shadow-blue-100" required placeholder="********" value="{{ old('password') }}">
                </div>
                    <button class="bg-blue-500 hover:bg-blue-600 text-center text-white font-bold py-2 px-4 rounded-lg shadow-md hover:shadow-lg active:outline-double active:outline-4 active:outline-blue-400 w-full"
                    type="submit">login</button>
                
            </form>
        </div>
    </div>
</section>
@endsection