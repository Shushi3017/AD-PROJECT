<?php
$label = 'Download';
$tooltip = 'Download';
?>

<button class="cursor-pointer group relative flex items-center gap-1.5 px-4 py-2 bg-black bg-opacity-80 text-[#f1f1f1] rounded-xl hover:bg-opacity-70 transition font-medium shadow-md text-sm">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="18px" width="18px">
    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="#f1f1f1"
          d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" />
  </svg>
  <?= esc($label) ?>

  <!-- Tooltip -->
  <div class="absolute opacity-0 group-hover:opacity-100 -bottom-8 left-1/2 -translate-x-1/2 bg-gray-800 text-white text-xs rounded-md py-1 px-2 transition-all duration-300 shadow-md">
    <?= esc($tooltip) ?>
  </div>
</button>
