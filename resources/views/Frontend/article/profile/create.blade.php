<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custome.css')}}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container pt-[50px]">
        <h1 class="text-[49.374px] font-bold lg:mb-[40px]">Tulis Artikel</h1>
        <form class="flex flex-col h-full" action="{{route('user-store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap lg:flex-nowrap space-y-4 lg:space-y-0 lg:gap-x-[120px] mb-8">
                <div class="w-full lg:w-1/2 lg:mr-8">
                    <label for="judul" class="block mb-5 text-sm font-medium text-[#676767] text-[23.625px]">Judul</label>
                    @error('judul')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                    <input name="judul" type="text" id="judul" placeholder="Tuliskan judul.." class="block lg:mb-[43px] w-full p-2 border-[3px] border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-[#FF707B] focus:border-[#FF707B] focus:outline-none transition-colors duration-300" />
                    

                    <label for="slug" class="block mb-5 text-sm font-medium text-[#676767] text-[23.625px]">Slug</label>
                    @error('slug')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                    <input name="slug" type="text" id="slug" class="mb-[43px] block w-full p-2 border-[3px] border-gray-300 rounded-lg bg-gray-50 text-base focus:border-[#FF707B] focus:outline-none transition-colors duration-300" />
                    

                    <label class="block mb-5 text-sm font-medium text-[#676767] text-[23.625px]" for="user_avatar">Upload file</label>
                    @error('image')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                    @error('image.*')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                    <input name="image[]" type="file" id="user_avatar" multiple class="block lg:mb-[43px] w-full text-md text-gray-900 border border-gray-300 rounded-sm cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none focus:border-[#FF707B] dark:border-gray-600 dark:placeholder-gray-400 transition-colors duration-300" />
                    

                    <label for="" class="block mb-5 text-sm font-medium text-[#676767] text-[23.625px]">Kategori</label>
                    <button type="button" class="transition-colors duration-200 text-green-700 hover:text-white border-[3px] border-green-700 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">Comic</button>
                </div>

                <div class="w-full lg:w-1/2">
                    <label for="message" class="block mb-5 text-sm font-medium text-[#676767] text-[23.625px]">Artikel</label>
                    <textarea name="artikel" id="message" rows="4" class="h-[390px] block w-full p-3 text-md text-gray-600 border-[3px] border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-[#FF707B] transition-colors duration-300" placeholder="Tuliskan Artikel..."></textarea>
                    @error('artikel')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end mt-auto">
                <a href="{{route('user-profile')}}" type="button" class="text-[#FC813B] transition-colors duration-200 hover:text-white border-[3px] border-[#FC813B] hover:bg-[#FC813B]  focus:outline-none focus:ring-[#FC813B] font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">Kembali</a>
                <button type="submit" class="text-white transition-colors duration-200 bg-yellow-400 hover:bg-yellow-500 focus:outline-none  focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-3 text-center me-2 mb-2">Upload Artikel</button>
            </div>
        </form>
    </div>
</body>

</html>