<?php require base_path('views/partial/header.php') ?>
<?php require base_path('views/partial/nav.php') ?>
<?php require base_path('views/partial/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <p>
            <a href="/notes/create" class="text-blue-500 hover:underline">Create a post</a>
        </p>
        <ul>
            <?php foreach ($notes as $note) : ?>

                <li>
                    <a href="/note?id=<?= htmlspecialchars($note['id'], ENT_QUOTES, 'UTF-8') ?>" class="text-blue-400 hover:text-underlined">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>
<? require base_path('views/partial/footer.php') ?>