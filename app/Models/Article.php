<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'artikel',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function articleImage(){
        return $this->hasMany(ArticleImage::class, 'article_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'id');
    }
}
