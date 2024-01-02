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
            <div class="flex space-x-4">
                <div class="space-y-4">
                    <div class="flex space-x-2">
                        <button class="bg-gray-100 text-gray-500 rounded-lg px-4 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </button>
                        <!-- ID/Name Filter -->
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <!-- Your SVG path for an icon here -->
                            </svg>
                            <input type="text" placeholder="ID/Name" class="border rounded py-2 px-4">
                        </div>
                        <button class="bg-gray-100 text-gray-500 rounded-full px-4 py-2">Set</button>
                    </div>
                    <div>
                        <button class="bg-gray-100 text-gray-500 rounded-lg px-4 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button class="bg-gray-100 text-gray-500 rounded-lg px-4 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M4.5 7.5a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-9a3 3 0 0 1-3-3v-9Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button class="bg-gray-100 text-gray-500 rounded-lg px-4 py-2">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                                    <path fill-rule="evenodd" d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.163 3.75A.75.75 0 0 1 10 12h4a.75.75 0 0 1 0 1.5h-4a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                                </svg>
                                <span>Archive</span>
                            </div>
                        </button>

                    </div>

                </div>

            </div>
            <div class="space-y-2">
                <div class="flex space-x-2">
                    <!-- Dropdown Filters -->
                    <div class="items-center space-x-2">
                        <div>
                            <span class="text-gray-500">Status</span>
                            <div>
                                <label for="status" class="sr-only">Status</label>
                                <select id="status" class="border rounded py-2 px-4 cursor-pointer">
                                    <option>All</option>
                                    <option>Draft</option>
                                    <option>Moderation</option>
                                    <option>Rejected</option>
                                    <option>Testing</option>
                                    <option>Working</option>
                                    <option>Paused</option>
                                    <option>Stopped</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="items-center space-x-2">
                        <div>
                            <span class="text-gray-500">Origin</span>
                            <div>
                                <label for="origin" class="sr-only">Origin</label>
                                <select id="origin" class="border rounded py-2 px-4 cursor-pointer">
                                    <option>All</option>
                                    <option>Managed</option>
                                    <option>SSP</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Toggle Switch for 'Archived' -->
                    <div class="space-y-2">
                        <div class="text-gray-500 font-medium">Archived</div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 dark:peer-focus:ring-cyan-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                        </label>
                    </div>
                    <div class="items-center space-x-2">
                        <div>
                            <span class="text-gray-500">Ad Format</span>
                            <div>
                                <label for="ad-format" class="sr-only">Ad Format</label>
                                <select id="ad-format" class="border rounded py-2 px-4 cursor-pointer">
                                    <option>All</option>
                                    <option>OnClick</option>
                                    <option>Video</option>
                                    <option>Instant Text Message</option>
                                    <option>Push Notification</option>
                                    <option>Skim</option>
                                    <option>Banner</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="items-center space-x-2">
                        <div>
                            <span class="text-gray-500">Price Model</span>
                            <div>
                                <label for="price-mode" class="sr-only">Price Model</label>
                                <select id="price-mode" class="border rounded py-2 px-4 cursor-pointer">
                                    <option>All</option>
                                    <option>CPM</option>
                                    <option>CPC</option>
                                    <option>CPA</option>
                                    <option>SCPM</option>
                                    <option>SCPA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center space-x-2">
                    <input type="text" id="date1" class="pl-10 pr-4 py-2 border rounded" placeholder="Select date" readonly>
                    <button class="border text-gray-500 rounded-lg px-4 py-2 flex space-x-2 hover:text-cyan-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                        </svg>
                        Columns
                    </button>
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