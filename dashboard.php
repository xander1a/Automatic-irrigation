<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatic Irrigation Dashboard</title>
    <!-- Add Tailwind CSS styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Custom styles for dark mode -->
    <style>
        .dark-mode body {
            background-color: #1a202c;
            color: #cbd5e0;
        }

        .dark-mode .bg-white {
            background-color: #2d3748;
            color: #cbd5e0;
        }
    </style>
</head>
<body x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" :class="{ 'dark-mode': darkMode }" class="bg-gray-100 transition-colors duration-300">

<div class="justify-center container pb-8 p-4 border-2 border-gray-400 rounded my-11 ">
    <h1 class="text-3xl font-bold mb-4 text-center">Automatic Irrigation Dashboard</h1>

    <div class="grid grid-cols-2 gap-4 flex  items-center">
        <!-- Pump Status -->
        <div class="p-4 bg-white rounded shadow dark:bg-gray-800">
            <h2 class="text-xl font-semibold mb-2 text-center">Pump Status</h2>
            <p id="pumpStatus" class="text-2xl text-green-500 text-center">ON</p>
        </div>
        <!-- Soil Moisture -->
        <div class="p-4 bg-white rounded shadow dark:bg-gray-800">
            <h2 class="text-xl font-semibold mb-2 text-center">Soil Moisture</h2>
            <p id="soilMoisture" class="text-2xl text-blue-500 text-center">50%</p>
        </div>
        <!-- Soil Condition -->
        <div class="p-4 bg-white rounded shadow dark:bg-gray-800 col-span-2">
            <h2 class="text-xl font-semibold mb-2 text-center">Current Soil Value</h2>
            <p id="soilCondition" class="text-2xl text-yellow-500 text-center">300</p>
        </div>
    </div>

    <div class="fixed bottom-4 right-4">
    <button @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)" class="p-2 bg-gray-800 text-white rounded-full focus:outline-none">
        <span x-show="!darkMode">🌞</span>
        <span x-show="darkMode">🌙</span>
    </button>
</div>

</div>

<!-- Dark Mode Toggle -->

<!-- Add Alpine.js for dynamic behavior -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('darkModeToggle', () => ({
            darkMode: localStorage.getItem('darkMode') === 'true' || false,
            toggleDarkMode() {
                this.darkMode = !this.darkMode;
                localStorage.setItem('darkMode', this.darkMode);
            },
            init() {
                if (this.darkMode) {
                    document.body.classList.add('dark-mode');
                }
            },
        }));
    });
</script>
</body>
</html>
