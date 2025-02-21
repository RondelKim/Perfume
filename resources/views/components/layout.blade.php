<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <script src="https://cdn.tailwindcss.com/"></script>
</head>
<body class="h-full bg-gray-100">

<div class="min-h-full">
    <!-- Navigation Bar (White) -->
    <nav class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <!-- Logo -->
                    <div class="shrink-0">
                        <img class="h-10 w-auto" src="https://cdn.discordapp.com/attachments/1342320948082245645/1342321021172322347/logo_black.png" alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/home" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-200">Home</a>
                            <a href="/newarrival" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-200">New Arrival</a>
                            <a href="/onsale" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-200">On Sale</a>
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
                        <!-- Cart -->
                        <a href="#" title="Cart">
                            <img src="https://cdn-icons-png.flaticon.com/128/3514/3514491.png" alt="Cart" class="w-6 h-6">
                        </a>
                        <!-- Chat AI -->
                        <a href="#" title="Chat AI">
                            <img src="https://cdn-icons-png.flaticon.com/128/15511/15511514.png" alt="Chat AI" class="w-6 h-6">
                        </a>
                        <!-- Profile -->
                        <a href="#" title="Profile">
                            <img src="https://cdn-icons-png.flaticon.com/128/3033/3033143.png" alt="Profile" class="w-6 h-6">
                        </a>
                        <!-- Settings -->
                        <a href="#" title="Settings">
                            <img src="https://cdn.discordapp.com/attachments/1342320948082245645/1342391337240231966/settings.png" alt="Settings" class="w-6 h-6">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Gray Header -->
    <header class="bg-gray-200 shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-black">{{$heading}}</h1>
        </div>
    </header>
  
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{$slot}}
        </div>
    </main>

    <!-- All Products Section -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center">All Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
                <!-- Example Product -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Product" class="w-full h-40 object-cover rounded-md">
                    <h3 class="text-lg font-semibold mt-2">Perfume Name</h3>
                    <p class="text-gray-600">$49.99</p>
                    <button class="mt-2 bg-black text-white px-4 py-2 rounded w-full">Add to Cart</button>
                </div>

                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Product" class="w-full h-40 object-cover rounded-md">
                    <h3 class="text-lg font-semibold mt-2">Perfume Name</h3>
                    <p class="text-gray-600">$59.99</p>
                    <button class="mt-2 bg-black text-white px-4 py-2 rounded w-full">Add to Cart</button>
                </div>

                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Product" class="w-full h-40 object-cover rounded-md">
                    <h3 class="text-lg font-semibold mt-2">Perfume Name</h3>
                    <p class="text-gray-600">$39.99</p>
                    <button class="mt-2 bg-black text-white px-4 py-2 rounded w-full">Add to Cart</button>
                </div>

                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Product" class="w-full h-40 object-cover rounded-md">
                    <h3 class="text-lg font-semibold mt-2">Perfume Name</h3>
                    <p class="text-gray-600">$69.99</p>
                    <button class="mt-2 bg-black text-white px-4 py-2 rounded w-full">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

</div>

</body>
</html>
