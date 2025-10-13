<?php
if (!isset($title)) $title = "Sample Card Title";
if (!isset($description)) $description = "This is a more detailed card with an image and tag label.";
if (!isset($image)) $image = "https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80";
if (!isset($tag)) $tag = "Featured";
if (!isset($buttonLabel)) $buttonLabel = "Learn More";
if (!isset($buttonLink)) $buttonLink = "#";
?>

<div class="bg-gray-800 rounded-xl overflow-hidden shadow hover:shadow-teal-500/30 transition">
  <img src="<?= $image ?>" alt="<?= $title ?>" class="w-full h-48 object-cover">
  <div class="p-5">
    <span class="inline-block bg-teal-600/20 text-teal-400 text-xs font-semibold px-3 py-1 rounded-full mb-3">
      <?= $tag ?>
    </span>
    <h3 class="text-lg font-semibold text-white mb-2"><?= $title ?></h3>
    <p class="text-gray-400 mb-4"><?= $description ?></p>
    <a href="<?= $buttonLink ?>"
       class="inline-block bg-teal-500 hover:bg-teal-600 text-white font-medium py-2 px-4 rounded-lg transition">
       <?= $buttonLabel ?>
    </a>
  </div>
</div>
