@extends('master')

@section('title', 'House Of Animals')

@section('content')
<guest-layout>
    <auth-card>
    
    <div class="container">
        <!-- Validation Errors -->
        <auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group"> 
                <label for="name" :value="__('Name')">Name</label> 

                <input id="name" placeholder="Enter Your Name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" :value="__('Email')">Email</label>

                <input id="email" placeholder="Enter Your Email" class="form-control" type="email" name="email" :value="old('email')" required  />
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" :value="__('Password')">Password</label>

                <input id="password" placeholder="Enter Your Password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation" :value="__('Confirm Password')">Password Again</label>

                <input id="password_confirmation" placeholder="Enter Password Again" class="form-control"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button class="sign-up ml-4">  {{ __('Register') }}</button>
            </div>
        </form>
    </div> <!--container cls-->
    <auth-card>
    </guest-layout>
    @endsection
