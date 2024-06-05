
@extends('layouts.admin')

@section('content')
    <div>
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
            <h1 class="text-2xl text-black pb-3">Dashboard</h1>
                <h1 class="text-5xl text-black pb-6 font-bold">Hi, {{ Auth::user()->name }}! Happy working</h1>
    
                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> All User
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-sidebar text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">User ID</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @foreach ($users as $user)
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">{{ $user->id }}</td>
                                    <td class="w-1/3 text-left py-3 px-4">{{ $user->name }}</td>
                                    
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">{{ $user->email }}</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection

