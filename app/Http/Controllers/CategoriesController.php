<?php

namespace App\Http\Controllers;


use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoriesController extends Controller
{

    public function showAll() {

        $Categories = Categories::all();
    
        return view('home', ['Categories' => $Categories]); 
    }
}