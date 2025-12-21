<?php
require_once "../config.php";

$error = "";


$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$role = $_POST["role"];
$password = $_POST["password"];


$check = mysqli_prepare($conn, "SELECT Users_id FROM users WHERE userEmail = ?");
mysqli_stmt_bind_param($check, "s", $email);
mysqli_stmt_execute($check);
$result = mysqli_stmt_get_result($check);

if (mysqli_num_rows($result) > 0) {
    $error = "Email already exists";
} else {

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $status = ($role === "Guide") ? "Pending" : "Active";

    $stmt = mysqli_prepare($conn, "
                INSERT INTO users (userName, userEmail, userRole, password_hash, userStatus)
                VALUES (?, ?, ?, ?, ?)
            ");

    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $role, $hashedPassword, $status);
    mysqli_stmt_execute($stmt);

    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Join ASSAD Zoo</title>
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

<body class="min-h-screen flex font-sans bg-sand">

    <section class="hidden lg:flex w-1/2 bg-jungle text-white p-12 flex-col justify-between">
        <div>
            <h1 class="text-4xl font-extrabold">ASSAD Virtual Zoo</h1>
            <p class="mt-4 text-gray-200">
                Discover the Atlas Lion and African wildlife during CAN 2025.
            </p>
        </div>
    </section>

    <section class="w-full lg:w-1/2 flex items-center justify-center px-6">
        <div class="w-full max-w-md bg-white shadow-2xl rounded-2xl p-8">

            <h2 class="text-3xl font-bold text-jungle text-center">
                Create your account
            </h2>

            <?php if (!empty($error)): ?>
                <p class="text-red-600 text-center mt-4"><?= $error ?></p>
            <?php endif; ?>

            <form method="POST" class="mt-8 space-y-5">

                <div>
                    <label class="block text-sm font-medium mb-1">Full Name</label>
                    <input type="text" name="name" required
                        class="w-full px-4 py-3 rounded-xl border focus:ring-2 focus:ring-jungle">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-3 rounded-xl border focus:ring-2 focus:ring-jungle">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Role</label>
                    <select name="role" required
                        class="w-full px-4 py-3 rounded-xl border focus:ring-2 focus:ring-jungle">
                        <option value="">Select role</option>
                        <option value="Visitor">Visitor</option>
                        <option value="Guide">Guide (requires approval)</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 rounded-xl border focus:ring-2 focus:ring-jungle">
                </div>

                <button class="w-full bg-jungle text-white py-3 rounded-xl font-semibold">
                    Create Account
                </button>
            </form>


            <p class="text-center text-sm text-gray-500 mt-6">
                Already have an account?
                <a href="login.php" class="text-jungle font-semibold">Login</a>
            </p>

        </div>
    </section>

</body>

</html>