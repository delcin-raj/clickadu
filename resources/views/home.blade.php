{{-- resources/views/layouts/app.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    @stack('styles')
</head>
<body>

    @include('includes.header')

    <div class="relative">
        <!-- Background image -->
        <img src="{{ asset('images/home/bg_top.jpg') }}" alt="Background" class="w-full h-auto">

        <!-- Overlayed bird image, positioned to center left -->
        <img src="{{ asset('images/home/bird.png') }}" alt="Bird" class="absolute left-1/4 w-100 h-80 transform -translate-x-1/2 -translate-y-1/2 top-1/2">

        <!-- Text on center right -->
        <div class="absolute right-1/4 transform translate-x-1/2 -translate-y-1/2 top-1/2 w-1/3">
            <h1 class="text-4xl font-bold mb-4">Premium Ad Network</h1>
                <p class="text-lg">Digital advertising network for web and mobile channels with excellent expertise, unique capabilities, and experience in revenue maximization for publishers and advertisers.
                </p>

            <div class="flex justify-center space-x-10 p-4 shadow rounded-lg">
                <!-- Daily Impressions Statistic -->
                <div class="text-center">
                    <p class="text-sm text-gray-500 font-medium">Daily Impressions</p>
                    <p class="text-3xl text-blue-600 font-semibold">5.8B+</p>
                    <div class="w-20 mx-auto mt-2">
                        <!-- Include your wavy line SVG or image here -->
                        <img src="{{ asset('images/home/blue_squiggly.png') }}" alt="Wavy Line">
                    </div>
                </div>

                <!-- Daily Conversions Statistic -->
                <div class="text-center">
                    <p class="text-sm text-gray-500 font-medium">Daily Conversions</p>
                    <p class="text-3xl text-orange-500 font-semibold">3.6M</p>
                    <div class="w-20 mx-auto mt-2">
                        <!-- Include your wavy line SVG or image here -->
                        <img src="{{ asset('images/home/blue_squiggly.png') }}" alt="Wavy Line">
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
