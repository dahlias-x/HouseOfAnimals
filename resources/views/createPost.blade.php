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
            <form class="newPost" action="/articleCreate" method="post">
                <div class="form-group">
                    <label for="chooseCategory">Choose a picture</label>
                    <input type="file" class="form-control-file" id="chooseCategory">
                </div>
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category">
                    <option>-- Select Category --</option>
                    <option>Cats</option>
                    <option>Dogs</option>
                    <option>Rabbits</option>
                    <option>Birds</option>
                </select>
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Title">
                <label for="content">Text</label>
                <textarea class="content-text" name="content" placeholder="Content"></textarea>
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