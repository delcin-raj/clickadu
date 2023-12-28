{{-- resources/views/partials/sidebar.blade.php --}}

<aside class="w-64" aria-label="Sidebar">
    <div class="py-4 px-3 bg-white rounded">
        <ul class="space-y-2">
            <li>

            </li>
            <li>
                <a href="{{ route('advertiser.dashboard') }}" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-home mr-3"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('advertiser.campaigns') }}" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-flag mr-3"></i>
                    <span>Campaigns</span>
                </a>
            </li>
            <li>
                <a href="{{ route('advertiser.inventory') }}" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-boxes mr-3"></i>
                    <span>Traffic Inventory</span>
                </a>
            </li>
            <li>
                <a href="{{ route('advertiser.add_funds') }}" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-wallet mr-3"></i>
                    <span>Add Funds</span>
                </a>
            </li>
            <li>
                <a href="{{ route('advertiser.finance') }}" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-chart-line mr-3"></i>
                    <span>Finance</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-chart-line mr-3"></i>
                    <span>Tracking</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-chart-line mr-3"></i>
                    <span>News & Offers</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-chart-line mr-3"></i>
                    <span>API</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-chart-line mr-3"></i>
                    <span>Tools</span>
                </a>
            </li>
            <li>
                <a href="{{ route('advertiser.finance') }}" class="flex items-center p-2 text-base font-normal text-gray-500 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-chart-line mr-3"></i>
                    <span>Finance</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
