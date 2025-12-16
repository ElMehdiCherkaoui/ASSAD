<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Statistics | ASSAD Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100 font-sans">

    <aside class="w-64 bg-gray-900 text-gray-100 min-h-screen fixed">
        <div class="p-6 text-xl font-bold tracking-wide border-b border-gray-700">
            ASSAD Admin
        </div>
        <nav class="mt-6 space-y-1">
            <a href="dashboard.php" class="block px-6 py-3 hover:bg-gray-800">Dashboard</a>
            <a href="users.php" class="block px-6 py-3 hover:bg-gray-800">Users</a>
            <a href="animals.php" class="block px-6 py-3 hover:bg-gray-800">Animals</a>
            <a href="habitats.php" class="block px-6 py-3 hover:bg-gray-800">Habitats</a>
            <a href="stats.php" class="block px-6 py-3 bg-gray-800 font-semibold">Statistics</a>
            <a href="logout.php" class="block px-6 py-3 text-red-400 hover:bg-gray-800">Logout</a>
        </nav>
    </aside>

    <main class="ml-64 p-8">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Statistics & Insights</h1>
        </div>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-4">
            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Total Users</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">124</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Pending Guides</p>
                <p class="text-3xl font-bold text-yellow-500 mt-2">5</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Animals</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">32</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Guided Tours</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">18</p>
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">

            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-semibold mb-4">Visitors by Country</h2>
                <canvas id="visitorsChart"></canvas>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-semibold mb-4">Top Animals Viewed</h2>
                <canvas id="animalsChart"></canvas>
            </div>

            <div class="bg-white rounded-xl shadow p-6 md:col-span-2">
                <h2 class="text-xl font-semibold mb-4">Top Guided Tours</h2>
                <canvas id="toursChart"></canvas>
            </div>

        </section>

    </main>

    <script>
    const visitorsCtx = document.getElementById('visitorsChart').getContext('2d');
    const visitorsChart = new Chart(visitorsCtx, {
        type: 'bar',
        data: {
            labels: ['Morocco', 'Nigeria', 'Egypt', 'Senegal', 'Cameroon'],
            datasets: [{
                label: 'Visitors',
                data: [50, 20, 15, 10, 29],
                backgroundColor: '#4f46e5'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });

    const animalsCtx = document.getElementById('animalsChart').getContext('2d');
    const animalsChart = new Chart(animalsCtx, {
        type: 'pie',
        data: {
            labels: ['Lion', 'Elephant', 'Monkey', 'Crocodile', 'Birds'],
            datasets: [{
                label: 'Views',
                data: [30, 25, 20, 15, 10],
                backgroundColor: ['#f59e0b', '#10b981', '#3b82f6', '#ef4444', '#8b5cf6']
            }]
        },
        options: {
            responsive: true
        }
    });

    const toursCtx = document.getElementById('toursChart').getContext('2d');
    const toursChart = new Chart(toursCtx, {
        type: 'line',
        data: {
            labels: ['Tour 1', 'Tour 2', 'Tour 3', 'Tour 4', 'Tour 5'],
            datasets: [{
                label: 'Reservations',
                data: [12, 19, 14, 23, 17],
                borderColor: '#3b82f6',
                backgroundColor: 'rgba(59, 130, 246, 0.2)',
                tension: 0.3
            }]
        },
        options: {
            responsive: true
        }
    });
    </script>

</body>

</html>