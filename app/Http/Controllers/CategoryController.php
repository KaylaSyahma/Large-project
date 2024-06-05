<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all(); // Mengambil semua kategori
        return view('admin.category.index',[
            'categories' => $categories
        ]);        
        
    }

    public function store(Request $request){
        Category::create([
            'kategori' => $request->nama_kategori,
            'slug'     => Str::slug($request->nama_kategori), // Menggunakan nama_kategori untuk slug
        ]);
        return redirect()->back()->with('Ok', 'Berhasil tambah Kategori');
    }

    public function update(Request $request, $id){
        $kategori = Category::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = Str::slug($request->nama_kategori);

        $kategori->update();

        return redirect()->back()->with('Ok', 'Berhasil edit Kategori');
    }
}
