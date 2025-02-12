<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 0; // This should be dynamically set based on the logged-in user

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $note = $db->query(
        'SELECT * FROM notes WHERE id = :id',
        ['id' => $_POST['id']]
    )->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    $db->query(
        'DELETE FROM notes WHERE id = :id',
        ['id' => $_POST['id']]
    );

    header('Location: /notes');
    exit();
} else {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        try {
            $note = $db->query(
                'SELECT * FROM notes WHERE id = :id',
                ['id' => $id]
            )->findOrFail();

            authorize($note['user_id'] === $currentUserId);

            view("notes/show.view.php", [
                'heading' => 'Notes',
                'note' => $note,
            ]);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "No note ID provided in show.php.";
    }
}
