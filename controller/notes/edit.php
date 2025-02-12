<?php



use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentusedId = 0; // Replace this with the actual logged-in user ID logic

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the request is a PATCH request
    if ($_POST['_method'] !== 'PATCH') {
        die('Invalid request method.');
    }

    // Get the note ID and updated body content
    $noteId = $_GET['id'] ?? $_POST['id'];
    $body = trim($_POST['body']);


    // Validate input
    $errors = [];
    if (empty($body)) {
        $errors[] = 'Body content is required.';
    }

    // Fetch the note from the database
    $note = $db->query(
        'SELECT * FROM notes WHERE id = :id',
        ['id' => $noteId]
    )->findOrFail();

    // Ensure the user is authorized to edit
    authorize($note['user_id'] === $currentusedId);

    if (empty($errors)) {
        // Update the note in the database
        $db->query(
            'UPDATE notes SET body = :body WHERE id = :id',
            [
                'body' => $body,
                'id' => $noteId
            ]
        );

        // Redirect back to the notes page
        header("Location: /notes");
        exit();
    }
    // dd($_POST['_method']);
    // dd($noteID);

    // If there are errors, reload the edit view
    view("notes/edit.view.php", [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => ['id' => $noteId, 'body' => $body]
    ]);
} else {
    // Handle GET request (display edit form)
    $note = $db->query(
        'SELECT * FROM notes WHERE id = :id',
        ['id' => $_GET['id']]
    )->findOrFail();

    // Ensure the user is authorized to edit
    authorize($note['user_id'] === $currentusedId);

    view("notes/edit.view.php", [
        'heading' => 'Edit Note',
        'errors' => [],
        'note' => $note
    ]);
}





// use Core\App;
// use Core\Database;

// $db = App::resolve(Database::class);


// // dd($_SERVER['REQUEST_METHOD']);
// $currentusedId = 0;

// $note = $db->query(
//     'select * from notes where id = :id',
//     [
//         'id' => $_GET['id']
//     ]
// )->findOrFail();



// authorize($note['user_id'] === $currentusedId);




// view("notes/edit.view.php", [
//     'heading' => 'Edit Note',
//     'errors' => [],
//     'note' => $note
// ]);
