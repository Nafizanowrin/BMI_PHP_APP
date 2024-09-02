<?php
session_start();
include_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM appusers WHERE Username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['Password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['userID'] = $user['AppUserID']; // Store the user's ID for further use
            header('Location: ../../index.php');
            exit();
        } else {
            $error_message = "Incorrect password. Please try again.";
        }
    } else {
        $error_message = "Username not found. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="flex justify-center items-center h-screen">
    <form action="" method="POST" class="bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl mb-4">Login</h2>
        <?php if (isset($error_message)): ?>
            <p class="text-red-500"><?= $error_message ?></p>
        <?php endif; ?>
        <label for="username" class="block mb-2">Username:</label>
        <input type="text" name="username" id="username" class="w-full mb-4 p-2 border border-gray-300 rounded" required>
        <label for="password" class="block mb-2">Password:</label>
        <input type="password" name="password" id="password" class="w-full mb-4 p-2 border border-gray-300 rounded" required>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
        <p class="mt-4">Don't have an account? <a href="register.php" class="text-blue-500">Register here</a></p>
    </form>
</div>
</body>
</html>
