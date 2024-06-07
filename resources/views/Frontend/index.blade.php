@extends('layouts.app')

@section('content')

<div class="Konten px-10 flex flex-col justify-center items-center min-h-screen">
@if (session('message'))
<div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
  <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
  </svg>
  <span class="sr-only">Info</span>
  <div>
    <span class="font-medium">{{ session('message') }}
  </div>
</div>
@endif

  <div class="welcome text-[25.20px] font-semibold">Selamat datang di Large</div>
  <h1 class="judul">Tempat Berbagi Cerita dan Ide</h1>
  <h3 class="slogan">Tuliskan, Bagikan, Terhubung</h3>
  @if (Route::has('login'))
  @auth
  <a href="{{route('home')}}">
    <button type="button" data-twe-ripple-init data-twe-ripple-color="light" class="inline-block rounded-full bg-custom px-6 pb-2 pt-2.5 text-xl font-medium leading-normal text-white shadow-custom transition duration-150 ease-in-out hover:bg-custom-dark focus:bg-custom-dark active:bg-custom-darker focus:outline-none focus:ring-0 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
      Jelajahi Sekarang
    </button>
  </a>
  @else
  <a href="{{route('login')}}">
    <button type="button" data-twe-ripple-init data-twe-ripple-color="light" class="inline-block rounded-full bg-custom px-6 pb-2 pt-2.5 text-xl font-medium leading-normal text-white shadow-custom transition duration-150 ease-in-out hover:bg-custom-dark focus:bg-custom-dark active:bg-custom-darker focus:outline-none focus:ring-0 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
      Jelajahi Sekarang
    </button>
  </a> 
  @endif
  @endauth
  <img src="../assets/images/elemen.svg">
</div>
@endsection