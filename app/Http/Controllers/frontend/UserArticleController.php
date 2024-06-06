<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class UserArticleController extends Controller
{
    public function index() {
        return view('frontend.article.index');
    }

    public function detail(){
        return view('frontend.article.detail');
    }

    public function profile(){
        return view('frontend.article.profile.profile');
    }

    public function create(){
        return view('frontend.article.profile.create');
    }

    public function store(ArticleRequest $request){
        $validatedData = $request->validated();

        $article = Article::all()->create([
            'judul' => $validatedData['judul'],
            'slug' => $validatedData['slug'],
            'artikel' => $validatedData['artikel']
        ]);

        if($request->hasFile('image')){
            $uploadPath = 'upload/article/';
        }

    }
}
