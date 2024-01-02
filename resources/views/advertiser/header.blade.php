@vite(['resources/css/app.css','resources/js/app.js'])
<header class="bg-white p-4 flex justify-between items-center border-b">
    <div class="flex">
        <div class="flex">
            <!-- First SVG -->
            <img src="{{ asset('images/bird.svg') }}" alt="First SVG" class="w-24 h-24">

            <!-- Second SVG -->
            <img src="{{ asset('images/advertiser_text.svg') }}" alt="Second SVG" class="w-24 h-24">
        </div>
        <span class="text-2xl font-bold text-center" id="timeTicker">12:00:00</span>
    </div>
    <div>
        <a href="{{route('advertiser.create_campaign')}}">
            <button class="bg-cyan-500 text-white px-4 py-2 rounded hover:bg-cyan-600 transition-colors">Create Campaign</button>
        </a>
        <span class="text-gray-600 mr-4">Balance: $238.76</span>
    </div>
</header>