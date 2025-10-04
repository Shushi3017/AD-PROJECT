<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>links</title>
</head>
<body class="bg-black text-white min-h-screen flex flex-col">
<?= view("Components/buttons/header.php")?>

    <div class="container mx-auto px-4 py-10 text-center flex-1 flex flex-col justify-center items-center">
        <h1 class="text-4xl font-bold mb-4 tracking-wide">Welcome to AD-Project</h1>
        <p class="text-lg mb-8 text-gray-200">Your trusted platform for modern memorial services.</p>


       <?= view("Components/buttons/btn.php") ?>
    </div>
    <div class="footer">
        <?= view("Components/buttons/footer.php") ?>
    </div>
</body>
</html>