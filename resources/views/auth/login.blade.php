@extends('layouts/login')
@section('title', 'Order List')
@section('content')

    <div class="title"><span>Login Form</span></div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
            <i class="fas fa-user"></i>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                placeholder="Email" required autofocus />
        </div>
        <div class="row">
            <i class="fas fa-lock"></i>
            <input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" placeholder="Password" />
        </div>
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        </br>
        <div class="row button">
            <input type="submit" value="Login">
        </div>
        <div class="signup-link"><a href="forgot-password">Forget password?</a></div>
    </form>
    </div>
@endsection
