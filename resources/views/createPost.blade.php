@extends('master')

@section('title', 'Create a Post')

@section('content')
    <!-- site content -->
    <div class="img-header doggo-header">
        <img src="img/doggies.jpeg" alt="">
    </div>
    <div class="container-fluid site-container">
        <div class="site-title">
            <h1>Create a Post</h1>
        </div>

        <div class="container form-container w-100">
            <form class="newPost" action="{{ route('safe') }}" method="POST">
                <div class="form-group">
                    <label class="create-label" for="picture">Choose picture</label>
                    <input type="file" class="chooseFile form-control-file" id="picture" name="picture">
                </div>
                <label class="create-label" name="Category" for="category">Category</label>
                <select class="form-control select-category" id="category" name="Category">
                    <option>-- Select Category --</option>
                    
                </select>
                <label class="create-label" name="Title" for="title">Title</label>
                <input class="text-title" type="text" name="Title" placeholder="Title">
                <label class="create-label" for="text" name="Text">Text</label>
                <textarea class="content-text" id="text" name="Text" placeholder="Content"></textarea>
                @csrf
                <button class="new-post create" type="submit">Create</button>
            </form>
        </div>

        <!-- back to home button -->
        <div class="container-fluid home-container">
            @csrf
            <button class="sign-up home-btn"><a href="/home"><i class="fa fa-home"></i>Home</a></button>
        </div>
    </div>


@endsection