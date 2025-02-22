<!-- Alpine.js for interactivity -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div x-data="{ open: false }">
    <!-- Trigger Button -->
    <button @click="open = true" class="px-4 py-2 bg-gray-800 text-white rounded-md">
        Login / Sign Up
    </button>

    <!-- Modal -->
    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50" 
         @keydown.window.escape="open = false" 
         x-cloak>
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-lg font-semibold mb-4">Login / Sign Up</h2>

            <!-- Login Form -->
            <form>
                <input type="text" placeholder="Username" class="border p-2 w-full mb-2">
                <input type="password" placeholder="Password" class="border p-2 w-full mb-2">
                <button class="bg-blue-500 text-white px-4 py-2 w-full">Login</button>
            </form>

            <!-- Close Modal Button -->
            <button @click="open = false" class="mt-2 text-gray-600">Close</button>
        </div>
    </div>
</div>
