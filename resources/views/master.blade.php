<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font connection -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />

    <!-- fontawesome connection -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/b823ffd591.js" crossorigin="anonymous"></script>

    <!-- ionicons connection -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <!-- bootstrap connection -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   

    <!-- own stylesheet connection -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- This is a nav-bar -->
    <nav class="navbar navbar-expand-lg">
            
        <div class="container-fluid nav-container">
            <a class="navbar-brand" href="/home"><img class="logo" src="{{ asset('img/logo.png')}}" alt="logo House Of Animals"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-paw"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-list">
                    <li class="nav-item navItem active">
                        <a class="nav-link navlink" href="/home" id="homePage">Home</a>
                    </li>
                    @auth
                        <li class="nav-item navItem">
                            <a class="nav-link navlink" href="/create">Create a Post</a>
                        </li>
                    @endauth
                    <li class="nav-item navItem">
                        <a class="nav-link navlink" href="/rules">Blog Rules</a>
                    </li>
                    @if (Route::has('login'))
                        <div class="sm:block reg-btn">
                            @auth                                
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="sign-up">
                                        <!---<x-responsive-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                           // {{ __('Log Out') }}
                                        </x-responsive-nav-link>-->
                                        {{ __('Log Out') }}
                                        </button>
                                    </form>
                                
                            @else
                                <button class="sign-up"><a href="{{ route('login') }}" >Log in</a></button>

                                @if (Route::has('register'))
                                    <button class="sign-up"><a href="{{ route('register') }}">Register</a></button>
                                @endif
                            @endauth
                        </div>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

     <!-- back to top button -->
     @csrf
     <button type="button" class="btn btn-danger btn-floating btn-lg" id="btt-btn">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- footer -->
    <footer>
        &copy; copyright 2021. Website made by <i class="company">House Of Animals</i> team
    </footer>

     <!-- own js connection -->
     <script src="{{ asset('js/appa.js') }}"></script>
     
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
    integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
    crossorigin="anonymous"></script>

</html>



