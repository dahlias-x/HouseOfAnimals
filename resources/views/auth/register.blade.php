@extends('master')

@section('title', 'House Of Animals')

@section('content')

<guest-layout>
    <div class="container">
        <!-- Validation Errors -->
        <auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div class="form-group"> 
                <label for="name" :value="__('Name')">Name</label> 

                <input id="name" class="block mt-1 w-full" class="form-control" type="text" name="name" :value="old('name')" required autofocus placeholder="Enter Your Name" />
                
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" :value="__('Email')">Email</label>

                <input id="email" class="block mt-1 w-full" class="form-control" type="email" name="email" :value="old('email')" required  placeholder="Enter Your Email"/>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" :value="__('Password')">Password</label>

                <input id="password" class="block mt-1 w-full" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation" :value="__('Confirm Password')">Password Again</label>

                <input id="password_confirmation" class="block mt-1 w-full" class="form-control"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="sign-up" class="ml-4">  {{ __('Register') }}</button>
            </div>
        </form>
    </div> <!--container cls-->
    </guest-layout>
    @endsection
