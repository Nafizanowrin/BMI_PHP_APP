<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<nav class="bg-blue-500 p-4">
    <div class="container mx-auto">
        <a href="../../index.php" class="text-white font-bold">BMI App</a>
        <?php if (isset($_SESSION['username'])): ?>
            <span class="text-white ml-4">Hello, <?= $_SESSION['username'] ?>!</span>
            <a href="php/views/logout.php" class="text-white ml-4">Logout</a>
        <?php else: ?>
            <a href="php/views/login.php" class="text-white ml-4">Login</a>
        <?php endif; ?>
    </div>
</nav>
