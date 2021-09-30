<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createBlog extends Controller
{
    public function createBlog()
    {
        return view('createBlog');
    }
}
