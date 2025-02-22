@extends('layouts.app')

@section('content')
<div class="signup-container">
    <!-- Header Section -->
    <div class="header">
        <img src="<!-- LOGO IMAGE HERE -->" alt="Logo" class="logo">
    </div>

    <!-- Form Section -->
    <div class="form-container">
        <h2>Create an Account</h2>
        <p>Join us today!</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Username Input -->
            <label for="username">Username</label>
            <input type="text" name="username" required>

            <!-- Email Input -->
            <label for="email">Email</label>
            <input type="email" name="email" required>

            <!-- Password Input -->
            <label for="password">Password</label>
            <input type="password" name="password" required>

            <!-- Sign Up Button -->
            <button type="submit">Sign Up</button>
        </form>

        <!-- Login Link -->
        <p>Already have an account? <a href="{{ route('login') }}">Log In</a></p>
    </div>
</div>
@endsection
