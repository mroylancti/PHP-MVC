<?php require('partial/header.php') ?>


<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-900">Login</h2>
        <form method="POST" action="">
            <input type="hidden" name="login" value="1">
            <div class="mt-4">
                <label class="block">Email</label>
                <input type="email" name="email" required class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mt-4">
                <label class="block">Password</label>
                <input type="password" name="password" required class="w-full px-3 py-2 border rounded">
            </div>
            <button type="submit" class="w-full mt-4 px-3 py-2 text-white bg-blue-500 rounded">Login</button>
        </form>
        <p class="mt-4 text-center">Don't have an account? <a href="/register" class="text-blue-500">Register</a></p>
    </div>
</body>

<?php require('partial/footer.php') ?>