<!DOCTYPE html>
<html lang="en">
<head>
    @stack('styles')
</head>
<body>

    @include('includes.header')
    <div class="relative">
        <img src="{{ asset('images/register/reg_bg.jpg') }}" alt="background" class="w-full h-auto">
        <div class="absolute transform translate-x-1/2 -translate-y-1/2 top-1/2 w-1/2 mx-auto">
            <h1 class="text-4xl font-bold mb-4 text-center">CREATE AN ACCOUNT</h1>
            <p class="text-center">Register an account in the Clickadu Self-Serve Platform in order to engage or monetize your audience.
To know more about Clickadu please examine our Media Kit.</p>
        </div>
    </div>
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-center text-2xl font-bold mb-6">Choose your Account Type:</h2>
        
        <div class="flex justify-center space-x-4">
            <!-- Advertiser Card -->
            <div class="flex flex-col items-center p-4 border rounded-lg">
                <div class="p-2 rounded-full mb-4">
                    <img src="{{ asset('images/register/magnet.png') }}" alt="magnet">
                </div>
                <h3 class="text-lg font-semibold">I'm an Advertiser</h3>
                <p class="text-gray-600 text-center mb-4">and I want to promote my product or CPA offer</p>
                <button class="bg-orange-500 hover:bg-white hover:text-orange-500 text-white font-bold py-2 px-4 rounded shadow-md hover:shadow-lg transition duration-300 ease-in-out focus:outline-none">
                    REGISTER
                </button>
            </div>

            <!-- Publisher Card -->
            <div class="flex flex-col items-center p-4 border rounded-lg">
                <div class=p-2 rounded-full mb-4">
                    <img src="{{ asset('images/register/dollar.png') }}" alt="dollar">
                </div>
                <h3 class="text-lg font-semibold">I'm a Publisher</h3>
                <p class="text-gray-600 text-center mb-4">and I want to monetize my website audience</p>
                <button class="bg-orange-500 hover:bg-white hover:text-orange-500 text-white font-bold py-2 px-4 rounded shadow-md hover:shadow-lg transition duration-300 ease-in-out focus:outline-none">
                    REGISTER
                </button>
            </div>
        </div>
    </div>

</body>
</html>