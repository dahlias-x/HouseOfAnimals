<?php

namespace App\Models;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class comments extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function articles() {
        return $this->belongsTo(Article::class);
    }
    protected $table = 'comments';
    protected $fillable = ['text', 'user_id'];
}
