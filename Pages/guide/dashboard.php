<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Guide Dashboard | ASSAD Zoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#14532d',
                    secondary: '#f59e0b',
                }
            }
        }
    }
    </script>
</head>

<body class="bg-gray-50 font-sans">

    <!-- Sidebar -->
    <aside class="w-64 bg-primary text-white min-h-screen fixed">
        <div class="p-6 text-xl font-bold border-b border-green-700">
            ASSAD Guide
        </div>
        <nav class="mt-6 space-y-1">
            <a href="dashboard.php" class="block px-6 py-3 bg-green-800 font-semibold rounded-lg">Dashboard</a>
            <a href="list.php" class="block px-6 py-3 hover:bg-green-800 rounded-lg">My Visits</a>
            <a href="create.php" class="block px-6 py-3 hover:bg-green-800 rounded-lg">Create Visit</a>
            <a href="bookings.php" class="block px-6 py-3 hover:bg-green-800 rounded-lg">Bookings</a>
            <a href="logout.php" class="block px-6 py-3 hover:bg-red-600 text-red-300 rounded-lg">Logout</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-8">

        <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
        <p class="text-gray-500 mt-1">Welcome back, Guide John Doe</p>

        <!-- Stats Cards -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Upcoming Visits</p>
                <p class="text-3xl font-bold text-primary mt-2">5</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Total Reservations</p>
                <p class="text-3xl font-bold text-secondary mt-2">42</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Visits Created</p>
                <p class="text-3xl font-bold text-primary mt-2">12</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <p class="text-sm text-gray-500">Capacity Left</p>
                <p class="text-3xl font-bold text-secondary mt-2">120</p>
            </div>
        </section>

        <!-- Recent Bookings -->
        <section class="bg-white rounded-xl shadow p-6 mt-10">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Recent Bookings</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Visitor Name</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Visit Title</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Date</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">People</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4">Alice Smith</td>
                            <td class="px-6 py-4">African Safari Tour</td>
                            <td class="px-6 py-4">2025-01-10</td>
                            <td class="px-6 py-4">3</td>
                            <td class="px-6 py-4"><span class="text-green-600 font-semibold">Confirmed</span></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">Bob Johnson</td>
                            <td class="px-6 py-4">Lion Exploration</td>
                            <td class="px-6 py-4">2025-01-12</td>
                            <td class="px-6 py-4">2</td>
                            <td class="px-6 py-4"><span class="text-yellow-600 font-semibold">Pending</span></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">Clara Lee</td>
                            <td class="px-6 py-4">Bird Paradise</td>
                            <td class="px-6 py-4">2025-01-15</td>
                            <td class="px-6 py-4">4</td>
                            <td class="px-6 py-4"><span class="text-green-600 font-semibold">Confirmed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

</body>

</html>