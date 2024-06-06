@extends('layouts.app')

@section('content')


<div class="flex flex-row z-1">
    <div class="lg:container container lg:w-[1054px] relative flex-1 mt-[100px]">
        <h3 class="text-[#9B9B9B] lg:text-[32.24px] font-bold text-[35px]">Halo,</h3>
        <h1 class="text-[40px] lg:text-[50.07px] font-bold lg:mb-[33px] mb-[10px]">Kayla Syahma</h1>

        <hr class="border-[1.5px] mb-[30px]">

        <a href="{{ route('article-detail') }}">
            <div class="flex flex-col lg:flex-row lg:gap-[45px] mb-[40px]">
                <div class="flex-1">
                    <h3 class="font-medium text-[17.55px] mb-[24px]">Chika Maharenong</h3>
                    <h1 class="font-bold text-[20.358px] mb-[26px]">Patung Kentang Raksasa Undang Wisatawan Luar Angkasa</h1>
                    <p class="text-[#707070] mb-[20px] lg:mb-[38px]">Di tengah hiruk-pikuk dunia yang penuh dengan berita politik dan bencana alam, sebuah kota kecil di Indonesia menjadi pusat perhatian internasional. Kota Kentang, yang terkenal dengan produksi kentangnya yang melimpah, kini memiliki daya tarik wisata yang sangat unik: Patung Kentang Raksasa.</p>

                    <div class="inline-block pt-[5px] pb-[5px] pr-[21px] pl-[21px] bg-[#D9D9D9] rounded-[31px] mb-[15px] lg:mb-0">
                        Topic
                    </div>
                    <div class="flex justify-between">


                    </div>
                </div>

                <div class="lg:w-[320px] w-full lg:h-auto h-full">
                    <img src="../assets/Rectangle 19 (1).png" alt="" class="w-full h-full object-cover">
                </div>
            </div>
        </a>
        <hr class="border-[1.5px] mb-[30px]">
        
        <a href="{{ route('article-detail') }}">
            <div class="flex flex-col lg:flex-row lg:gap-[45px] mb-[40px]">
                <div class="flex-1">
                    <h3 class="font-medium text-[17.55px] mb-[24px]">Chika Maharenong</h3>
                    <h1 class="font-bold text-[20.358px] mb-[26px]">Patung Kentang Raksasa Undang Wisatawan Luar Angkasa</h1>
                    <p class="text-[#707070] mb-[20px] lg:mb-[38px]">Di tengah hiruk-pikuk dunia yang penuh dengan berita politik dan bencana alam, sebuah kota kecil di Indonesia menjadi pusat perhatian internasional. Kota Kentang, yang terkenal dengan produksi kentangnya yang melimpah, kini memiliki daya tarik wisata yang sangat unik: Patung Kentang Raksasa.</p>

                    <div class="inline-block pt-[5px] pb-[5px] pr-[21px] pl-[21px] bg-[#D9D9D9] rounded-[31px] mb-[15px] lg:mb-0">
                        Topic
                    </div>
                    <div class="flex justify-between">


                    </div>
                </div>

                <div class="lg:w-[320px] w-full lg:h-auto h-full">
                    <img src="../assets/Rectangle 19 (1).png" alt="" class="w-full h-full object-cover">
                </div>
            </div>
        </a>
        <hr class="border-[1.5px] mb-[30px]">

        <a href="{{ route('article-detail') }}">
            <div class="flex flex-col lg:flex-row lg:gap-[45px] mb-[40px]">
                <div class="flex-1">
                    <h3 class="font-medium text-[17.55px] mb-[24px]">Chika Maharenong</h3>
                    <h1 class="font-bold text-[20.358px] mb-[26px]">Patung Kentang Raksasa Undang Wisatawan Luar Angkasa</h1>
                    <p class="text-[#707070] mb-[20px] lg:mb-[38px]">Di tengah hiruk-pikuk dunia yang penuh dengan berita politik dan bencana alam, sebuah kota kecil di Indonesia menjadi pusat perhatian internasional. Kota Kentang, yang terkenal dengan produksi kentangnya yang melimpah, kini memiliki daya tarik wisata yang sangat unik: Patung Kentang Raksasa.</p>

                    <div class="inline-block pt-[5px] pb-[5px] pr-[21px] pl-[21px] bg-[#D9D9D9] rounded-[31px] mb-[15px] lg:mb-0">
                        Topic
                    </div>
                    <div class="flex justify-between">


                    </div>
                </div>

                <div class="lg:w-[320px] w-full lg:h-auto h-full">
                    <img src="../assets/Rectangle 19 (1).png" alt="" class="w-full h-full object-cover">
                </div>
            </div>
        </a>
        <hr class="border-[1.5px] mb-[30px]">
    </div>
    @include('layouts.user.sidebar')

    
</div>

<!-- Modal -->



<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Yes, I'm sure
                </button>
                <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
            </div>
        </div>
    </div>
</div>



@endsection