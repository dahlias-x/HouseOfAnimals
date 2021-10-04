<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ArticleController extends Controller
{
    

    public function showAll() {
        $categories = DB::table('categories')->get();
        $articles = Article::all();
            return view('home', [
            'articles' => $articles,
            'categories' => $categories]);
    }



    public function showCategory(Request $req) {
        $categorie = Category::find($req->Cat);



        $categories = DB::table('categories')->get();

        // echo '<pre>';
        // var_dump($categorie);
        // echo '</pre>';
        
        return view('home', [
            'articles' => $categorie->articles,
            'categories' => $categories,
        ]);
    }  
}