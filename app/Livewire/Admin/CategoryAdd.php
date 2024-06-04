<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;
use Illuminate\Support\Str;

class CategoryAdd extends Component
{
    public $kategori, $slug;

    public function rules()
    {
        return [
            'kategori' => 'required|string',
        ];
    }
    // Reset form
    public function resetInput()
    {
        $this->kategori = NULL;
        $this->slug = NULL;
    }

    public function storeCategory()
    {
        $validatedData = $this->validate(); // Lakukan validasi sesuai aturan yang ditentukan di rules()
        Category::create([
            'kategori' => $validatedData['kategori'],
            'slug' => Str::slug($validatedData['slug']),
        ]);
        session()->flash('message', 'Kategori berhasil dimasukkan');
        // Untuk menghilangkan modal setelah dipencet
        $this->dispatch('close-modal');
        $this->resetInput();
    }


    public function render()
    {
        $categories = Category::orderBy('id')->get();
        return view('livewire.admin.category', ['categories' => $categories])
            ->extends('layouts.admin');
    }
}
