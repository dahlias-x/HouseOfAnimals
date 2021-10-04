<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoriesController extends Controller
{

    public function showAll() {

        $Categories = Category::all();
    
        return view('home', ['Categories' => $Categories]); 
    }
}