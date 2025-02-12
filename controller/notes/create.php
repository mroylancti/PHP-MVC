<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve(Database::class);
require base_path('Core/Validator.php');

// $config = require base_path('config.php');
// $db = new Database($config['database']);


$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $body = trim($_POST['body']); // Trim whitespace from the body

    // Check if the body is empty or contains only whitespace
    // if (strlen($body) == 0) {
    //     $errors['body'] = 'A body is required';
    // }
    // if (strlen($body) > 255) {
    //     $errors['body'] = 'The body cannot be more than 255 characters';
    // }

    if (! Validator::string($body, 1, 1000)) {
        $errors['body'] = 'The body contains 1,000 characters';
    }

    if (empty($errors)) {
        try {
            $db->query(
                'INSERT INTO notes (body, user_id) VALUES (:body, :user_id)',
                [
                    'body' => $body,
                    'user_id' => 0 // Consider using a dynamic user ID based on session or authentication
                ]
            );
            // Redirect or provide feedback to the user upon successful insertion
            header('Location: /notes');
            exit;
        } catch (Exception $e) {
            // Handle exceptions and provide feedback to the user
            echo 'Error: ' . $e->getMessage();
        }
    }
}



view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);
