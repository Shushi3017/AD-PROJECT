
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mood Board</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white p-10">

  <form method="post" class="mb-10">
  <label for="season" class="block mb-2 text-lg font-semibold">Select Season:</label>
  <select name="season" id="season" class="text-black px-4 py-2 rounded mb-4">
    <option value="">-- Choose --</option>
    <option value="summer">Summer</option>
    <option value="rainy">Rainy</option>
    <option value="christmas">Christmas</option>
    <option value="all_souls">All Souls</option>
  </select>
  <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enter Moodboard</button>
  </form>

  <h1 class="text-3xl font-bold mb-6">Mood Board (Season: <?= htmlspecialchars($season) ?>)</h1>
=======






  <!-- Color Palette -->
  <h2 class="text-xl font-semibold mb-2">Color Palette</h2>
  <div class="flex space-x-4 mb-6">
  <div class="w-16 h-16 rounded" style="background:#1E90FF"></div>
  <div class="w-16 h-16 rounded" style="background:#32CD32"></div>
  <div class="w-16 h-16 rounded" style="background:#FF4500"></div>
  </div>

  <!-- Typography -->
  <h2 class="text-xl font-semibold mb-2">Typography</h2>
  <p class="font-sans mb-1">This is Sans Serif (Arial)</p>
  <p class="font-serif mb-6">This is Serif (Times New Roman)</p>

  <!-- Buttons -->
  <h2 class="text-xl font-semibold mb-2">Buttons</h2>
  <div class="space-x-4 mb-6">
  <button class="bg-blue-500 text-white px-4 py-2 rounded">Primary</button>
  <button class="bg-green-500 text-white px-4 py-2 rounded">Secondary</button>

=======
  <button class="bg-green-500 text-white px-4 py-2 rounded">Secondary</button>

  <button class="border border-white px-4 py-2 rounded">Bordered</button>
  <button class="bg-gray-600 text-gray-300 px-4 py-2 rounded cursor-not-allowed" disabled>Disabled</button>
  </div>

  <!-- Card -->
  <h2 class="text-xl font-semibold mb-2">Card Sample</h2>
  <div class="bg-gray-800 p-4 rounded-lg w-64 mb-6">
  <img src="https://via.placeholder.com/150" alt="Sample" class="rounded mb-2">
  <h3 class="text-lg font-bold">Card Title</h3>
  <p class="text-sm">This is a sample card description.</p>
  </div>

  <!-- Logos -->
  <h2 class="text-xl font-semibold mb-2">Logos</h2>
  <div class="flex space-x-4">
  <div class="w-20 h-20 bg-white rounded-full"></div>
  <div class="w-20 h-20 bg-white"></div>
  </div>

<div class="mt-10">
    <a href="/user" class="inline-block px-6 py-3 rounded-lg bg-white text-black font-semibold shadow transition
       hover:bg-gradient-to-r hover:from-purple-600 hover:to-blue-500 hover:text-white hover:scale-105
       focus:outline-none focus:ring-2 focus:ring-purple-500">
       Back to Landing
    </a>

</body>
</html>
