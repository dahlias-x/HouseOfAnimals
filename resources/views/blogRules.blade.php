@extends('master')

@section('title', 'Create a Post')

@section('content')

<div class="container-fluid site-container overall-container">
    <div class="container form-container rules-container w-100">
        <h1 class="site-title rules-title">Blog Rules</h1>
        <div class="rules">
            <a class="rules-img-link" href='https://www.freepik.com/vectors/people'><img class="rules-img" src="img/5514209.jpg" alt=""></a>
            <ol class="rules-list">
                <li class="rules-item">
                    Be respectful
                </li>
                <li class="rules-item">
                    Racism is not tolerated
                </li>
                <li class="rules-item">
                    We are here to share cute and helpful information for your pets
                </li>
                <li class="rules-item">
                    No hateful speech
                </li>
                <li class="rules-item">
                    When submitting a blog post please write short, simple sentences
                </li>
                <li class="rules-item">
                    This is a place of positivity and happiness
                </li>
            </ol>
        </div>
    </div>
</div>

@endsection