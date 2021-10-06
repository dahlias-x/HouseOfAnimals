@extends('master')

@section('title', 'House Of Animals')

@section('content')

<div class="img-header doggo-header">
    <img src="img/doggies.jpeg" alt="">
</div>
<x-guest-layout>
    <x-auth-card>
        <div class="container form-container login-container">
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500 lav-logo" />
                </a>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
            <form method="POST" action="{{ route('login') }}" class="loginForm">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <x-label class="info-label" for="email" :value="__('Email')" />

                    <x-input id="email" class="text-title login-input block mt-1 w-full" type="email" placeholder="Email Address" name="email" :value="old('email')" required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4 form-group">
                    <x-label class="info-label" for="password" :value="__('Password')" />

                    <x-input id="password" class="text-title login-input block mt-1 w-full" placeholder="Password"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password"/>
                </div>

                <!-- Remember Me -->
                <div class="remember-block block mt-4 form-group">
                    <label for="remember_me" class="remember-box inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="check-rem rounded border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div class="forgot flex items-center mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Not a member yet?') }}
                    </a>

                    <button class="login-btn">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>  
        </div>
        <!-- back to home button
        <div class="container-fluid home-container">
            @csrf
            <button class="sign-up"><a href="/home"><i class="fa fa-home"></i>Home</a></button>
        </div>     -->
    </x-auth-card>
</x-guest-layout>

@endsection
