<!DOCTYPE html>
<html lang="en">
<head>
    @stack('styles')
</head>
<body>

    @include('includes.header')
    <div class="relative">
        <img src="{{ asset('images/register/reg_bg.jpg') }}" alt="background" class="w-full h-auto">
        <div class="absolute transform translate-x-1/2 -translate-y-1/2 top-1/2 w-1/3">
            <h1 class="text-4xl font-bold mb-4">CREATE AN ACCOUNT</h1>
        </div>
    </div>
</body>
</html>