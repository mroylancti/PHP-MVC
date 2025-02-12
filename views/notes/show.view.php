<?php require base_path('views/partial/header.php') ?>
<?php require base_path('views/partial/nav.php') ?>
<?php require base_path('views/partial/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <a href="/notes" class="text-blue-400 underline">← Back</a>

        <p><?= htmlspecialchars($note['body']) ?></p>


        <footer class="mt-6">

            <a href="/note/edit?id=<?= htmlspecialchars($note['id'], ENT_QUOTES, 'UTF-8') ?>"
                class="text-gray-500 border border-current px-3 py-1 rounded">Edit</a>

        </footer>

        <!-- <form class="mt-6" method="POST" action="/note">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= htmlspecialchars($note['id'], ENT_QUOTES, 'UTF-8') ?>">
            <button class="text-sm text-red-600">Delete</button>
        </form> -->

        <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= htmlspecialchars($note['id'], ENT_QUOTES, 'UTF-8') ?>">
            <button class="text-sm text-red-600">Delete</button>
        </form>



    </div>
</main>

<? require base_path('views/partial/footer.php') ?>