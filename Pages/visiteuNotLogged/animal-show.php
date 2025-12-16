<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Animal Details | ASSAD Zoo</title>
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

<body class="bg-gray-50 font-sans text-gray-800">

    <!-- Header -->
    <header class="bg-primary text-white">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <span class="text-xl font-bold">ASSAD Zoo</span>
            </div>
            <nav class="space-x-6 text-sm font-medium">
                <a href="../../index.php" class="hover:text-secondary">Home</a>
                <a href="animals.php" class="hover:text-secondary">Animals</a>
                <a href="visits.php" class="hover:text-secondary">Guided Visits</a>
                <a href="logout.php" class="hover:text-secondary">Logout</a>
            </nav>
        </div>
    </header>

    <!-- Animal Details -->
    <main class="max-w-5xl mx-auto px-6 py-12">
        <div class="bg-white rounded-xl shadow p-8 flex flex-col md:flex-row gap-8">
            <!-- Animal Image -->
            <div class="md:w-1/2">
                <img src="images/atlas_lion.jpg" alt="Atlas Lion" class="rounded-xl w-full h-auto shadow">
            </div>

            <!-- Animal Info -->
            <div class="md:w-1/2 flex flex-col gap-4">
                <h1 class="text-3xl font-bold text-primary">Atlas Lion – Asaad</h1>
                <p class="text-gray-700">
                    The Atlas Lion, also known as Asaad, is a majestic species native to North Africa. Explore its
                    habitat, behavior, and conservation status.
                </p>

                <ul class="text-gray-700 space-y-2">
                    <li><strong>Species:</strong> Panthera leo leo</li>
                    <li><strong>Habitat:</strong> Atlas Mountains, Morocco</li>
                    <li><strong>Diet:</strong> Carnivore</li>
                    <li><strong>Status:</strong> Vulnerable</li>
                </ul>


            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-6 mt-12">
        <div class="text-center text-sm">
            © 2025 ASSAD Virtual Zoo — Africa Cup of Nations Morocco
        </div>
    </footer>

</body>

</html>