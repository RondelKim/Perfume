<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    <script src="https://cdn.tailwindcss.com/"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; } /* Ensures hidden elements before Alpine.js loads */
    </style>
</head>
<body>
<div class="min-h-full" x-data="{ showLogin: false }">
    <nav class="bg-white-400">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img class="size-8" src="https://cdn.discordapp.com/attachments/1342320948082245645/1342321021172322347/logo_black.png?ex=67ba86de&is=67b9355e&hm=68780d535ba2c37d8696cef810fb1c456419a8112412feac13353f295e7fe092&" alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <x-nav-link href="/home" :active="request()->is('home')">Home</x-nav-link>
                            <x-nav-link href="/newarrival" :active="request()->is('newarrival')">New Arrival</x-nav-link>
                            <x-nav-link href="/onsale" :active="request()->is('onsale')">On Sale</x-nav-link>
                        </div>
                    </div>
                </div>
                
                <!-- Search Bar -->
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Search for perfumes" class="border px-3 py-1 rounded text-black">
                    <button class="bg-black text-white px-4 py-1 rounded">Search</button>
                </div>

                <!-- Icons Section -->
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6 space-x-4">
                        <x-nav-icon href="/cart" title="View Cart" icon="https://cdn-icons-png.flaticon.com/128/3514/3514491.png">Cart</x-nav-icon>
                        <x-nav-icon href="/chat-ai" title="Chat AI" icon="https://cdn-icons-png.flaticon.com/128/15511/15511514.png">Chat AI</x-nav-icon>
                        
                        @if(Auth::check())
                            <!-- If user is logged in, show profile and settings links -->
                            <x-nav-icon href="/profile" title="Profile" icon="https://cdn-icons-png.flaticon.com/128/3033/3033143.png">Profile</x-nav-icon>
                            <x-nav-icon href="/settings" title="Settings" icon="https://cdn-icons-png.flaticon.com/128/2099/2099058.png">Settings</x-nav-icon>
                            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                                @csrf
                                <button type="submit" class="text-red-500">Logout</button>
                            </form>
                        @else
                            <!-- If user is NOT logged in, clicking profile/settings will open login modal -->
                            <button @click="showLogin = true">
                                <img src="https://cdn-icons-png.flaticon.com/128/3033/3033143.png" class="size-8" alt="Profile">
                            </button>
                            <button @click="showLogin = true">
                                <img src="https://cdn-icons-png.flaticon.com/128/2099/2099058.png" class="size-8" alt="Settings">
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">@yield('heading')</h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>

    <!-- Login Modal (FIXED FLASH ISSUE) -->
    <div x-cloak x-show="showLogin" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-semibold mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label class="block mb-2">Email:</label>
                <input type="email" name="email" required class="w-full px-3 py-2 border rounded mb-3">
                
                <label class="block mb-2">Password:</label>
                <input type="password" name="password" required class="w-full px-3 py-2 border rounded mb-3">

                <button type="submit" class="bg-black text-white w-full py-2 rounded">Login</button>
            </form>
            
            <p class="mt-3 text-center">
                No account? <a href="{{ route('signup') }}" class="text-blue-500">Sign Up</a>
            </p>
            <button @click="showLogin = false" class="mt-4 block mx-auto text-red-500">Close</button>
        </div>
    </div>
</div>
</body>
</html>
