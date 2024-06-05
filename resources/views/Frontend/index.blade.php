@extends('layouts.app')
@section('content')

<div class="Konten px-10 flex flex-col justify-center items-center min-h-screen">
    <div class="welcome text-[25.20px] font-semibold">Selamat datang di Large</div>    
    <h1 class="judul">Tempat Berbagi Cerita dan Ide</h1>
    <h3 class="slogan">Tuliskan, Bagikan, Terhubung</h3>
    <button type="button" data-twe-ripple-init data-twe-ripple-color="light"
      class="inline-block rounded-full bg-custom px-6 pb-2 pt-2.5 text-xl font-medium leading-normal text-white shadow-custom transition duration-150 ease-in-out hover:bg-custom-dark focus:bg-custom-dark active:bg-custom-darker focus:outline-none focus:ring-0 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
      Jelajahi Sekarang
    </button>
    <img src="../assets/images/elemen.svg">
  </div>
  @endsection