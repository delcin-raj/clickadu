<!DOCTYPE html>
<html lang="en">
<head>
    @stack('styles')
</head>
<body>
    @include('advertiser.header')

    <div class="bg-gray-100 min-h-screen flex">
    <!-- Sidebar -->
    @include('includes.sidebar') {{-- Include your sidebar here --}}

    <div class="p-6">
        <h2 class="text-lg font-semibold mb-4">Add Funds</h2>
        <p class="mb-4">Please select a payment method:</p>


        <form action="{{ route('advertiser.add_funds.store') }}" method="POST">
            @csrf

            <!-- Payment Methods -->
            <div class="mb-4">
                <label class="flex items-center mb-2">
                    <input type="radio" name="payment_method" value="bank_card_1" class="text-cyan-600 border-gray-300">
                    <span class="ml-2">Bank Card Processing 1</span>
                    <!-- Payment logos here -->
                </label>
                <div class="flex">
                    @foreach (glob(public_path('images/cards/*')) as $imagePath)
                        <div class="mr-4">
                            <img src="{{ asset(substr($imagePath, strpos($imagePath, "images"))) }}" alt="" class="w-4 h-4" />
                        </div>
                    @endforeach
                </div>
                <label class="flex items-center mb-2">
                    <input type="radio" name="payment_method" value="bank_card_2" class="text-cyan-600 border-gray-300">
                    <span class="ml-2">Bank Card Processing 2</span>
                </label>
                <label class="flex items-center mb-2">
                    <input type="radio" name="payment_method" value="bank_card_3" class="text-cyan-600 border-gray-300">
                    <span class="ml-2">Bank Card Processing 3</span>
                </label>
                <label class="flex items-center mb-2">
                    <input type="radio" name="payment_method" value="paypal" class="text-cyan-600 border-gray-300">
                    <span class="ml-2">PayPal</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="payment_method" value="paxum" class="text-cyan-600 border-gray-300">
                    <span class="ml-2">Paxum</span>
                </label>
            </div>

            <!-- Amount Input -->
            <div class="mb-4">
                <label for="amount" class="block mb-2">Amount, USD</label>
                <input type="number" id="amount" name="amount" min="100" placeholder="Minimum deposit: $100.00" class="border-gray-300 focus:border-cyan-500 focus:ring focus:ring-cyan-200 rounded-lg shadow-sm">
            </div>

            <!-- Terms and Conditions -->
            <div class="mb-4">
                <label class="flex items-center">
                    <input onchange="toggleSubmitButton()" id="termsChkbx" type="checkbox" name="terms" class="text-cyan-600 border-gray-300">
                    <span class="ml-2">I agree with the terms and conditions</span>
                </label>
            </div>

            <!-- Submit Button -->
            <button id="submitBtn" type="submit" class="enabled:bg-cyan-600 enabled:hover:bg-cyan-700 enabled:text-white px-4 py-2 rounded-lg disabled:text-gray-400 disabled:bg-slate-200" disabled>Proceed</button>
        </form>
    </div>

    </div>
    <script>
        function toggleSubmitButton() {
            var checkBox = document.getElementById("termsChkbx");
            var submitBtn = document.getElementById("submitBtn");

            // enable if checkbox is not checked and viceversa
            submitBtn.disabled = !checkBox.checked;
        }
    </script>
</body>
</html>
