if (!isset($title)) $title = "Card Title";
if (!isset($description)) $description = "Card description text goes here.";
?>
<div class="bg-gray-800 rounded-xl p-5 shadow hover:shadow-teal-500/20 transition">
  <h3 class="text-lg font-semibold text-white mb-2"><?= $title ?></h3>
  <p class="text-gray-400 mb-4"><?= $description ?></p>

  <?php if (!empty($buttonLabel)): ?>
    <a href="<?= $buttonLink ?? '#' ?>"
       class="inline-block bg-teal-500 hover:bg-teal-600 text-white font-medium py-2 px-4 rounded-lg">
       <?= $buttonLabel ?>
    </a>
  <?php endif; ?>
</div>