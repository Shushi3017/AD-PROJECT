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
      scroll-behavior: smooth; 
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
  <?= view ('Components/header.php')?>
      <?= view('Components/buttons/border-buttons.php')?>
    </div>
  </header>
  

  <!-- HERO SECTION -->
  <section id="home" class="pt-28 px-8 text-center">
    <h2 class="text-5xl font-bold mb-4 highlight">Level Up Your Gaming Experience</h2>
    <p class="text-gray-300 mb-6">Discover the latest and greatest games across all platforms.</p>
    <button class="bg-yellow-500 hover:bg-yellow-600 text-black px-6 py-3 rounded-lg text-lg font-semibold shadow-lg">Shop Now</button>

    <!-- CAROUSEL -->
    <section class="w-full mt-10">
  <div class="relative w-full max-w-[1400px] mx-auto overflow-hidden rounded-lg border-2 border-yellow-400" id="gameCarousel">

    <!-- Slide 1 -->
    <div class="carousel-item absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
      <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/730/header.jpg"
           alt="Game 1"
           class="w-full h-[600px] object-cover object-center" />
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
      <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1RLdppgLllgGZlkjuvHBu6/237f7e968827f4abda462a311a0f1faf/RED_KEYART_STD_RGB_WW.jpg"
           alt="Assassin’s Creed Shadows"
           class="w-full h-[600px] object-cover object-center" />
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
      <img src="https://p325k7wa.twic.pics/high/elden-ring/elden-ring-nightreign/01-news/ELDEN-RING-NIGHTREIGN-announcement-thumbnail.jpg?twic=v1/resize=760/step=10/quality=80"
           alt="Game 3"
           class="w-full h-[600px] object-cover object-center" />
    </div>

  </div>
</section>

  <!-- FEATURED GAMES -->
  <section id="games" class="px-8 py-16">
    <h2 class="text-3xl font-bold mb-8 text-center highlight">Top Trending Games For Mobile</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-gray-900 rounded-lg border-2 border-yellow-500 shadow-lg overflow-hidden hover:scale-105 transition">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQiX0afyge6yOq8eY9Ob4Ol0AvloRv_VB05A&s" alt="Game" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-yellow-400">Roblox</h3>
          <p class="text-gray-400 text-sm mb-3">Still dominates mobile in monthly active users</p>
          <?= view('Components/buttons/download.buttons.php') ?>
        </div>
      </div>

      <div class="bg-gray-900 rounded-lg border-2 border-yellow-500 shadow-lg overflow-hidden hover:scale-105 transition">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjhV2nbNgwaSxokluI2gO2nKjfA2K37B086Q&s" alt="Game" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-yellow-400">PUBG Mobile</h3>
          <p class="text-gray-400 text-sm mb-3">Continues to be one of the most played and downloaded shooter games.</p>
             <?= view('Components/buttons/download.buttons.php') ?>
        </div>
      </div>
      <div class="bg-gray-900 rounded-lg border-2 border-yellow-500 shadow-lg overflow-hidden hover:scale-105 transition">
        <img src="https://play-lh.googleusercontent.com/JH136Ry9BOxHs9cIpcw5yo7A5UaSsNJz9Ovj_vqqytRjJuSPtEZTF51dtpyJtZcxdg=w526-h296-rw" alt="Game" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-yellow-400">Block Blast</h3>
          <p class="text-gray-400 text-sm mb-3">On iOS it was the most downloaded game of 2025 so far</p>
             <?= view('Components/buttons/download.buttons.php') ?>
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
  <?= view ('Components/footer')?>
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
