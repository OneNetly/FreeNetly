<?php
// Check if a session is not already active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is already logged in
if(isset($_SESSION["user_email"])){
    $dashboardLink = '<a href="/dashboard.php">Dashboard</a>';
} else {
    $dashboardLink = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeNetly</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">
</head>
<body>
<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="/">
                        <span class="ml-2 text-white">FreeNetly</span>
                    </a>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4 justify-end">
                    <!-- <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Services</a> -->
                </div>
            </div>
        </div>
    </div>
</nav>
