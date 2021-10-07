<?php

namespace App\Models;

use App\Models\User;
use PhpParser\Comment;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'foreignkeys', 'article_id', 'categorie_id');
    } 
    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    } 
}
