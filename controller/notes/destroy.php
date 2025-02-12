<?php

// use Core\App;
// use Core\Database;

// $db = App::resolve(Database::class);

// if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
//     // Ensure an ID is provided
//     if (!isset($_POST['id']) || empty($_POST['id'])) {
//         die("Error: No note ID provided.");
//     }

//     $id = $_POST['id'];

//     try {
//         // Fetch the note before deletion
//         $note = $db->query(
//             'SELECT * FROM notes WHERE id = :id',
//             ['id' => $id]
//         )->findOrFail();

//         // Authorization check
//         if ($note['user_id'] !== $currentUserId) {
//             die("Unauthorized action.");
//         }

//         // Delete the note
//         $db->query(
//             'DELETE FROM notes WHERE id = :id',
//             ['id' => $id]
//         );

//         // Redirect to the notes list
//         header('Location: /notes');
//         exit();
//     } catch (Exception $e) {
//         echo "Error: " . $e->getMessage();
//     }
// }
