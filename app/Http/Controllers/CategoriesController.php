<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\categories;

class CategoriesController extends Controller
{

    public function showAll() {

        $Categories = Categories::all();
    
        return view('home', ['Categories' => $Categories]); 
    }
}