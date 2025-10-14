<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GameVerse | Your Ultimate Gaming Store</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
  <style>
    html {
      scroll-behavior: smooth; /* ✅ Smooth scrolling when clicking links */
    }
    body {
      font-family: 'Inter', sans-serif;
      background-color: #000;
      color: #fff;
    }
    h1, h2, h3 {
      font-family: 'Orbitron', sans-serif;
    }
    .highlight {
      color: #FFD700;
    }
    .carousel {
      transition: transform 1s cubic-bezier(0.25, 1, 0.5, 1);
    }
  </style>
</head>
<body class="bg-black text-white">

  <!-- NAVBAR -->
  <header class="flex justify-between items-center px-8 py-4 bg-black bg-opacity-90 fixed w-full z-50 border-b border-yellow-500 shadow-md">
    <h1 class="text-2xl font-bold text-yellow-400">GameVerse</h1>
    <nav class="space-x-6 hidden md:block">
      <a href="#home" class="hover:text-yellow-400">Home</a>
      <a href="#games" class="hover:text-yellow-400">Games</a>
      <a href="#services" class="hover:text-yellow-400">Services</a>
      <a href="#contact" class="hover:text-yellow-400">Contact</a>
    </nav>
    <div class="flex items-center space-x-2">
      <a href="#contact" class="hover:text-yellow-400">Login</a>
      <?= view('Components/buttons/border-buttons.php')?>
    </div>
  </header>
  

  <!-- HERO SECTION -->
  <section id="home" class="pt-28 px-8 text-center">
    <h2 class="text-5xl font-bold mb-4 highlight">Level Up Your Gaming Experience</h2>
    <p class="text-gray-300 mb-6">Discover the latest and greatest games across all platforms.</p>
    <button class="bg-yellow-500 hover:bg-yellow-600 text-black px-6 py-3 rounded-lg text-lg font-semibold shadow-lg">Shop Now</button>

    <!-- CAROUSEL -->
    <div class="relative w-full mt-10">
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96 border-2 border-yellow-400" id="gameCarousel">
        <div class="carousel-item absolute w-full h-full opacity-0 transition-opacity duration-1000 ease-in-out">
          <img src="https://images.unsplash.com/photo-1606813902779-9b788d7f1c7d" class="w-full h-full object-cover" alt="Game 1">
        </div>
        <div class="carousel-item absolute w-full h-full opacity-0 transition-opacity duration-1000 ease-in-out">
          <img src="#" class="w-full h-full object-cover" alt="Game 2">
        </div>
        <div class="carousel-item absolute w-full h-full opacity-0 transition-opacity duration-1000 ease-in-out">
          <img src="#" class="w-full h-full object-cover" alt="Game 3">
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURED GAMES -->
  <section id="games" class="px-8 py-16">
    <h2 class="text-3xl font-bold mb-8 text-center highlight">Top Trending Games</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-gray-900 rounded-lg border-2 border-yellow-500 shadow-lg overflow-hidden hover:scale-105 transition">
        <img src="#" alt="Game" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-yellow-400">Cyber Rage</h3>
          <p class="text-gray-400 text-sm mb-3">An action-packed sci-fi shooter with stunning visuals.</p>
          <button class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded font-semibold">Buy Now</button>
        </div>
      </div>

      <div class="bg-gray-900 rounded-lg border-2 border-yellow-500 shadow-lg overflow-hidden hover:scale-105 transition">
        <img src="#" alt="Game" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-yellow-400">Legends Arena</h3>
          <p class="text-gray-400 text-sm mb-3">Compete with players worldwide in this fantasy arena.</p>
          <button class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded font-semibold">Buy Now</button>
        </div>
      </div>

      <div class="bg-gray-900 rounded-lg border-2 border-yellow-500 shadow-lg overflow-hidden hover:scale-105 transition">
        <img src="#" alt="Game" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-yellow-400">Pixel Adventure</h3>
          <p class="text-gray-400 text-sm mb-3">A nostalgic pixel-style game with endless exploration.</p>
          <button class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded font-semibold">Buy Now</button>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section id="services" class="bg-gray-950 px-8 py-16">
    <h2 class="text-3xl font-bold mb-8 text-center highlight">Our Services</h2>
    <div class="grid md:grid-cols-3 gap-8 text-center">
      <div class="p-6 bg-gray-900 border-2 border-yellow-500 rounded-lg hover:shadow-lg">
        <h3 class="font-semibold text-xl mb-2 text-yellow-400">Game Library</h3>
        <p class="text-gray-400">Browse 1000+ titles and find your next favorite adventure.</p>
      </div>
      <div class="p-6 bg-gray-900 border-2 border-yellow-500 rounded-lg hover:shadow-lg">
        <h3 class="font-semibold text-xl mb-2 text-yellow-400">Instant Download</h3>
        <p class="text-gray-400">Get your games immediately after purchase — no waiting time.</p>
      </div>
      <div class="p-6 bg-gray-900 border-2 border-yellow-500 rounded-lg hover:shadow-lg">
        <h3 class="font-semibold text-xl mb-2 text-yellow-400">24/7 Support</h3>
        <p class="text-gray-400">Need help? Our support team is always online for you.</p>
      </div>
    </div>
  </section>

  <!-- NEWSLETTER -->
  <section class="text-center py-16 px-8 bg-yellow-500 text-black">
    <h2 class="text-3xl font-bold mb-4">Stay Updated</h2>
    <p class="mb-6">Subscribe to get the latest game releases and exclusive discounts!</p>
    <div class="flex justify-center">
      <input type="email" placeholder="Enter your email" class="p-3 rounded-l-lg w-64 outline-none" />
      <button class="bg-black hover:bg-gray-900 text-yellow-400 px-6 py-3 rounded-r-lg font-semibold">Subscribe</button>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="contact" class="bg-black py-8 text-center text-gray-400 border-t border-yellow-500">
  
  </footer>

  <!-- CAROUSEL SCRIPT -->
  <script>
   const carousel = document.getElementById("gameCarousel");
  const slides = carousel.querySelectorAll(".carousel-item");
  let index = 0;
  let isSliding = false;

  const wrapper = document.createElement("div");
  wrapper.classList.add("carousel-wrapper", "flex", "w-full", "h-full");
  wrapper.style.transition = "transform 1s ease-in-out";
  wrapper.style.width = `${slides.length * 100}%`;

  slides.forEach((slide) => {
    slide.classList.remove("absolute", "opacity-0");
    slide.classList.add("relative", "w-full", "h-full");
    wrapper.appendChild(slide);
  });
  carousel.innerHTML = "";
  carousel.appendChild(wrapper);

  function showSlide(i) {
    wrapper.style.transform = `translateX(-${i * (100 / slides.length)}%)`;
  }

  function nextSlide() {
    if (isSliding) return;
    isSliding = true;
    index = (index + 1) % slides.length;
    showSlide(index);
    setTimeout(() => (isSliding = false), 1000);
  }

  showSlide(index);
  setInterval(nextSlide, 4000);
  </script>

</body>
</html>
