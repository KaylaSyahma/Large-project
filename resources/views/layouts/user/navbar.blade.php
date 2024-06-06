
<nav class="bg-white border-gray-200 dark:bg-gray-900 h-[102px] fixed w-full z-10">
  <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse ">
        <img src="../assets/images/logo.svg" class="h-8 ml-[30px]" alt="Large" />
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
          <a href="{{ url('/dashboard/user') }}" class="text-[17px] log-sign me-3 inline-block rounded px-2 pb-2 pt-2.5 font-bold leading-normal text-primary hover:text-primary focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700"> Dashboard</a>
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

