<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" 
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
        <script src="https://cdn.tailwindcss.com/"></script>
    </head>
    <body>
        <!--
  This example requires updating your template:

  
<html class="h-full bg-gray-100">
  <body class="h-full">

-->
<div class="min-h-full">
  <nav class="bg-white-400">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="https://cdn.discordapp.com/attachments/1342320948082245645/1342321021172322347/logo_black.png?ex=67b9de1e&is=67b88c9e&hm=9f6a1672f6ce5bad3917132597c3e0785747ce4ec058253214f5aac7887cf353&" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-nav-link href="/phome" :active="request()->is('phome')">Home</x-nav-link>
              <x-nav-link href="/pnewarrival" :active="request()->is('pnewarrival')">New Arrival</x-nav-link>
              <x-nav-link href="/ponsale" :active="request()->is('ponsale')">On Sale</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
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
    <x-nav-icon href="/profile" title="Profile" icon="https://cdn-icons-png.flaticon.com/128/3033/3033143.png">Profile</x-nav-icon>
    @if(Auth::check())
    <a href="{{ route('profile') }}" class="px-4 py-2 bg-gray-800 text-white rounded-md">Profile</a>
@else
    <a href="{{ route('login-signup') }}" class="px-4 py-2 bg-gray-800 text-white rounded-md">Profile</a>
@endif

    <x-nav-icon href="/settings" title="Settings" icon="https://cdn-icons-png.flaticon.com/128/2099/2099058.png">Settings</x-nav-icon>
</div>



            </div>
        </div>
    </nav>
        </div>
        </div>
      </div>
    </div>
  </nav>

  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
    </div>
  </header>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{$slot}}
    </div>
  </main>
</div>
</body>
</html>