<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    @stack('styles')
</head>
@vite(['resources/css/app.css','resources/js/app.js'])
<body class="p-8">
    <div>
        <div class="flex justify-end">
            <img src="{{ asset('images/logopdf.png') }}" alt="">
        </div>
        <div class="flex space-x-2 justify-between">
            <div>
                <div class="text-gray-900 font-bold text-xl mb-2">Customer:</div>
                <p>Customer ID 253265<br>Shashank Singh<br>Belwa, UdayRajGanj Siddharth Nagar<br>India<br>shashanks@gmail.com</p>
                <p class="mt-4">VAT No: —</p>
            </div>
            <div class="text-right">
                <div class="text-gray-900 font-bold text-xl mb-2">Supplier:</div>
                <p>Clickadu s.r.o.<br>Zenklova 32/28, Libeň, 180 00 Praha 8<br>Czech Republic<br>payments@clickadu.com</p>
                <p class="mt-4">ID: 04066260<br>Tax ID: CZ04066260</p>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="border-b-2 border-t-2 border-black">
                <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Description
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Period
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Quantity
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                    Unit Price (USD)
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                        VAT Rate
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                    VAT (USD)
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                    Grant Total (USD)
                    </th>
                </tr>
                </thead>
                <tbody class="divide-y divide-black">
                <!-- Add rows here -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                    Online advertising services
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                    2023 October
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                        1
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        32.4
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        __%
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        1.32
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        500.32
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                        Service Fee
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                    2023 October
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                        1
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        32.4
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        __%
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        1.32
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        500.32
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                        Advanced Payment
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                        Invoice number 1321
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                        1
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        32.4
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        __%
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        1.32
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        500.32
                    </td>
                </tr>
                <tr class="justify-end">
                    <td class="text-white">filler</td>
                    <td class="text-white">filler</td>
                    <td class="text-white">filler</td>
                    <td class="text-white">filler</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        Total paid
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        CZK
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        91.2342
                    </td>
                </tr>
                <tr class="justify-end">
                    <td class="text-white">filler</td>
                    <td class="text-white">filler</td>
                    <td class="text-white">filler</td>
                    <td class="text-white">filler</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-black text-right">
                        Total to pay*
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        CZK
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 text-right">
                        91.2342
                    </td>
                </tr>
                <tr class="justify-end">
                    <td class="text-white">filler</td>
                    <td class="text-gray-700">*Details of amount to be paid in CZK</td>
                    <td class="text-white">filler</td>
                    <td class="text-gray-700">
                        <div class="text-right">
                            <div>VAT base CZK</div>
                            <div>0.0</div>
                        </div>
                    </td>
                    <td class="text-gray-700">
                        <div class="text-right">
                            <div>VAT Rate CZK</div>
                            <div>__%</div>
                        </div>
                    </td>
                    <td class="text-gray-700">
                        <div class="text-right">
                            <div>VAT CZK</div>
                            <div>0.0</div>
                        </div>
                    </td>
                    <td class="text-gray-700">
                        <div class="text-right">
                            <div>Gross CZK</div>
                            <div>0.0</div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

            <!-- Bank details and company information -->
        <div class="pt-8">
            <p class="font-medium">*Details of Amount to Pay in CZK</p>
            <div class="grid grid-cols-2 gap-4">
                <div>
                <p>Bank Name: PPF BANKA A.S.</p>
                <p>Bank address: Evropská 2690/17, Praha 6, 160 41, Czech Republic</p>
                <p>Swift: PMBPCZPP</p>
                <!-- ... other bank details ... -->
                </div>
                <div class="text-right w-64">
                    <img src="{{asset('images/stamp.png')}}" alt="">
                </div>
            </div>
            </div>
        </div>

    </div>

</body>
</html>
