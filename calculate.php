<?php
$years = $months = $days = 0;
$dob = '';
$current_date = date('Y-m-d'); // default to today’s date
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = $_POST['dob'] ?? '';
    $current_date = $_POST['current_date'] ?? $current_date; // if submitted, use submitted date

    if ($dob && $current_date) {
        $dob_date = new DateTime($dob);
        $current = new DateTime($current_date);

        if ($dob_date > $current) {
            $error = "Date of Birth cannot be in the future!";
        } else {
            $difference = $dob_date->diff($current);
            $years = $difference->y;
            $months = $difference->m;
            $days = $difference->d;
        }
    } else {
        $error = "Please select both dates.";
    }
}