<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Habitats Management | ASSAD Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Sidebar (same as dashboard) -->
    <aside class="w-64 bg-gray-900 text-gray-100 min-h-screen fixed">
        <div class="p-6 text-xl font-bold tracking-wide border-b border-gray-700">
            ASSAD Admin
        </div>
        <nav class="mt-6 space-y-1">
            <a href="dashboard.php" class="block px-6 py-3 hover:bg-gray-800">Dashboard</a>
            <a href="users.php" class="block px-6 py-3 hover:bg-gray-800">Users</a>
            <a href="animals.php" class="block px-6 py-3 hover:bg-gray-800">Animals</a>
            <a href="habitats.php" class="block px-6 py-3 bg-gray-800 font-semibold">Habitats</a>
            <a href="stats.php" class="block px-6 py-3 hover:bg-gray-800">Statistics</a>
            <a href="logout.php" class="block px-6 py-3 text-red-400 hover:bg-gray-800">Logout</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-8">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Habitats Management</h1>
            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                + Add New Habitat
            </button>
        </div>

        <!-- Habitats Table -->
        <section class="bg-white rounded-xl shadow p-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Climate Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Zone</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Savanna</td>
                        <td class="px-6 py-4">Tropical</td>
                        <td class="px-6 py-4">North Zone</td>
                        <td class="px-6 py-4">Open grassy areas for lions and herbivores.</td>
                        <td class="px-6 py-4 space-x-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Rainforest</td>
                        <td class="px-6 py-4">Humid</td>
                        <td class="px-6 py-4">East Zone</td>
                        <td class="px-6 py-4">Dense forest areas for primates and birds.</td>
                        <td class="px-6 py-4 space-x-2">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>

</body>

</html>