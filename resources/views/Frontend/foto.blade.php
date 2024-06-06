@extends('layouts.app')

@section('content')
<!-- Card -->
<div class="Card rounded-3xl bg-custom-bg shadow-custom2 dark:bg-neutral-700 text-center flex flex-col items-center">
    <!-- Card image -->
    <a href="#!">
      <img class="rounded-t-3xl mt-6" src="../assets/images/profile.svg" />
    </a>
  
    <!-- Card body -->
    <div class="p-6 flex flex-col items-center">

      <!-- Button -->
      <a href="#"
        class="mt-3 inline-block rounded-xl bg-[#FF707B] px-6 pb-2 pt-2.5 text-sm font- leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
        Upload Foto Profile
      </a>
      <!-- Title -->
      <a href="" class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50 mt-3">
        Nanti saja
      </a>
  
    </div>
  
</div>
  <!-- Card -->
@endsection