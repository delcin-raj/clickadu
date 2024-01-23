<!DOCTYPE html>
<html lang="en">
<head>
    @stack('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <div class="flex-1">
    <form method="post" action="{{ url('advertiser/campaign') }}">
        @csrf
    <div class="flex">
        <div class="flex-1">
            <h1 class="text-xl font-semibold">Create Campaign</h1>

            <main class="p-4 space-y-4">
                <div class="mb-4 flex space-x-2 justify-between">
                    <button onclick="showDiv('div1')" class="options text-white bg-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">General</button>
                    <button onclick="showDiv('div2')" class="options text-gray-500 bg-gray-200 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">Pricings</button>
                    <button onclick="showDiv('div3')" class="options text-gray-500 bg-gray-200 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">Targetting</button>
                    <button onclick="showDiv('div4')" class="options text-gray-500 bg-gray-200 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">Zones & Additionals</button>
                </div>
                <div id="div1" class="">
                    <div class="container mx-auto p-6 bg-white shadow-md">
                        <!-- Campaign form -->
                        <div class="mb-6">
                            <label for="campaign-name" class="block text-sm font-medium text-gray-500">Campaign Name *</label>
                            <input name="name" type="text" id="campaign-name" class="mt-1 block w-full border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" placeholder="Start typing...">
                            <span class="font-medium text-gray-400"> We recommend: Product - Feed - Country. For example: Offer - Main - WWW.</span>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="block">
                                <label for="ad-format" class="block text-sm font-medium text-gray-500">Ad Format *</label>
                                <select name="format" id="ad-format" class="mt-1 block py-2 px-3 border border-gray-300 bg-white shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option>Banner</option>
                                    <option>Push Notifications</option>
                                    <option>OnClick</option>
                                    <option>Video</option>
                                    <option>Instant Text Message</option>
                                    <option>Skim</option>
                                </select>
                            </div>
                            <div class="block">
                                <label for="ad-format" class="block text-sm font-medium text-gray-500">Size *</label>
                                <select name="size" id="ad-format" class="mt-1 block py-2 px-3 border border-gray-300 bg-white shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option>300*250</option>
                                    <option>300*100</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500">Feed *</label>
                                <div class="mt-2">
                                    <label class="inline-flex items-center">
                                    <input name="feed" type="radio" class="form-radio" name="feed" value="main">
                                    <span class="ml-2">Main</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input name="feed" type="radio" class="form-radio" name="feed" value="adult">
                                    <span class="ml-2">Adult</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input name="feed" type="radio" class="form-radio" name="feed" value="all">
                                    <span class="ml-2">All</span>
                                    </label>
                                </div>
                            </div>
                            <div class="block">
                                <label for="vertical" class="block text-sm font-medium text-gray-500">Vertical</label>
                                <select name="vertical" id="vertical" class="mt-1 block py-2 px-3 border border-gray-300 bg-white shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option>Default</option>
                                    <option>Apk</option>
                                    <option>Betting</option>
                                    <option>Gambling</option>
                                    <option>Datings</option>
                                    <option>Ecommerce</option>
                                </select>
                            </div>

                            <div class="block">
                                <span class="block text-sm font-medium text-gray-700">Creative settings</span>
                                <span class="block text-sm text-gray-500">Select a maximum of 5 files (photo/video/gif)</span>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload" class="relative cursor-pointer bg-cyan-500 rounded-md font-medium text-white hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <span>Upload files *</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only" multiple>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="div2" class="hidden">
                    <div class="mx-auto p-6 bg-white">
                        <!-- Pricing Model Section -->
                        <div class="mb-6">
                            <label class="block text-lg font-semibold mb-2">Pricing Model</label>
                            <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="pricing_model" value="CPM" checked>
                                <span class="ml-2">CPM</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" class="form-radio" name="pricing_model" value="SmartCPM">
                                <span class="ml-2">SmartCPM</span>
                            </label>
                            <label class="inline-flex items-center ml-4">
                                <input type="radio" class="form-radio" name="pricing_model" value="CPC">
                                <span class="ml-2">CPC</span>
                            </label>
                            <p class="text-sm text-gray-600 mt-1">CPM - Cost Per thousand impressions (Miles). <a href="#" class="text-cyan-600 hover:text-cyan-800">More information</a></p>
                            </div>
                        </div>

                        <!-- Countries & Bid Section -->
                        <div class="mb-6">
                            <label class="block text-lg font-semibold mb-2">Countries & Bid</label>
                            <div class="container mx-auto">
                                <div class="p-6 shadow-md">
                                    <h2 class="text-lg font-semibold mb-4">Traffic Inventory</h2>
                                    <div class="flex space-x-4">
                                        <p class="text-sm text-gray-500 mb-4">Use the Traffic Inventory tool to calculate the daily traffic amount available</p>
                                        <button class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded mb-4">Add another rate</button>
                                    </div>
                                    <div class="flex flex-wrap gap-4 mb-4">
                                        <a href="#" class="text-sm text-cyan-600">WW</a>
                                        <a href="#" class="text-sm text-cyan-600">Asia</a>
                                        <a href="#" class="text-sm text-cyan-600">Africa</a>
                                        <a href="#" class="text-sm text-cyan-600">Europe</a>
                                        <a href="#" class="text-sm text-cyan-600">North America</a>
                                        <a href="#" class="text-sm text-cyan-600">South America</a>
                                        <a href="#" class="text-sm text-cyan-600">Oceania</a>
                                        <a href="#" class="text-sm text-cyan-600">GCC</a>
                                    </div>
                                    <div class="flex gap-4 mb-4">
                                    <div class="flex-1">
                                        <label for="countries" class="block text-sm font-medium mb-2">Countries *</label>
                                        <input type="text" id="countries" class="form-input block w-full" placeholder="Start typing...">
                                    </div>
                                    <div class="w-40">
                                        <label for="cpm" class="block text-sm font-medium mb-2">CPM *</label>
                                        <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="text" id="cpm" class="form-input block w-full pl-7" placeholder="0.00">
                                        <div class="absolute inset-y-0 right-0 flex items-center">
                                            <label for="cpm" class="sr-only">CPM</label>
                                            <select id="cpm" class="form-select h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                            <!-- Options here -->
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Frequency Section -->
                        <div class="mb-6">
                            <label class="block text-lg font-semibold mb-2">Frequency</label>
                            <div class="bg-white p-6">
                                <div class="mb-4 text-sm text-gray-500">
                                    <p>'User-based frequency' determines how often the ad will be displayed on a publisher's website per individual user at a given period of time and based on a cookie matching.</p>
                                    <a href="#" class="text-cyan-600 hover:text-cyan-800">More information</a>
                                </div>
                                <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div>
                                    <label for="frequency-impression" class="block text-sm font-medium text-gray-700">Frequency (Impression) *</label>
                                    <input type="number" id="frequency-impression" name="frequency_impression" class="mt-1 form-input block w-full" placeholder="3">
                                    </div>
                                    <div>
                                    <label for="capping-impression" class="block text-sm font-medium text-gray-700">Capping (Impression) *</label>
                                    <input type="number" id="capping-impression" name="capping_impression" class="mt-1 form-input block w-full" placeholder="24">
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div>
                                    <label for="frequency-click" class="block text-sm font-medium text-gray-700">Frequency (Click) *</label>
                                    <input type="number" id="frequency-click" name="frequency_click" class="mt-1 form-input block w-full" placeholder="3">
                                    </div>
                                    <div>
                                    <label for="capping-click" class="block text-sm font-medium text-gray-700">Capping (Click) *</label>
                                    <input type="number" id="capping-click" name="capping_click" class="mt-1 form-input block w-full" placeholder="24">
                                    </div>
                                </div>
                                <!-- Checkbox for No capping -->
                                <div class="flex items-center mb-4">
                                    <input id="no-capping" name="no_capping" type="checkbox" class="form-checkbox">
                                    <label for="no-capping" class="ml-2 block text-sm text-gray-900">No capping</label>
                                </div>
                            </div>
                        </div>

                        <!-- Advertising Budget Section -->
                        <div class="mb-6">
                            <label class="block text-lg font-semibold mb-2">Advertising Budget (USD)</label>
                            <div class="container mx-auto p-6">
                                <div class="flex justify-between items-center mb-6">
                                    <div class="w-1/2 mr-2">
                                    <label class="block text-sm font-medium text-gray-700">Daily Campaign Budget</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="text" class="form-input block w-full pl-7 pr-12" placeholder="0.00">
                                    </div>
                                    </div>
                                    <div class="w-1/2 ml-2">
                                    <label class="block text-sm font-medium text-gray-700">Total Campaign Budget</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="text" class="form-input block w-full pl-7 pr-12" placeholder="0.00">
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="div3" class="hidden">
                    <div class="mx-auto p-6 bg-white">
                        <!-- Advanced Settings Section -->
                        <h2 class="text-xl font-semibold mb-4">Advanced Settings</h2>

                        <!-- Connection Type -->
                        <div class="mb-4 flex space-x-6">
                            <div class="space-y-1">
                                <label class="block text-sm font-medium text-gray-700">Connection</label>
                                <label class="block text-sm font-medium text-gray-700">Type</label>
                            </div>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio text-blue-600" name="connectionType" value="all" checked>
                                        <span class="ml-2">All</span>
                                    </label>
                                    <label class="inline-flex items-center ml-4">
                                        <input type="radio" class="form-radio text-blue-600" name="connectionType" value="3g">
                                        <span class="ml-2">3G</span>
                                    </label>
                                    <label class="inline-flex items-center ml-4">
                                        <input type="radio" class="form-radio text-blue-600" name="connectionType" value="wifi">
                                        <span class="ml-2">Wi-Fi</span>
                                    </label>
                                </div>

                            </div>
                        </div>

                        <!-- Exclusions Sections -->
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Exclude</div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    </label>
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">OS Types</div>
                                    <input type="text" placeholder="Start Typing" class="border rounded py-2 px-4">
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Exclude</div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    </label>
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">OS's</div>
                                    <input type="text" placeholder="Start Typing" class="border rounded py-2 px-4">
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Exclude</div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    </label>
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">OS versions</div>
                                    <input type="text" placeholder="Start Typing" class="border rounded py-2 px-4">
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Exclude</div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    </label>
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Device Types</div>
                                    <input type="text" placeholder="Start Typing" class="border rounded py-2 px-4">
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Exclude</div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    </label>
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Device Vendors</div>
                                    <input type="text" placeholder="Start Typing" class="border rounded py-2 px-4">
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Exclude</div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    </label>
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Models</div>
                                    <input type="text" placeholder="Start Typing" class="border rounded py-2 px-4">
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Exclude</div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    </label>
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Mobile ISP</div>
                                    <input type="text" placeholder="Start Typing" class="border rounded py-2 px-4">
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Exclude</div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    </label>
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Browsers</div>
                                    <input type="text" placeholder="Start Typing" class="border rounded py-2 px-4">
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Exclude</div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    </label>
                                </div>
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">Browser Language</div>
                                    <input type="text" placeholder="Start Typing" class="border rounded py-2 px-4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto p-6 bg-white">
                        <h2 class="text-xl font-semibold mb-4">States & Cities</h2>
                        <div class="flex items-center space-x-4">
                            <div class="space-y-2">
                                <div class="text-gray-500 font-medium">Exclude</div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                </label>
                            </div>
                            <div class="space-y-2">
                                <div class="text-gray-500 font-medium">States</div>
                                <input type="text" placeholder="Start Typing" class="border rounded py-2 px-4">
                            </div>
                            <div class="space-y-2">
                                <div class="text-gray-500 font-medium">Exclude</div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                </label>
                            </div>
                            <div class="space-y-2">
                                <div class="text-gray-500 font-medium">Cities</div>
                                <input type="text" placeholder="Start Typing" class="border rounded py-2 px-4">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="div4" class="hidden">
                    <div class="p-6 bg-white">
                        <h2 class="text-xl font-semibold mb-4">States & Cities</h2>
                        <div class="flex items-center space-x-4">
                            <div class="space-y-2 w-1/12">
                                <div class="text-gray-500 font-medium">Exclude</div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                </label>
                            </div>
                            <div class="flex-1">
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">States</div>
                                    <input type="text" placeholder="Zone ID's separated by comma" class="border w-256 rounded py-2 px-4">
                                </div>
                            </div>
                        </div>
                        <h2 class="text-xl font-semibold mb-4">IP Limitation</h2>
                        <div class="flex items-center space-x-4">
                            <div class="space-y-2 w-1/12">
                                <div class="text-gray-500 font-medium">Exclude</div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                </label>
                            </div>
                            <div class="flex-1">
                                <div class="space-y-2">
                                    <div class="text-gray-500 font-medium">IPs</div>
                                    <input type="text" placeholder="IP's separated by comma" class="border w-256 rounded py-2 px-4">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Navigation Buttons -->
                <div class="flex justify-between">
                    <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-cyan-600 hover:bg-cyan-700">
                    Previous step
                    </button>
                    <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-cyan-600 hover:bg-cyan-700">
                    Next step
                    </button>
                </div>
            </main>
        </div>
        <div class="shadow-md w-1/4 p-4">
            <h2 class="font-bold text-lg mb-4">Campaign Summary</h2>
            <div class="mb-4">
                <div class="font-medium">General</div>
                <div class="text-sm">Ad Format: banner</div>
            </div>
            <div class="mb-4">
                <div class="font-medium">Pricings</div>
                <div class="text-sm">Pricing Model: CPM</div>
                <div class="text-sm">Frequency Capping (Impression): 3/24</div>
                <div class="text-sm">Frequency Capping (Click): 3/24</div>
            </div>
            <div class="mb-4">
                <div class="font-medium">Targetings</div>
                <div class="text-sm">Connection Type: All</div>
            </div>
            <div class="mb-4">
                <div class="font-medium">Zones</div>
                <div class="text-sm">Schedule: No</div>
            </div>
            <div class="mb-4">
                <label class="flex items-center text-sm">
                    <input type="checkbox" class="form-checkbox">
                    <span class="ml-2">I declare and guarantee that my campaign meets the Quality Guidelines.</span>
                </label>
            </div>
            <div class="flex justify-between">
                <button class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded">Save as Draft</button>
                <button class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded" type="submit">Start Campaign</button>
            </div>
        </div>
    </div>
    </form>
    </div>

    <script>
        const buttons = document.querySelectorAll('.options');

        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                buttons.forEach((btn) => {
                    if (btn != button) {
                        btn.classList.remove('bg-cyan-500');
                        btn.classList.remove('text-white');
                        btn.classList.add('bg-gray-200');
                        btn.classList.add('text-gray-500');
                    } else {
                        btn.classList.remove('bg-gray-200');
                        btn.classList.remove('text-gray-500');
                        button.classList.add('bg-cyan-500');
                        btn.classList.add('text-white');
                    }
                });
            });
        });

        function showDiv(divId) {
            // Hide all divs
            document.querySelectorAll('div[id^="div"]').forEach(div => div.classList.add('hidden'));
            // Show the selected div
            document.getElementById(divId).classList.remove('hidden');
        }
    </script>
</body>
</html>