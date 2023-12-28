<script>
    function updateTimeTicker() {
        const timeTicker = document.getElementById('timeTicker');
        const currentTime = new Date();
        const hours = String(currentTime.getHours()).padStart(2, '0');
        const minutes = String(currentTime.getMinutes()).padStart(2, '0');
        const seconds = String(currentTime.getSeconds()).padStart(2, '0');
        timeTicker.textContent = `${hours}:${minutes}:${seconds}`;
    }

    // Update the time ticker every second
    setInterval(updateTimeTicker, 1000);

    // Initialize the time ticker
    updateTimeTicker();

</script>