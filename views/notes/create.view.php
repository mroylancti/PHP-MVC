<?php require base_path('views/partial/header.php') ?>
<?php require base_path('views/partial/nav.php') ?>
<?php require base_path('views/partial/banner.php') ?>

<main>
    <div class="mx-auto px-4 py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md-">
            <form method="POST">

                <div class=" shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="col-span-full">
                                    <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
                                    <div class="mt-2">
                                        <textarea name="body" id="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Share your idea"><?= $_POST['body'] ?? '' ?></textarea>
                                    </div>
                                    <?php if (!empty($errors)): ?>
                                        <div class="error-messages">
                                            <?php foreach ($errors as $error): ?>
                                                <p class="text-red-500"><?php echo htmlspecialchars($error); ?></p>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<? require base_path('views/partial/footer.php') ?>