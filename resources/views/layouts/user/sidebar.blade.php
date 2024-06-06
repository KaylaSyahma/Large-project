<aside class="hidden lg:flex flex-col items-center sticky top-0 right-0 p-90 w-[400px] border-l-2 border-gray-300 overflow-y-hidden h-screen pt-[8rem]">
        <img src="../asset/Ellipse 6 (1).png" alt="" class="mb-[33px] mt-[90px]">
        <h2 class="text-[30px] font-bold mb-[30px]">Kayla Syahma</h2>

        <a href="{{route('user-profile')}}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-[29px] group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-black focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-[27px] group-hover:bg-opacity-0">
                Edit Profil
            </span>
        </a>

        <a href="{{route('user-profile')}}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-red-500 rounded-[29px] group bg-gradient-to-br bg-red-500 hover:text-white dark:text-black focus:ring-4 focus:outline-none focus:ring-red-200 dark:focus:ring-red-800" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-[27px] group-hover:bg-opacity-0">
                Log Out
            </span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
    </aside>