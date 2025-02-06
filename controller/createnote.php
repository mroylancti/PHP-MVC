<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $db->query(
            'INSERT INTO notes (body, user_id) VALUES (:body, :user_id)',
            [
                'body' => $_POST['body'],
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

require 'views/createnotes.view.php';
