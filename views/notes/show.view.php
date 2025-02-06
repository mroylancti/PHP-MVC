<?php require base_path('views/partial/header.php') ?>
<?php require base_path('views/partial/nav.php') ?>
<?php require base_path('views/partial/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <a href="/notes" class="text-blue-400 underlined">
            <<<< </a>
                <p><?= htmlspecialchars($note['body']) ?></p>
    </div>
</main>

<? require base_path('views/partial/footer.php') ?>