@extends('master')

@section('title', 'House Of Animals')

@section('content')

    <!-- header image -->
    <div class="img-header">
        <img src="{{ asset('img/doggies.jpeg')}}" alt="many different types of australian shepherd puppies">
    </div>

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
    <div class="container mt-4 mb-5 pb-5">
        <h3 class="tabs-title pt-5 mb-4">Articles</h3>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#all">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#cats">Cats</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#dogs">Dogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#recipes">Recipes</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="all">
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/bunny.jpg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">Are bunnies a good pet?</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                             Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                             Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/halloween.jpeg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">i love my kitty cat yes i do</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                            Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/dog.jpg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">Doggos</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                            Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/pets.jpg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">Treatos</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                            Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="cats">
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/halloween.jpeg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">i love my kitty cat yes i do</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                            Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/halloween.jpeg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">i love my kitty cat yes i do</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                            Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/halloween.jpeg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">i love my kitty cat yes i do</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                            Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="dogs">
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/dog.jpg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">Doggos</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                            Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/dog.jpg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">Doggos</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                            Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/dog.jpg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">Doggos</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                            Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="recipes">
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/pets.jpg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">Treatos</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                            Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/pets.jpg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">Treatos</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                            Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
                <div class="row border g-0 rounded shadow-sm category-row mt-4">
                    <div class="col-auto">
                        <a href="#"><img src="img/pets.jpg" class="img-thumbnail dimension"></a>
                    </div>
                    <div class="col article-content">
                        <h2 class="article-title">Treatos</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Alias ut debitis dolor, similique quia laboriosam unde, accusantium, quidem non perspiciatis est! 
                            Consequatur laboriosam dolorem commodi adipisci nihil? Et, tempore optio?</p>
                        <button class="sign-up read-p"><a href="post.html">Read</a></button>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection