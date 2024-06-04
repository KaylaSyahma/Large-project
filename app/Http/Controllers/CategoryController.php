<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all(); // Mengambil semua kategori
        return view('admin.category.index', [
            'categories' => $categories // Mengirim koleksi ke view
        ]);
    }

    public function store(Request $request){
        Category::create([
            'nama_kategori' => $request->nama_kategori,
            'slug'          => Str::slug($request->nama_kategori), // Menggunakan nama_kategori untuk slug
        ]);
        return redirect()->back()->with('Ok', 'Berhasil tambah Kategori');
    }
}
