<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book Guided Visit | ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#14532d',
                    secondary: '#f59e0b'
                }
            }
        }
    }
    </script>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">

    <header class="bg-primary text-white py-4 px-6 flex justify-between items-center">
        <span class="text-xl font-bold">ASSAD Zoo</span>
        <nav class="space-x-4">
            <a href="../index.php" class="hover:text-secondary">Home</a>
            <a href="list.php" class="hover:text-secondary">Visits</a>
            <a href="my-reservations.php" class="hover:text-secondary">My Reservations</a>
            <a href="../logout.php" class="hover:text-red-400">Logout</a>
        </nav>
    </header>

    <main class="max-w-4xl mx-auto p-6 mt-10">
        <h1 class="text-3xl font-bold text-primary mb-6">Book Guided Visit</h1>

        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-xl font-semibold mb-4">Visit Title</h2>
            <p class="mb-2"><strong>Date:</strong> 2025-06-20</p>
            <p class="mb-2"><strong>Start Time:</strong> 10:00 AM</p>
            <p class="mb-2"><strong>Duration:</strong> 2 hours</p>
            <p class="mb-2"><strong>Language:</strong> English</p>
            <p class="mb-2"><strong>Remaining Capacity:</strong> 5</p>

            <form action="book.php" method="POST" class="mt-4">
                <label class="block mb-2 font-medium">Number of People:</label>
                <input type="number" name="people" min="1" max="5" class="border px-3 py-2 rounded-lg w-full mb-4">
                <button type="submit"
                    class="bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-900">
                    Confirm Booking
                </button>
            </form>
        </div>
    </main>

</body>

</html>