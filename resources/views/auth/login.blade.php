@extends('master')

@section('title', 'House Of Animals')

@section('content')

    <div class="container">
        <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" :value="__('Email')" />

                <input id="email" class="block mt-1 w-full" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" :value="__('Password')" />

                <input id="password" class="block mt-1 w-full" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="sign-up"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> 
                {{ __('Log in') }}</a></button>
            </div>
        </form>
    </div> <!--container cls-->