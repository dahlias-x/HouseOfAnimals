@extends('master')

@section('title', 'House Of Animals')

@section('content')

    <!-- site content -->
    <div class="container-fluid site-container mt-5">
        <div class="container form-container post-container w-100">
            <h1 class="post-title">{{ $article->title }}</h1> <!-- post title -->
            <p class="author">written by: {{ $article->user->name }}</p> <!-- written by -->
                <span class="timeup">published: {{$article->created_at->diffForHumans();}} </span>
            <div class="post-full">
                <img src="/img/bunny.jpg" alt="alt" class="post-img"> <!-- post img -->
                <p class="post-text">
                {{ $article->text }}
                </p> <!-- post text -->
            </div>
            <div class="category">
                <h4>Category: </h4> <!-- category title -->
                
                <button class=" sign-up cat-btn" href="/home">Category</button> <!-- selected category -->
                <!-- <button class=" sign-up cat-btn" href="/home">Dogs</button> selected category -->
            </div>
            <div class="likes">
                <ion-icon class="paw-outline" name="paw-outline"></ion-icon> <!-- likes -->
                <p class="likes-counter">1</p> <!-- amount of likes -->
            </div>
        </div>

        <!-- leave comment -->
        <div class="container comment-container w-100">
            <h4 class="leave-comment">Leave us a comment:</h4>
            <textarea rows="2" cols="10" class="comment" placeholder="Write a comment" name="text" id="text"></textarea>
            <button class="sign-up comment-submit">Submit</button>
        </div>

        <div class="container comment-section">
            <!-- already posted comments -->
            <h4 class="section-title">Comments:</h4>
            <ul class="comment-list form-container w-100">
            @foreach ($comments as $comment)
                <li class="comment-item">
                    <p class="username">{{ $comment->user->name }}</p> <!-- username -->
                    <span class="comment-time">{{$comment->created_at->diffForHumans();}}</span> <!-- when they commented -->
                    <p class="comment-up">{{ $comment->text }}</p> <!-- comment -->
                </li>
               @endforeach
            </ul>
        </div>

        <!-- back to home button
        <div class="container-fluid home-container">
            @csrf
            <button class="sign-up home-btn"><a href="/home"><i class="fa fa-home" aria-hidden="true"></i>Home</a></button>
        </div> -->
    </div>

@endsection 