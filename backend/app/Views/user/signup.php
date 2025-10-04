<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-gray-900/90 p-8 rounded-xl shadow-2xl border border-gray-800">
        <h1 class="text-3xl font-extrabold mb-6 text-center text-white drop-shadow">Sign Up</h1>

        <form class="flex flex-col space-y-5">
            <input type="text" placeholder="Full Name" class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            <input type="email" placeholder="Email" class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            <input type="password" placeholder="Password" class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            <input type="password" placeholder="Confirm Password" class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            <button type="submit" class="bg-gradient-to-r from-blue-500 to-cyan-400 text-white font-bold py-2 rounded-lg hover:from-blue-600 hover:to-cyan-500 transition shadow-lg">Sign Up</button>
        </form>
        <div class="mt-6 text-center text-gray-400">
            Already have an account?
            <a href="/login" class="text-blue-400 hover:underline font-semibold">Login</a>
        </div>
    </div>

        <form class="flex flex-col space-y-5" id="signupForm" method="post" action="/user/signup">
            <input type="text" name="username" placeholder="Username" class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            <input type="email" name="email" placeholder="Email" required class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            
            <div class="relative">
            <input type="password" name="password" id="password" placeholder="Password" required class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-blue-400" onclick="togglePassword('password', this)">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path id="eyeIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm6 0c0 4-4.418 8-9 8S3 16 3 12s4.418-8 9-8 9 4 9 8z" />
                </svg>
            </button>
            </div>
            <div class="relative">
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-blue-400" onclick="togglePassword('confirm_password', this)">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path id="eyeIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm6 0c0 4-4.418 8-9 8S3 16 3 12s4.418-8 9-8 9 4 9 8z" />
                </svg>
            </button>
            </div>
            <button type="submit" class="bg-gradient-to-r from-blue-500 to-cyan-400 text-white font-bold py-2 rounded-lg hover:from-blue-600 hover:to-cyan-500 transition shadow-lg">Sign Up</button>
        </form>
        <script>
            function togglePassword(fieldId, btn) {
            const input = document.getElementById(fieldId);
            if (input.type === "password") {
                input.type = "text";
                btn.querySelector('svg').innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.582 0-8.418-4-8.418-7s3.836-7 8.418-7c1.07 0 2.1.18 3.075.525M19.425 15.075A9.96 9.96 0 0021 12c0-3-3.836-7-9-7a9.96 9.96 0 00-3.075.525M3 3l18 18"/>';
            } else {
                input.type = "password";
                btn.querySelector('svg').innerHTML = '<path id="eyeIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm6 0c0 4-4.418 8-9 8S3 16 3 12s4.418-8 9-8 9 4 9 8z" />';
            }
            }
        </script>
        <div class="mt-6 text-center text-gray-400">
            Already have an account?
            <a href="/user/login" class="text-blue-400 hover:underline font-semibold">Login</a>
        </div>
    </div>
    <script>
        document.getElementById('signupForm').onsubmit = function(e) {
            var pw = document.getElementById('password').value;
            var cpw = document.getElementById('confirm_password').value;
            if (pw !== cpw) {
                alert('Passwords do not match!');
                e.preventDefault();
            }
        };
    </script>

</body>
</html>
