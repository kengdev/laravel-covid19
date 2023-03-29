@extends('layouts/login')
@section('title', 'Order List')
@section('content')

    <div class="title"><span>Reset password</span></div>
    <div class="authen-status">
        <x-auth-session-status class="session-status" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="error-status" :errors="$errors" />
    </div>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="row">
            <i class="fas fa-envelope"></i>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="Email" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <div class="row button">
                <input type="submit" value="Login">
            </div>
        </div>
    </form>
@endsection
