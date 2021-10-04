<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function showAll()
   {
    $categories = Category::all();
    
    return view('/createBlog', ['categories' => $categories]); 
    
   
   }
      
}



