@extends('master')

@section('title', 'House Of Animals')

@section('content')

    <!-- site content -->
    <div class="img-header doggo-header">
        <img src="img/doggies.jpeg" alt="">
    </div>
    <div class="container-fluid site-container">
        <div class="site-title">
            <h1>Login</h1>
        </div>
        <div class="container form-container login-container">
            <form class="newPost loginForm mb-4" method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                @csrf
    
                <!-- Email Address -->
                <div class="mt-4 w-100 email-info">
                    <!-- <label for="email" :value="__('Email')" /> -->
                    <label class="info-label" for="email" :value="__('Email')">Email:</label>
                    <input id="email" class="block mt-1 w-100" class="form-control" placeholder="Email Address" type="email" name="email" :value="old('email')" required autofocus />
                </div>
    
                <!-- Password -->
                <div class="mt-4 w-100 password-info">
                    <!-- <label for="password" :value="__('Password')" /> -->
                    <label class="info-label" for="password" :value="__('Password')">Password:</label>
                    <input id="password" class="block mt-1 w-100" class="form-control" placeholder="Password"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>
    
                <!-- Remember Me -->
                <div class="remember-block block mt-4">
                    <label for="remember_me" class="remember-box">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 check-rem" name="remember">
                        {{ __('Remember me') }}
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4 w-100 forgot">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 forgot-link" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
    
                    <button class="sign-up"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> 
                    {{ __('Log in') }}</a></button>
                </div>
            </form>
        </div>
        <!-- back to home button -->
        <div class="container-fluid home-container">
            @csrf
            <button class="sign-up home-btn"><a href="/home"><i class="fa fa-home" aria-hidden="true"></i>Home</a></button>
        </div>
    </div> <!--container cls-->

@endsection