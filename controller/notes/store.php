<?php

// use Core\Database;
// use Core\Validator;
// use Core\App;

// $db = App::resolve(Database::class);
// require base_path('Core/Validator.php');

// $errors = [];

// Validate input
// if (!Validator::string($_POST['body'], 1, 1000)) {
//     $errors['body'] = 'A body with no more than 1,000 characters is required!';
// }

// // If there are errors, return the form with errors
// if (!empty($errors)) {
//     return view("notes/create.view.php", [
//         'heading' => 'Create Note',
//         'errors' => $errors
//     ]);
// }

// // Insert note into the database
// $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
//     'body' => $_POST['body'],
//     'user_id' => 1 // Change this to the actual logged-in user ID
// ]);

// Redirect to the notes list after saving
// header('Location: /notes');
exit();
