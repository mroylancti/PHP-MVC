<?php require('partial/header.php') ?>

<?php require('partial/nav.php') ?>


<?php require('partial/banner.php') ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

    <p>
      <a href="/notes/create" class="text-blue-500 hover:underline">Create a post</a>
    </p>
    <ul>
      <?php foreach ($notes as $note) : ?>

        <li>
          <a href="/note?id=<?= $note['id'] ?>" class="text-blue-400 hover:text-underlined">
            <?= htmlspecialchars($note['body']) ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</main>

<?php require('partial/footer.php') ?>