<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'foreignkeys', 'categorie_id', 'article_id');
    }
}
