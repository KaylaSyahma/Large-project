@extends('layouts.app')

@section('content')


<div class="flex flex-row z-1">
    <div class="lg:container container lg:w-[1054px] relative flex-1 mt-[100px]">
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
    @include('layouts.sidebarhome')
</div>
@endsection