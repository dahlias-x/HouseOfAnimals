<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatePost extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = ['image', 'category', 'title', 'text', 'like'];
}
