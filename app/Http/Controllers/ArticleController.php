<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ArticleController extends Controller
{
    public function getusername() {
        $articles = Article::all();

        foreach ($articles as $article) {
            $username = $article->user->name;
        
        }
    }
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
        
        return view('home', [
            'articles' => $categorie->articles,
            'categories' => $categories,
        ]);  
    }  
    public function showAllArticle() {
        $articles = Article::all();
        return view('fullPost', ['articles' => $articles]); 
    }

    
    public function view($id) {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        $comments = Comments::all();
        return view('fullPost', ['article' => $article,
                                'categories' => $categories,
                                 'comments' => $comments ]);
        }
        
    public function delete($id) { $result = Article::findOrFail($id)->delete(); return
        redirect('/articles'); }


    }
    
