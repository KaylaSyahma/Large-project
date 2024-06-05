@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARGE - Article</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-[#F3EEE8] flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded-lg max-w-3xl w-full">
        <h1 class="text-4xl font-bold text-gray-900">Patung Kentang Raksasa Undang Wisatawan Luar Angkasa</h1>
        <div class="flex justify-between my-2">
            <p class="text-gray-600 mt-2 mb-5">Chika Maharenong</p>
            <div class="border-b-2 border-purpleAcc my-4"></div>
            <a href="#"><i class="ri-bookmark-line text-2xl text-redAcc"></i></a>
        </div>
        <div class="bg-gray-300 rounded-lg h-96"></div>
        <!-- Ini Bagian text nya -->
        <div class="mt-5">
            <article>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores repudiandae aliquam molestiae. Fugiat aliquid ipsam ad ab fugit quidem porro repellat nesciunt earum ratione at, molestiae tempore tempora dignissimos rem officiis beatae hic placeat, doloremque ipsum eligendi saepe provident autem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia numquam est dolore rem, perspiciatis esse dolor magni iusto atque, consequuntur inventore veritatis facilis error ut unde explicabo aut! Repudiandae, pariatur!</article>
        </div>
    </div>
</body>
</html>

@endsection
