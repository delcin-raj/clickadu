{{-- resources/views/components/header.blade.php --}}
@vite(['resources/css/app.css','resources/js/app.js'])
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
<header class="bg-gray-100">
    <nav class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="/" class="flex items-center">
            <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="h-10"> {{-- Tailwind class for height --}}
            {{-- Include your logo here --}}
        </a>
        <div class="hidden md:flex space-x-4">
            <a href="/advertiser" class="text-gray-700 hover:text-gray-900">Advertiser</a>
            <a href="/publisher" class="text-gray-700 hover:text-gray-900">Publisher</a>
            <a href="/ssp" class="text-gray-700 hover:text-gray-900">SSP</a>
            <a href="/media_kit" class="text-gray-700 hover:text-gray-900">Media Kit</a>
            <a href="/blogs)" class="text-gray-700 hover:text-gray-900">Blog</a>
            <a href="/contacts" class="text-gray-700 hover:text-gray-900">Contacts</a>
            <a href="/faq" class="text-gray-700 hover:text-gray-900">FAQ</a>
        </div>
        <div class="flex items-center space-x-4">
            <div class="relative">
                {{-- Dropdown for language selection --}}
                <select class="block appearance-none bg-gray-100 border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option>EN</option>
                    <option>FR</option>
                    {{-- Add other language options here --}}
                </select>
            </div>
            <a href="/register">
                <button class="bg-orange-500 hover:bg-white hover:text-orange-500 text-white font-bold py-2 px-4 rounded shadow-md hover:shadow-lg transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-orange-300 focus:ring-opacity-50 border border-orange-500 hover:border-orange-600 focus:border-orange-700">
                    Register
                </button>
            </a>


            <div class="relative group">
                <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="bg-orange-500 text-white px-4 py-2 rounded shadow hover:bg-white hover:text-orange-500 focus:outline-none">
                    SIGN IN
                </button>

                <!-- Dropdown Menu -->
                <div id="dropdownHover" class="z-10 hidden mt-1 w-40 rounded-md shadow-lg bg-white">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                        <li>
                            <a href="/publisher" class="block px-4 py-2 text-sm text-orange-500 hover:bg-orange-500 hover:text-white">Publisher</a>
                        </li>
                        <li>
                            <a href="{{ route("advertiser.login") }}" class="block px-4 py-2 text-sm text-orange-500 hover:bg-orange-500 hover:text-white">Advertiser</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="md:hidden">
            {{-- Mobile menu button --}}
            <button @click="open = !open" class="text-gray-500 focus:outline-none">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    {{-- SVG for hamburger icon here --}}
                </svg>
            </button>
        </div>
    </nav>
</header>
