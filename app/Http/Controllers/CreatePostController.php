<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CreatePost;
use Illuminate\Http\Request;

class CreatePostController extends Controller
{
    public function createPost()
    {
    }
    
    public function getCat(){
        $categories = Category::all(); 
        return view('createPost', ['categories' => $categories]);
    }
    public function store(Request $request){
        $newPost = new CreatePost();

        $newPost->category =  $request->input('categorie');
        $newPost->titel =  $request->input('titel');
        $newPost->text =  $request->input('text');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
            $newPost->image = $filename;
        } 
        $newPost->save();
        return view('create')->with('create', $newPost);
    }
}
