<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\foreignkeys;

class ForeignkeysController extends Controller
{

    public function showAll() {

        $Foreignkeys = Foreignkeys::all();
    
        return view('home', ['Foreignkeys' => $Foreignkeys]); 
    }
}