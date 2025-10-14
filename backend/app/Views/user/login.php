<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm bg-gray-900/90 p-8 rounded-2xl shadow-2xl border border-gray-700">
        <h1 class="text-3xl font-extrabold mb-8 text-center tracking-wide text-white drop-shadow">Welcome Back</h1>
        
        <form action="" method="post" class="flex flex-col space-y-5">
            <input type="email" name="email" placeholder="Email"  
                class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white 
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">

            <input type="password" name="password" placeholder="Password"  
                class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white 
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">

            <button type="submit" 
                class="bg-indigo-500 text-white font-bold py-2 rounded-lg hover:bg-indigo-600 transition shadow">
                Login
            </button>

            <div class="flex justify-between mt-4">
                <a href="/user/signup" 
                   class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-indigo-400 transition font-semibold shadow">
                   Sign Up
                </a>
                <a href="/landing" 
                   class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-pink-400 transition font-semibold shadow">
                   Back to Landing.
                </a>
            </div>
        </form>
    </div>


</body>
</html>
