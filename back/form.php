<?php

if (isset($_POST['submit'])) {
    $department = $_POST['department'];
    $hour = $_POST['hour'];
    if ($hour > 0) {
        $calcSalary = new calcSalary($department, $hour);
        $salaryDetails = $calcSalary->Details();
        include '../include/printResult.php';
    } else {
        echo "<div class='container'> <p class='text-danger'>Please Enter Valid Hour </p></div>";
    }
};
