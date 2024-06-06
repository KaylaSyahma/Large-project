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
        'artikel'
    ];

    public function articleImage(){
        return $this->belongsTo(ArticleImage::class, 'article_id', 'id');
    }
}
