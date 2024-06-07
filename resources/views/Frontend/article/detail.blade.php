@extends('layouts.app')
@section('content')


<div class="p-6 rounded-lg max-w-3xl w-full mx-auto">
    <h1 class="text-4xl font-bold text-gray-900 mt-[100px]">{{$artikel->judul}}</h1>
    <div class="flex justify-between mt-2 items-center mb-[20px]">
        <p class="text-gray-600 my-2 text-[20px]">{{$artikel->user->name}}</p>
        <a href="#"><i class="ri-bookmark-line text-2xl text-redAcc hover:text-[#FF707B] transition-colors duration-200"></i></a>
    </div>
    <div class="flex justify-between mb-[20px]">
        <div class="inline-block py-2 px-5 bg-gray-300 rounded-3xl  lg:mb-0">
            Topic
        </div>
    </div>
    <hr class="border-[2px] mb-[10px]">
    <div class="bg-gray-200 rounded-lg h-96 w-full">
        @if(isset($artikel->articleImage) && isset($artikel->articleImage->image))
            <img src="{{$artikel->articleImage->image}}" alt="">
        @endif
    </div>
    <!-- Ini Bagian text nya -->
    <div class="mt-5">
        <article>{{$artikel->artikel}}</article>
    </div>
</div>



@endsection