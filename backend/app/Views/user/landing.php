<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>links</title>
</head>
<body class="bg-black text-white min-h-screen flex flex-col">
    <div class="container mx-auto px-4 py-10 text-center flex-1 flex flex-col justify-center items-center">
        <h1 class="text-4xl font-bold mb-4 tracking-wide">Welcome to AD-Project</h1>
        <p class="text-lg mb-8 text-gray-200">Your trusted platform for modern memorial services.</p>
        <?= view("Components/buttons/Home.php") ?>
        <a href="/"
           class="inline-block px-6 py-3 rounded-lg bg-white text-black font-semibold shadow transition
                  hover:bg-gradient-to-r hover:from-purple-600 hover:to-blue-500 hover:text-white hover:scale-105
                  focus:outline-none focus:ring-2 focus:ring-purple-500"
        >
           Back to Home
        </a>
        <br>
        <a href="/user/login"
           class="inline-block px-6 py-3 rounded-lg bg-white text-black font-semibold shadow transition
                  hover:bg-gradient-to-r hover:from-purple-600 hover:to-blue-500 hover:text-white hover:scale-105
                  focus:outline-none focus:ring-2 focus:ring-purple-500">
                login 
                
                </a>
        <br>
        <a href="/user/signup"
           class="inline-block px-6 py-3 rounded-lg bg-white text-black font-semibold shadow transition
                  hover:bg-gradient-to-r hover:from-purple-600 hover:to-blue-500 hover:text-white hover:scale-105
                  focus:outline-none focus:ring-2 focus:ring-purple-500"
        >
            Signup
        </a>

        <br>
         <a href="/user/moodboard"
           class="inline-block px-6 py-3 rounded-lg bg-white text-black font-semibold shadow transition
                  hover:bg-gradient-to-r hover:from-purple-600 hover:to-blue-500 hover:text-white hover:scale-105
                  focus:outline-none focus:ring-2 focus:ring-purple-500"
        >
            Moodboard
            
        </a>
               <br> 
        <br>
        <a href="/user/roadmap"
           class="inline-block px-6 py-3 rounded-lg bg-white text-black font-semibold shadow transition
                  hover:bg-gradient-to-r hover:from-purple-600 hover:to-blue-500 hover:text-white hover:scale-105
                  focus:outline-none focus:ring-2 focus:ring-purple-500"
        >
            Roadmap
            
        </a>
    </div>
    <footer>
       <?= view('/Components/buttons/footer') ?>
    </footer>
</body>
</html>