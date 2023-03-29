@extends('layouts/login')
@section('title', 'Order List')
@section('content')

    <div class="title"><span>Reset Password</span></div>
    <div class="authen-status">
        <x-auth-validation-errors class="error-status" :errors="$errors" />
    </div>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="row">
            <i class="fas fa-envelope"></i>
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus readonly />
        </div>

        <div class="row">
            <i class="fa fa-key"></i>
            <input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('email', $request->email)" placeholder="New password" required autofocus />
        </div>
        <div class="row">
            <i class="fa fa-key"></i>
            <input id="password" class="block mt-1 w-full" type="password" name="password_confirmation" required
                autocomplete="current-password" placeholder="Verify password" />
        </div>
        <div class="row button">
            <input type="submit" value="Reset password">
        </div>
    </form>
    </div>
@endsection
