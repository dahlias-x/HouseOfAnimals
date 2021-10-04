@extends('master')

@section('title', 'Create a Post')

@section('content')
    <!-- site content -->
    <div class="img-header doggo-header">
        <img src="img/doggies.jpeg" alt="">
    </div>
    <div class="container-fluid site-container">
        <div class="site-title">
            <h1>Create a new Post</h1>
        </div>

        <div class="container form-container w-100">
            <form class="newPost" action="" method="POST" enctype="multipart/form-data">
                <!-- choose file button -->
                <div class="form-group chooseFile">
                    <label for="chooseFile" class="custom-file-input">Choose picture</label>
                    <input type="file" class="form-control-file custom-file-input" id="chooseFile"> 
                </div>

                <!-- {{-- <pre>
                    {{ var_dump($categories) }}
                </pre> --}} -->

                <!-- choose category -->
                <div class="input-group">
                    <label for="categories">Category</label>
                    <select name="Categories" class="form-control" id="categories"> 
                    <option>-- Select Category --</option>    
                    @foreach ($categories as $category)  

                            <option value="{{ $category->id }}">{{ $category->text }}</option>
        
                        @endforeach
                    </select> 
                </div>

                <div class="form-group">

                    <label for="postTitle" aria-label="Title">Title</label>
                    <input type="text" class="form-control" placeholder="Enter Title" id="postTitle">

                </div>

                <div class="form-group">

                    <label for="postText" aria-label="Text">Text</label>
                    <textarea class="form-control" placeholder="Enter Text" id="postText" name="postText"></textarea>

                </div>
                @csrf
                <button class="new-post create" type="submit">Create</button>
            </form>
        </div>
        <!-- back to home button -->
        <div class="container-fluid home-container">
            @csrf
            <button class="sign-up home-btn"><a href="/home"><i class="fa fa-home" aria-hidden="true"></i>Home</a></button>
        </div>
    </div>


@endsection