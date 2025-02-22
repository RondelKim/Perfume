@extends('layouts.app')

@section('content')
<div class="login-container">
    <!-- Header Section -->
    <div class="header">
        <img src="<!-- LOGO IMAGE HERE -->" alt="Logo" class="logo">
    </div>

    <!-- Form Section -->
    <div class="form-container">
        <h2>Welcome Back</h2>
        <p>Please enter your details.</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Username Input -->
            <label for="username">Username</label>
            <input type="text" name="username" required>

            <!-- Password Input -->
            <label for="password">Password</label>
            <input type="password" name="password" required>

            <!-- Forgot Password -->
            <a href="{{ route('password.request') }}">Forgot Password?</a>

            <!-- Login Button -->
            <button type="submit">Log In</button>
        </form>

        <!-- Sign Up Link -->
        <p>Don’t have an account? <a href="{{ route('signup') }}">Sign Up</a></p>
    </div>
</div>
@endsection
