<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Visits | ASSAD Guide</title>
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

    <aside class="w-64 bg-primary text-white min-h-screen fixed">
        <div class="p-6 text-xl font-bold border-b border-green-700">
            ASSAD Guide
        </div>
        <nav class="mt-6 space-y-1">
            <a href="dashboard.php" class="block px-6 py-3 hover:bg-green-800 rounded-lg">Dashboard</a>
            <a href="list.php" class="block px-6 py-3 bg-green-800 font-semibold rounded-lg">My Visits</a>
            <a href="create.php" class="block px-6 py-3 hover:bg-green-800 rounded-lg">Create Visit</a>
            <a href="bookings.php" class="block px-6 py-3 hover:bg-green-800 rounded-lg">Bookings</a>
            <a href="logout.php" class="block px-6 py-3 hover:bg-red-600 text-red-300 rounded-lg">Logout</a>
        </nav>
    </aside>

    <main class="ml-64 p-8">

        <h1 class="text-3xl font-bold text-gray-800">My Guided Visits</h1>
        <p class="text-gray-500 mt-1">Manage all the visits you have created</p>

        <section class="mt-8">
            <div class="overflow-x-auto bg-white rounded-xl shadow p-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Title</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Date & Time</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Language</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Max Capacity</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Status</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4">African Safari Tour</td>
                            <td class="px-6 py-4">2025-01-10 10:00</td>
                            <td class="px-6 py-4">English</td>
                            <td class="px-6 py-4">15</td>
                            <td class="px-6 py-4"><span class="text-green-600 font-semibold">Active</span></td>
                            <td class="px-6 py-4 space-x-2">
                                <button
                                    class="px-3 py-1 bg-secondary text-black rounded hover:bg-amber-400">Edit</button>
                                <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Cancel</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">Lion Exploration</td>
                            <td class="px-6 py-4">2025-01-12 14:00</td>
                            <td class="px-6 py-4">French</td>
                            <td class="px-6 py-4">12</td>
                            <td class="px-6 py-4"><span class="text-yellow-600 font-semibold">Pending</span></td>
                            <td class="px-6 py-4 space-x-2">
                                <button
                                    class="px-3 py-1 bg-secondary text-black rounded hover:bg-amber-400">Edit</button>
                                <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Cancel</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">Bird Paradise</td>
                            <td class="px-6 py-4">2025-01-15 09:30</td>
                            <td class="px-6 py-4">English</td>
                            <td class="px-6 py-4">20</td>
                            <td class="px-6 py-4"><span class="text-green-600 font-semibold">Active</span></td>
                            <td class="px-6 py-4 space-x-2">
                                <button
                                    class="px-3 py-1 bg-secondary text-black rounded hover:bg-amber-400">Edit</button>
                                <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Cancel</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

</body>

</html>