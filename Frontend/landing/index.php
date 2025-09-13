<?php
// /Frontend/landing/index.php

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome | AD-Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col justify-center items-center">
    <header class="mb-8">
        <h1 class="text-4xl font-bold text-gray-800">Welcome to AD-Project</h1>
        <p class="mt-2 text-lg text-gray-600">Your trusted funeral services partner.</p>
    </header>
    <main class="w-full max-w-md bg-white rounded-lg shadow p-6">
        <p class="text-gray-700 mb-4">
            We provide compassionate, professional funeral and cremation services. Explore our offerings or contact us for more information.
        </p>
        <a href="/services" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">View Services</a>
    </main>
    <footer class="mt-10 text-gray-400 text-sm">
        &copy; <?= date('Y') ?> AD-Project. All rights reserved.
    </footer>
</body>
</html>