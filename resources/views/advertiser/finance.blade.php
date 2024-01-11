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
        <h1 class="text-xl font-semibold">Finance</h1>
        <div class="flex items-center justify-center">
            <button class="bg-cyan-700 text-white px-4 py-2" id="billingHistoryBtn">Billing History</button>
            <button class="bg-cyan-500 text-white px-4 py-2" id="invoicesBtn">Invoices</button>
        </div>

        <main class="p-4 space-y-4">
            <!-- Date Filters -->
            <div class="flex space-x-4">
                <div>
                    <div class="mb-4 flex space-x-2">
                        <button class="text-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">Today</button>
                        <button class="text-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">Yesterday</button>
                        <button class="text-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">7 days</button>
                        <button class="text-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">30 days</button>
                        <button class="text-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">This Month</button>
                        <button class="text-cyan-500 rounded px-4 py-2 hover:bg-cyan-500 hover:text-white">Last Month</button>
                    </div>
                    <div class="mb-4 flex space-x-2">
                        <button class="text-gray-100 bg-gray-100">Today</button>
                        <!-- Date input 1 with Flatpickr -->
                        <input type="text" id="date1" class="pl-10 pr-4 py-2 border rounded w-48 h-12" placeholder="Select date" readonly>

                        <!-- Date input 2 with Flatpickr -->
                        <input type="text" id="date2" class="pl-10 pr-4 py-2 border rounded w-48 h-12" placeholder="Select date" readonly>

                        <!-- 'Set' Button -->
                        <button type="button" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded">
                            Set
                        </button>
                    </div>
                </div>
                <!-- Toggle Switch Between Payments and Expenses -->
                <div x-data="{ selected: 'payments' }" class="flex items-center space-x-2">
                    <!-- Option 1: Payments -->
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="toggle" value="payments" x-model="selected" class="sr-only" checked>
                        <div class="toggle-dot bg-cyan-500 border-2 border-white rounded-full w-6 h-6 p-1 transform translate-x-0 transition-transform duration-200" :class="{ 'translate-x-6': selected === 'expenses' }"></div>
                    </label>
                    <span :class="{ 'text-blue-500 font-semibold': selected === 'payments' }">Payments</span>

                    <!-- Option 2: Expenses -->
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="toggle" value="expenses" x-model="selected" class="sr-only">
                        <div class="toggle-dot bg-gray-300 border-2 border-white rounded-full w-6 h-6 p-1 transform translate-x-0 transition-transform duration-200" :class="{ 'translate-x-6': selected === 'payments' }"></div>
                    </label>
                    <span :class="{ 'text-gray-500 font-semibold': selected === 'expenses' }">Expenses</span>
                </div>
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
                <table class="min-w-full" id="history">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b text-right">Date</th>
                            <th class="px-6 py-3 border-b text-right">Description</th>
                            <th class="px-6 py-3 border-b text-right">Comment</th>
                            <th class="px-6 py-3 border-b text-right">Net Balance</th>
                            <th class="px-6 py-3 border-b text-white">Show Stats</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($history as $h)
                        <tr>
                            <td class="px-6 py-4 border-b text-right">{{ $h->date }}</td>
                            <td class="px-6 py-4 border-b text-right">{{ $h->description }}</td>
                            <td class="px-6 py-4 border-b text-right">{{ $h->comment }} </td>
                            <td class="px-6 py-4 border-b text-right">${{ $h->net_balance }}</td>
                            <td class="px-6 py-4 border-b text-right"><a href="{{ route('invoice') }}" class="btn btn-primary bg-cyan-500 text-white">PDF</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="min-w-full" id="invoice" hidden>
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b text-right">Date</th>
                            <th class="px-6 py-3 border-b text-right">Amount</th>
                            <th class="px-6 py-3 border-b text-right">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoice as $h)
                        <tr>
                            <td class="px-6 py-4 border-b text-right">{{ $h->date }}</td>
                            <td class="px-6 py-4 border-b text-right">{{ $h->amount }}</td>
                            <td class="px-6 py-4 border-b text-right"><a href="{{ route('invoice') }}" class="btn btn-primary bg-cyan-500 text-white">{{ $h->description }}</a></td>
                        </tr>
                        @endforeach
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
        // Get the buttons
        const billingBtn = document.getElementById('billingHistoryBtn');
        const invoicesBtn = document.getElementById('invoicesBtn');
        const history = document.getElementById('history');
        const invoice = document.getElementById('invoice');

        // Function to toggle the button color
        function toggleButtonColor(clickedBtn, otherBtn, show, hide) {
            clickedBtn.classList.add('bg-cyan-700');
            clickedBtn.classList.remove('bg-cyan-500');

            otherBtn.classList.add('bg-cyan-500');
            otherBtn.classList.remove('bg-cyan-700');

            show.hidden = false;
            hide.hidden = true;
        }

        // Event listeners
        billingBtn.addEventListener('click', () => toggleButtonColor(billingBtn, invoicesBtn, history, invoice));
        invoicesBtn.addEventListener('click', () => toggleButtonColor(invoicesBtn, billingBtn, invoice, history));

    </script>

</body>
</html>