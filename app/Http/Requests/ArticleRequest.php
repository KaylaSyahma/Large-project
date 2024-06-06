<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'judul' => 'required|string',
            'slug' => 'required|string',
            'artikel' => 'required|string',
            'image' => 'required|array',
            'image.*' => 'mimes:jpg,jpeg,png,bmp|max:20000', // contoh validasi file
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'Judul harus diisi.',
            'slug.required' => 'Slug harus diisi.',
            'artikel.required' => 'Artikel harus diisi.',
            'image.required' => 'File harus diupload.',
            'image.*.mimes' => 'File harus berupa gambar dengan format jpg, jpeg, png, bmp.',
        ];
    }
}
