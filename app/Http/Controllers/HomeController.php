<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        // if(Auth::id())
        // {
        // $role_as=Auth()->user()->role_as;

        //     if($role_as=='0'){
        //         return view('dashboard');
        //     } else if($role_as=='1'){
        //         $users = User::all();
        //         return view('admin.admin', compact('users'));
        //     }
        //     else{
        //         return redirect();
        //     }
        // }
        $users = User::all();

        return view('admin.admin', compact('users'));
    }
}
