<?php
session_start();
include_once '../config/database.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    
    $bmi = $weight / ($height * $height);

    // Store user and BMI data in the database
    $userID = $_SESSION['userID']; // Assumed to be stored during login
    $stmt = $conn->prepare("INSERT INTO bmiusers (Name, Age, Gender, CreatedAt) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("sis", $name, $age, $gender);
    $stmt->execute();
    $bmiUserID = $stmt->insert_id;

    $stmt = $conn->prepare("INSERT INTO bmirecords (BMIUserID, Height, Weight, BMI, RecordedAt) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("iddd", $bmiUserID, $height, $weight, $bmi);
    $stmt->execute();

    echo '<div class="max-w-md mx-auto mt-10 text-center">';
    echo "<p class='text-2xl'>Hello, $name!</p>";
    echo "<p>Your BMI is: " . number_format($bmi, 2) . "</p>";
    echo '</div>';
}
?>
