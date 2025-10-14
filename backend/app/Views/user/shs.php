<?php

/**
 * SHS view
 * Expected variables:
 * - $title (string) optional
 * - $students (array) optional, each student: ['id'=>..., 'name'=>..., 'strand'=>...]
 */
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= esc($title ?? 'Senior High School') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-6">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b">
                <h1 class="text-xl font-semibold"><?= esc($title ?? 'SHS Students') ?></h1>
                <p class="text-sm text-gray-500">Manage Senior High School students and strands.</p>
            </div>

            <div class="p-6">
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="mb-4 p-3 bg-green-50 border-l-4 border-green-400 text-green-800">
                        <?= esc(session()->getFlashdata('success')) ?>
                    </div>
                <?php endif ?>

                <?php if (!empty($students) && is_array($students)): ?>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">#</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Name</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Strand</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-100">
                                <?php foreach ($students as $i => $s): ?>
                                    <tr>
                                        <td class="px-4 py-3 text-sm text-gray-700"><?= $i + 1 ?></td>
                                        <td class="px-4 py-3 text-sm text-gray-700"><?= esc($s['name'] ?? '') ?></td>
                                        <td class="px-4 py-3 text-sm text-gray-700"><?= esc($s['strand'] ?? '') ?></td>
                                        <td class="px-4 py-3 text-sm text-gray-700">
                                            <a href="<?= site_url('user/shs/edit/' . ($s['id'] ?? '')) ?>" class="text-indigo-600 hover:underline mr-3">Edit</a>
                                            <a href="<?= site_url('user/shs/delete/' . ($s['id'] ?? '')) ?>" class="text-red-600 hover:underline" onclick="return confirm('Delete this student?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <p class="text-gray-600">No students found yet. Use the form below to add one.</p>
                <?php endif ?>

                <hr class="my-6">

                <form method="post" action="<?= site_url('user/shs/add') ?>" class="grid grid-cols-1 gap-4">
                    <?= csrf_field() ?>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <input name="name" type="text" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Full name">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Strand</label>
                        <input name="strand" type="text" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="e.g. STEM, ABM, HUMSS">
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md">Add Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>