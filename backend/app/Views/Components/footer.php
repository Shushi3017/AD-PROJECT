<script src="https://cdn.tailwindcss.com"></script>

<?php
$footer = [
    'contact_label' => 'Contact Us',
    'contact_info' => [
        'email' => 'support@gameverse.com',
        'phone' => '+63 912 345 6789',
        'address' => '123 Game St, Manila, Philippines'
    ],
    'services_label' => 'Services',
    'services' => ['Game Library', 'Instant Download', '24/7 Support'],
    'moodboard_label' => 'Moodboard',
    'roadmap_label' => 'Roadmap',
    'socials_label' => 'Socials',
    'social_links' => ['Facebook', 'Twitter', 'Discord'],
    'year' => date('Y'),
    'brand' => 'GameVerse'
];
?>

<footer id="contact" class="bg-black py-10 text-gray-300 border-t border-yellow-500">
    <div class="container mx-auto flex flex-col md:flex-row justify-between px-6 gap-10">
        
        <!-- Left Side: Contact Us -->
        <div class="flex-3">
            <h3 class="text-yellow-400 font-semibold uppercase mb-4"><?= $footer['contact_label'] ?></h3>
            <ul class="space-y-2 text-sm">
                <li>Email: <a href="mailto:<?= $footer['contact_info']['email'] ?>" class="hover:text-yellow-400"><?= $footer['contact_info']['email'] ?></a></li>
                <li>Phone: <a href="tel:<?= $footer['contact_info']['phone'] ?>" class="hover:text-yellow-400"><?= $footer['contact_info']['phone'] ?></a></li>
                <li>Address: <span class="text-gray-400"><?= $footer['contact_info']['address'] ?></span></li>
            </ul>
        </div>

        <!-- Right Side: Services + Moodboard/Roadmap + Socials -->
        <div class="flex-2 flex flex-col md:flex-row justify-between gap-8">
            
            <!-- Services -->
            <div>
                <h3 class="text-yellow-400 font-semibold uppercase mb-4"><?= $footer['services_label'] ?></h3>
                <ul class="space-y-2 text-sm">
                    <?php foreach ($footer['services'] as $service): ?>
                        <li class="hover:text-yellow-400 transition cursor-pointer"><?= $service ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Moodboard + Roadmap -->
            <div>
                <h3 class="text-yellow-400 font-semibold uppercase mb-4">Links</h3>
                <ul class="space-y-2 text-sm">
                    <li class="hover:text-yellow-400 transition"><a href="/moodboard"><?= $footer['moodboard_label'] ?></a></li>
                    <li class="hover:text-yellow-400 transition"><a href="/roadmap"><?= $footer['roadmap_label'] ?></a></li>
                </ul>
            </div>

            <!-- Socials -->
            <div>
                <h3 class="text-yellow-400 font-semibold uppercase mb-4"><?= $footer['socials_label'] ?></h3>
                <div class="flex items-center space-x-3 text-sm">
                    <?php foreach ($footer['social_links'] as $i => $link): ?>
                        <a href="#" class="text-yellow-300 hover:text-yellow-100 transition duration-300 hover:scale-110 hover:opacity-90"><?= $link ?></a>
                        <?php if ($i < count($footer['social_links']) - 1): ?>
                            <span class="text-yellow-700">|</span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="mt-10 text-center text-xs text-yellow-400">
        <span class="opacity-90">&copy; <?= $footer['year'] ?> 
            <span class="text-yellow-300 font-semibold"><?= $footer['brand'] ?></span>. All rights reserved.
        </span>
    </div>
</footer>
