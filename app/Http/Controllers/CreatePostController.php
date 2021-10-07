<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CreatePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreatePostController extends Controller
{
    
    public function getCat(){
        $categories = Category::all(); 
        return view('createPost', ['categories' => $categories]);
    }
    public function store(Request $request){
        $newPost = new CreatePost();

        $categories = Category::all(); 

        // $newPost->category =  $request->input('categorie');
        $newPost->title =  $request->input('title');
        $newPost->text =  $request->input('text');
        $newPost->user_id = Auth::user()->id;
        $newPost->like = 0;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
            $newPost->image = $filename;
        } 

        $newPost->save();
        return view('createPost' , [
            'create' => $newPost,
            'categories' => $categories,
        ]);

        // return view('createPost')->with('create', $newPost);
    }
}
