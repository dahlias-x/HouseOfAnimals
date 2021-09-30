<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function showAll()
   {
    $categories = Categories::all();
    
    return view('/createBlog', ['categories' => $categories]); 
      // return view('/createBlog');
   }
}


