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
        <!-- Dashboard Header -->
        <h1 class="text-xl font-semibold">Dashboard</h1>

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
                <button type="button" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded">
                    Set
                </button>
            </div>
            <div class="flex space-x-0">
                <button class="options px-6 py-3 border-b bg-cyan-700 text-white hover:bg-cyan-500 hover:border">Campaign</button>
                <button class="options px-6 py-3 border-b bg-cyan-600 text-white hover:bg-cyan-500 hover:border">Creatives</button>
                <button class="options px-6 py-3 border-b bg-cyan-600 text-white hover:bg-cyan-500 hover:border">Zone</button>
                <button class="options px-6 py-3 border-b bg-cyan-600 text-white hover:bg-cyan-500 hover:border">Country</button>
                <button class="options px-6 py-3 border-b bg-cyan-600 text-white hover:bg-cyan-500 hover:border">Date</button>
            </div>

            <!-- Table -->
            <div class="bg-white p-4 rounded shadow">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b text-right">Impressions</th>
                            <th class="px-6 py-3 border-b text-right">Clicks</th>
                            <th class="px-6 py-3 border-b text-right">Conversions</th>
                            <th class="px-6 py-3 border-b text-right">CTR</th>
                            <th class="px-6 py-3 border-b text-right">CR</th>
                            <th class="px-6 py-3 border-b text-right">CPM</th>
                            <th class="px-6 py-3 border-b text-right">Cost</th>
                            <th class="px-6 py-3 border-b text-right">CPA</th>
                            <th class="px-6 py-3 border-b text-right">CPC</th>
                            <th class="px-6 py-3 border-b text-right">
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                Show Stats
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td class="px-6 py-4 border-b text-right">{{ $item->impressions }}</td>
                            <td class="px-6 py-4 border-b text-right">{{ $item->clicks }}</td>
                            <td class="px-6 py-4 border-b text-right">{{ $item->conversions }}</td>
                            <td class="px-6 py-4 border-b text-right">{{ $item->ctr }}</td>
                            <td class="px-6 py-4 border-b text-right">{{ $item->cr }}</td>
                            <td class="px-6 py-4 border-b text-right">{{ $item->cpm }}</td>
                            <td class="px-6 py-4 border-b text-right">{{ $item->cost }}</td>
                            <td class="px-6 py-4 border-b text-right">{{ $item->cpa }}</td>
                            <td class="px-6 py-4 border-b text-right">{{ $item->cpc }}</td>

                            <td class="text-right">
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M19 9l-7 7-7-7"></path></svg>
                            </td>
                            <!-- More data cells -->
                        </tr>
                        @endforeach
                        <!-- More rows -->
                    </tbody>
                </table>
            </div>

        </main>
    </div>
    </div>

    @include('advertiser.footer')

    <script>
        // Initialize Flatpickr on the two inputs
        flatpickr("#date1", {});
        flatpickr("#date2", {});

        const buttons = document.querySelectorAll('.options');

        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                buttons.forEach((btn) => {
                    if (btn != button) {
                        btn.classList.remove('bg-cyan-700');
                        btn.classList.add('bg-cyan-600');
                    } else {
                        btn.classList.remove('bg-cyan-600');
                        button.classList.add('bg-cyan-700');
                    }
                });
            });
        });
    </script>

</body>
</html>