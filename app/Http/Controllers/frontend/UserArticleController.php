<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserArticleController extends Controller
{
    public function index() {
        $user = auth()->user();
        $articles = Article::with('articleImage')->get();
        return view('frontend.article.index', compact('articles', 'user'));
    }

    public function detail($id){
        $artikel = Article::findOrFail($id);
        return view('frontend.article.detail', compact('artikel'));
    }
    
    public function profile(){
        $articles = Article::all();
        $user = auth()->user(); // Mengambil data pengguna yang sedang login
        return view('frontend.article.profile.profile', compact('articles', 'user'));
    }
    public function create(){
        $article = Article::all();
        return view('frontend.article.profile.create', compact('article'));

        
    }

    public function home(){
        return view('frontend.homeuser');
    }

    public function store(ArticleRequest $request){
        $validatedData = $request->validated();

        $article = Article::create([
            'judul' => $validatedData['judul'],
            'slug' => Str::slug($validatedData['slug']),
            'artikel' => $validatedData['artikel']
        ]);

        if($request->hasFile('image')){
            $uploadPath = 'upload/article/';

            // ini untuk image pokoknya
            $i = 1;
            foreach ($request->file('image') as $imageFile) {
                $extension  = $imageFile->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $extension;

                $imageFile->move($uploadPath, $fileName);
                $finalImagePathName = $uploadPath . $fileName;
                $article->articleImage()->create([
                    'article_id'    => $article->id,
                    'image'         => $finalImagePathName,
                ]);
            }
        }

        return redirect()->route('user-profile')->with('message', 'Selamat, Artikel Berhasil Ditambahkan!');

    }
}
