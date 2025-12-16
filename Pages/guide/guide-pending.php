<?php
session_start();

if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'guide') {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Guide Pending | ASSAD Zoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    jungle: '#0f3d2e',
                    gold: '#fbbf24',
                    sand: '#f8fafc'
                }
            }
        }
    }
    </script>
</head>

<body class="min-h-screen flex items-center justify-center bg-sand font-sans">

    <div class="max-w-lg bg-white shadow-2xl rounded-2xl p-10 text-center">

        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-20 w-20 text-gold mb-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 8v4m0 4h.01M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z" />
        </svg>

        <h1 class="text-3xl font-bold text-jungle mb-4">Account Pending Approval</h1>
        <p class="text-gray-600 mb-6">
            Hello <span class="font-semibold"><?= htmlspecialchars($_SESSION['user_name']); ?></span>! <br>
            Your guide account is currently under review by the administrator. You cannot create or manage tours until
            your account is approved.
        </p>

        <p class="text-gray-500 mb-6">
            You will receive a notification via email once your account is approved.
        </p>

        <a href="../login.php"
            class="inline-block bg-jungle text-white px-6 py-3 rounded-xl font-semibold hover:bg-opacity-90 transition">
            Back to Login
        </a>

    </div>

</body>

</html>