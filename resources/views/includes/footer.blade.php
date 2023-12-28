{{-- resources/views/components/footer.blade.php --}}

<footer class="text-white bg-blue-900">
    <div class="container mx-auto px-6 py-4">
        <div class="flex flex-wrap justify-between items-center">
            <!-- Footer Navigation -->
            <div class="w-full md:w-auto">
                <p class="text-lg font-bold mb-2">Clickadu</p>
                <ul class="list-none mb-6">
                    <li><a href="/terms" class="text-white hover:text-gray-300">Terms & Conditions</a></li>
                    <li><a href="/privacy" class="text-white hover:text-gray-300">Privacy Policy</a></li>
                    <!-- Add other footer links here -->
                </ul>
            </div>

            <!-- Company Address -->
            <div class="w-full md:w-auto mb-6 md:mb-0">
                <p class="mb-2">Address:</p>
                <p>Clickadu s.r.o.<br>Zenklova 32/28, Praha 8 - Libeň, 180 00<br>Czech Republic</p>
                <p>Tax ID number 04606260</p>
            </div>

            <!-- Payment Methods -->
            <div class="w-full md:w-auto mb-6 md:mb-0">
                <p class="mb-2">Please visit CommerceGate, our authorized sales agent.</p>
                <!-- Add payment method images here -->
            </div>

            <!-- Social Media Links -->
            <div class="w-full md:w-auto">
                <p class="mb-2">Stay updated</p>
                <div class="flex space-x-4">
                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                    <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://telegram.org"><i class="fab fa-telegram-plane"></i></a>
                    <a href="https://youtube.com"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center pt-4 border-t border-gray-700">
            <p>Copyright &copy; Clickadu 2023</p>
        </div>
    </div>
</footer>

<!-- Include the icons library such as FontAwesome -->
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
