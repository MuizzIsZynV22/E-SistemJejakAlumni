<?php
    require_once("$location_index/config/connect.php");
    
    session_start();

    include("$location_index/backend/functions/system.php");
    include("$location_index/backend/functions/user.php");
    include("$location_index/backend/models/alumni.php");
    include("$location_index/backend/models/admin.php");

    include "$location_index/backend/functions/csrf.php";
    $token = generateCSRFToken();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Sistem Jejak Alumni</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./src/css/output.css"><!-- link css file from src folder -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@400;600;700&display=swap">

    <style>
        html{
            scroll-behavior: smooth;
          }
          
        body{
          min-height: 100vh;
        }
    </style>
</head>
