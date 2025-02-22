@extends('layouts.app')

@section('content')
@if(!Auth::check())
    <!-- Redirect Non-Logged-in Users to Login Page -->
    <script>window.location.href = "{{ route('login') }}";</script>
@else
    <div class="profile-container">
        <h2>Profile</h2>
        <p>Welcome, {{ Auth::user()->username }}!</p>
        
        <!-- Profile Details -->
        <div class="profile-info">
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Member Since:</strong> {{ Auth::user()->created_at->format('F d, Y') }}</p>
        </div>

        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Log Out</button>
        </form>
    </div>
@endif
@endsection
