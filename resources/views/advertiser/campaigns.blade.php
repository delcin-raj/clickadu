<!DOCTYPE html>
<html lang="en">
<head>
    @stack('styles')
</head>
<body>
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    @include('advertiser.header')

    <div class="bg-gray-100 min-h-screen flex">
    <!-- Sidebar -->
    @include('includes.sidebar') {{-- Include your sidebar here --}}

    <!-- Main Content -->
    <div class="flex-1">
        <h1 class="text-xl font-semibold">Campaigns</h1>
        <div class="flex justify-between items-center space-x-4 bg-white p-4 shadow">
            <div>
                <div class="space-y-4">
                    <div class="flex">
                        <button class="bg-gray-300">
                            <img src="{{asset('images/icons/reload.svg')}}" class="w-8 h-8 text-gray-500" alt="">
                        </button>
                        <!-- ID/Name Filter -->
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <!-- Your SVG path for an icon here -->
                            </svg>
                            <input type="text" placeholder="ID/Name" class="border rounded py-2 px-4">
                        </div>
                    </div>
                    <div>
                        <button class="bg-gray-300">
                            <img src="{{asset('images/icons/play.svg')}}" class="w-8 h-8 text-gray-500" alt="">
                        </button>
                        <button class="bg-gray-300">
                            <img src="{{asset('images/icons/stop.svg')}}" class="w-8 h-8 text-gray-500" alt="">
                        </button>
                        <button class="bg-gray-300">
                            <div class="flex">
                                <img src="{{asset('images/icons/archive.svg')}}" class="w-8 h-8 text-gray-500" alt="">
                                <span>Archive</span>
                            </div>
                        </button>

                    </div>

                </div>
                <button class="bg-gray-300">Set</button>

            </div>
            <div class="flex">
                <!-- Dropdown Filters -->
                <div class="flex items-center space-x-2">
                    <div>
                        <label for="status" class="sr-only">Status</label>
                        <select id="status" class="border rounded py-2 px-4 cursor-pointer">
                            <option>All</option>
                            <!-- Other options here -->
                        </select>
                    </div>

                    <!-- Add more dropdowns for 'Origin', 'Archived', 'Ad Format', 'Price Model' -->

                </div>

                <!-- Toggle Switch for 'Archived' -->
                <div>
                    <input type="checkbox" id="archived" class="sr-only">
                    <label for="archived" class="flex items-center cursor-pointer">
                        <div class="relative">
                            <div class="block bg-gray-600 w-10 h-6 rounded-full"></div>
                            <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"></div>
                        </div>
                        <div class="ml-3 text-gray-700 font-medium">Archived</div>
                    </label>
                </div>

                <!-- Date Range Picker -->
                <div class="flex items-center space-x-2">
                    <input type="text" class="flatpickr border rounded py-2 px-4" placeholder="Select date range">
                    <button class="bg-blue-500 text-white px-4 rounded">Today</button>
                    <button class="bg-gray-200 text-gray-700 px-4 rounded">Columns</button>
                </div>
            </div>
        </div>

        <main class="p-4 space-y-4">
        </main>
    </div>
    </div>

    @include("advertiser.footer")
    <script>
        flatpickr("#date1", {});
        flatpickr("#date2", {});
    </script>
</body>
</html>