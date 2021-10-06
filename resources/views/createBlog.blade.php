@extends('master')

@section('title', 'Create a Post')

@section('content')

<div class="img-header doggo-header">
    <img src="img/doggies.jpeg" alt="">
</div>
<div class="container-fluid site-container">
    <div class="site-title">
        <h1>Create a new Post</h1>
    </div>
    @auth
    <div class="container form-container w-100">
        <form class="newPost" action="/articleCreate" method="post">
            <div class="form-group">
                <label for="chooseCategory">Choose a picture</label>
                <input type="file" class="form-control-file" id="chooseCategory">
            </div>
            <label for="category">Category</label>
            <select class="form-control" id="exampleFormControlSelect1" name="category">
                <option>-- Select Category --</option>
                @foreach ($categories as $category) 
                    <option value="{{ $category->id }}">{{ $category->text }}</option>
                @endforeach
            </select>
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Title">
            <label for="content">Text</label>
            <textarea name="content" placeholder="Content"></textarea>
            @csrf
            <button class="new-post create" type="submit">Create</button>
        </form>
    </div>
    @endauth
    <!-- back to home button -->
    <div class="container-fluid home-container">
        @csrf
        <button class="sign-up home-btn"><a href="/home"><i class="fa fa-home" aria-hidden="true"></i>Home</a></button>
    </div>
</div>
<div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="input-group">
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input">
                <label class="custom-file-input">Choose file</label>
            </div>
        </div>
        <div class="input-group">
            <select name="Categories"> 
                @foreach ($categories as $category) 
                    <option value="{{ $category->id }}">{{ $category->text }}</option>
                @endforeach
            </select> 
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title"class="form-control" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label>Text</label>
            <input type="text" name="text" class="form-control" placeholder="Enter Text">
        </div>
</div>


@endsection

    


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
