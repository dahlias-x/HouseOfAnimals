<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Articles;

class ArticleController extends Controller
{
    

    public function showAll() {

        $articles = Articles::all();
    
        return view('home', ['articles' => $articles]); 
    }
    public function showCategory() {

    }
}
