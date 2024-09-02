<?php
session_start();
include_once 'php/config/database.php';
include_once 'php/views/header.php';

if (!isset($_SESSION['username'])) {
    echo '<div class="text-center mt-10"><p>Please <a href="php/views/login.php" class="text-blue-500">log in</a> to use the BMI calculator.</p></div>';
} else {
    include 'php/views/bmi_calculate_form.php';
}
include_once 'php/views/footer.php';
?>
