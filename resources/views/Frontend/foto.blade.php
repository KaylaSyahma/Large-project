@extends('layouts.app')

@section('content')
<!-- Card -->
<div class="Card rounded-3xl bg-custom-bg shadow-custom2 dark:bg-neutral-700 text-center flex flex-col items-center">
    <!-- Card image -->
    <a href="#!" class="mt-[100px]">
      <img class="rounded-t-3xl mt-6" src="../assets/images/profile.svg" />
    </a>
  
    <!-- Card body -->
    <div class="p-6 flex flex-col items-center">

      <!-- Button -->
      <a href="#"
        class="mt-3 inline-block rounded-xl bg-[#FF707B] hover:bg-[#da606a] px-6 pb-2 pt-2.5 text-sm font- leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out   ">
        Upload Foto Profile
      </a>
      <!-- Title -->
      <a href="{{route('article')}}" class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50 mt-3">
        Nanti saja
      </a>
  
    </div>
  
</div>
  <!-- Card -->
@endsection