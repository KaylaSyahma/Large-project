<!-- nav -->
<!-- Main navigation container -->
<!-- <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
     <div class="w-1/2"></div>
     <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
         <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
             <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
         </button>
         <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
         <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
             <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>

             <a href="#" class="block px-4 py-2 account-link hover:text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
         </div>
     </div>
 </header> -->

<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="../assets/images/logo.svg" class="h-8" alt="Flowbite Logo" />
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      
      <div class="flex items-center">
        @if (Route::has('login'))
        <div class=" sm:top-0 sm:right-0 p-6 text-right z-10">
          @auth
          <a href="{{ url('/dashboard/user') }}" class="text-[17px] log-sign me-3 inline-block rounded px-2 pb-2 pt-2.5 font-bold leading-normal text-primary hover:text-primary focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 dark:text-secondary-600 dark:hover:text-secondary-500 "> Dashboard</a>
          @else
          <a href="{{ route('login') }}" class="mr-2">Masuk</a>

          @if(Route::has('register'))
          <a href="{{ route('register') }}" class="text-[17px] log-sign inline-block rounded-full bg-white border-2 border-custom px-3 pb-1 pt-1 font-bold leading-normal text-primary transition duration-150 ease-in-out hover:bg-primary hover:text-primary hover:shadow-lg focus:bg-primary focus:text-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary active:text-white active:shadow-lg">
          Buat Akun
          </a>
          @endif
          @endauth
        </div>
        @endif
      </div>
      </ul>
    </div>
  </div>
</nav>






<!-- <nav class="relative flex w-full flex-wrap items-center justify-between bg-zinc-50 py-2 shadow-dark-mild dark:bg-neutral-700 lg:py-4" data-twe-navbar-ref>
  <div class="relative flex w-full flex-wrap items-center justify-between px-3">
    <div>
      <a class="mx-4 my-1 flex items-center lg:mb-0 lg:mt-0" href="#">
        <img class="me-2" src="../assets/images/logo.svg" style="height: 20px" alt="Large logo" loading="lazy" />
      </a>
    </div>

    Hamburger button for mobile view
    <button class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden" type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
      Hamburger icon
      <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
        </svg>
      </span>
    </button>

    Collapsible navbar container
    <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto" id="navbarSupportedContent4" data-twe-collapse-item>
      Left links
      <ul class="list-style-none me-auto flex flex-col ps-0 lg:mt-1 lg:flex-row" data-twe-navbar-nav-ref>
        Home link
        <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref>
        </li>
      </ul>

      <div class="flex items-center">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
          @auth
          <a href="{{ url('/dashboard') }}" class="text-[17px] log-sign me-3 inline-block rounded px-2 pb-2 pt-2.5 font-bold leading-normal text-primary hover:text-primary focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 dark:text-secondary-600 dark:hover:text-secondary-500 "> Dashboard</a>
          @else
          <a href="{{ route('login') }}">Masuk</a>

          @if(Route::has('register'))
          <a href="{{ route('register') }}" class="text-[17px] log-sign inline-block rounded-full bg-white border-2 border-custom px-6 pb-2 pt-2.5 font-bold leading-normal text-primary transition duration-150 ease-in-out hover:bg-primary hover:text-primary hover:shadow-lg focus:bg-primary focus:text-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary active:text-white active:shadow-lg">
          Buat Akun
          </a>
          @endif
          @endauth
        </div>
        @endif
      </div>
    </div>
  </div>
</nav> -->
<!-- nav -->