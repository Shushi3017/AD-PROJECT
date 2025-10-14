

<?php
/**
 * User profile card component
 * Accepts (as $data or compact variables):
 * - name: string
 * - role: string
 * - image: string (URL)
 * - dropdownItems: array of ['label' => string, 'href' => string, 'class' => string|null]
 * - actions: array of ['label' => string, 'href' => string, 'class' => string|null]
 */

$name = $name ?? ($data['name'] ?? 'Unnamed');
$role = $role ?? ($data['role'] ?? '');
$image = $image ?? ($data['image'] ?? '/docs/images/people/profile-picture-3.jpg');
// Ensure these are arrays (helps static analysis and prevents runtime foreach errors)
$dropdownItems = $dropdownItems ?? ($data['dropdownItems'] ?? [
    ['label' => 'Edit', 'href' => '#', 'class' => 'text-gray-700'],
    ['label' => 'Export Data', 'href' => '#', 'class' => 'text-gray-700'],
    ['label' => 'Delete', 'href' => '#', 'class' => 'text-red-600'],
]);
$dropdownItems = (array) $dropdownItems;

$actions = $actions ?? ($data['actions'] ?? [
    ['label' => 'Add friend', 'href' => '#', 'class' => 'bg-blue-700 text-white'],
    ['label' => 'Message', 'href' => '#', 'class' => 'bg-white text-gray-900 border'],
]);
$actions = (array) $actions;
?>
<script src="https://cdn.tailwindcss.com"></script>
<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-end px-4 pt-4">
        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton">
            <?php foreach ($dropdownItems as $item): ?>
            <li>
                <a href="<?= esc($item['href'] ?? '#') ?>" class="block px-4 py-2 text-sm <?= esc($item['class'] ?? 'text-gray-700') ?> hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><?= esc($item['label'] ?? '') ?></a>
            </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="flex flex-col items-center pb-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="<?= esc($image) ?>" alt="<?= esc($name) ?> image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?= esc($name) ?></h5>
        <span class="text-sm text-gray-500 dark:text-gray-400"><?= esc($role) ?></span>
        <div class="flex mt-4 md:mt-6 space-x-2">
            <?php foreach ($actions as $act): ?>
                <a href="<?= esc($act['href'] ?? '#') ?>" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center <?= esc($act['class'] ?? '') ?> rounded-lg hover:opacity-90 focus:ring-4 focus:outline-none"><?= esc($act['label'] ?? '') ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
