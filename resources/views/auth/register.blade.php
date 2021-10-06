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
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" class="lav-logo" />
                </a>
            </x-slot>
        
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}" class="loginForm">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <x-label class="info-label" for="name" :value="__('Name')" />

                    <x-input id="name" placeholder="Name" class="text-title login-input block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4 form-group">
                    <x-label class="info-label" for="email" :value="__('Email')" />

                    <x-input id="email" placeholder="Email Address" class="text-title login-input block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="mt-4 form-group">
                    <x-label class="info-label" for="password" :value="__('Password')" />

                    <x-input id="password" placeholder="Password" class="text-title login-input block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4 form-group">
                    <x-label class="info-label" for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" placeholder="Confirm Password" class="text-title login-input block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
                </div>

                <div class="forgot flex items-center mt-4">
                    <a class="underline text-sm already-link" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button class="reg-button">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
@endsection
