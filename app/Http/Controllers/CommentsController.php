<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\comments;

class CommentsController extends Controller
{

    public function showAll() {

        $Comments = Comments::all();
    
        return view('home', ['Comments' => $Comments]); 
    }
}