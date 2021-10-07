<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\Foreignkeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommentsController extends Controller
{

    public function showAll() {

        $Comments = Comments::all();
    
        return view('home', ['Comments' => $Comments]); 
    }
    public function storecomment(Request $request){
        $newComment = new Comments();
        $foreignkeys = Foreignkeys::all(); 
        // $newPost->category =  $request->input('categorie');

        $newComment->text =  $request->input('text');
        $newComment->user_id = Auth::user()->id;
        $newComment->article_id = $foreignkeys->article_id;
    }


}