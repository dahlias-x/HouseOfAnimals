@extends('master')

@section('title', 'House Of Animals')

@section('content')

    <!-- header image -->
    <div class="img-header">
        <img src="{{ asset('img/doggies.jpeg')}}" alt="many different types of australian shepherd puppies">
    </div>

    <div class="container-fluid site-container w-100">
        <!-- welcome text -->
        <div class="container mt-5 welcome-container">
            <h2 class="welcome-title mb-3 pt-4">
                Welcome To House Of Animals
            </h2>
            <p class="welcome-text">
                We are a small blog about pets.<br>
                Here you can find many tips and tricks for your pet and even better...<br>
                recipes for homemade treats!
            </p>
        </div>
        
        <!-- tabs with categories -->
        <div class="container">
            <h3 class="tabs-title pt-5 mb-4">Articles</h3>            
                <form action="{{ route('category') }}">
                    <ul class="nav nav-tabs">
                        <a class="nav-link active" data-bs-toggle="tab" href="./home">All</a>

                        @foreach ($categories as $category)
                        <li class="nav-item">
                            <button id="Cat" name="Cat"  value="{{ $category->id }}" class="nav-link active">{{ $category->text }}</button>
                        </li>
                        @endforeach
                        
                    </ul>
                </form>
            

            <!-- create all blogs from DB -->
    
            <div class="tab-content">
                @foreach ($articles as $article) 
                    <div class="tab-pane active" id="all">
                        <div class="row border g-0 rounded shadow-sm category-row">
                            <div class="col-auto">
                                <a href="#"><img src="img/bunny.jpg" class="img-thumbnail dimension"></a>
                            </div>
                            <div class="col article-content">
                                <h2 class="article-title">{{ $article->title }}</h2>
                                <p>{{$article->text}}</p>
                                <button class="sign-up read-p"><a href="/article/{{$article->id}}">Read</a></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> 
        </div>
    </div>

@endsection
