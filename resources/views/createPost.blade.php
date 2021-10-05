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
            <form class="newPost" action="{{ route('safe') }}" method="POST">
                <div class="form-group">
                    <label for="picture">Choose a picture</label>
                    <input name="image" id="image" type="file" class="form-control-file">
                </div>
                <label name="category" for="category">Category</label>
                <select class="form-control" id="category" name="category">
                    <option>-- Select Category --</option>
                    @foreach ($categories as $category) 
                    <option value="{{ $category->id }}">{{ $category->text }}</option>
                @endforeach
                </select>
                <label name="title" for="title">Title</label>
                <input type="text" name="title" placeholder="Title">
                <label for="content">Text</label>
                <textarea name="text" id="text" placeholder="Content" class="content-text"></textarea>
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