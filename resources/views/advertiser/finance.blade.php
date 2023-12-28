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
        <h1 class="text-xl font-semibold">Finance</h1>
        <main class="p-4 space-y-4">
            <!-- Date Filters -->
            <div class="mb-4 flex space-x-2">
                <button class="text-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">Today</button>
                <button class="text-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">Yesterday</button>
                <button class="text-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">7 days</button>
                <button class="text-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">30 days</button>
                <button class="text-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">This Month</button>
                <button class="text-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">Last Month</button>
            </div>
            <div class="flex items-center space-x-2">
                <!-- Date input 1 with Flatpickr -->
                <input type="text" id="date1" class="pl-10 pr-4 py-2 border rounded" placeholder="Select date" readonly>

                <!-- Date input 2 with Flatpickr -->
                <input type="text" id="date2" class="pl-10 pr-4 py-2 border rounded" placeholder="Select date" readonly>

                <!-- 'Set' Button -->
                <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Set
                </button>
            </div>

            <div class="bg-white p-4 rounded shadow">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b text-left">Date</th>
                            <th class="px-6 py-3 border-b text-left">Description</th>
                            <th class="px-6 py-3 border-b text-left">Comment</th>
                            <th class="px-6 py-3 border-b text-right">Net Balance</th>
                            <th class="px-6 py-3 border-b text-white">Download pdf</th>
                        </tr>
                        <tbody>
                            <td>Dec 23, 2023</td>
                            <td></td>
                            <td>Paying for advertiser campaign</td>
                            <td class="px-6 py-3 border-b text-right">$234</td>
                        </tbody>
                    </thead>
                </table>
            </div>
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