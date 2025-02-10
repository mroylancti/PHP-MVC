<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentusedId = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $note = $db->query(
        'select * from notes where id = :id',
        [
            'id' => $_GET['id']
        ]
    )->findOrFail();



    authorize($note['user_id'] == $currentusedId);

    $db->query(
        'delete from notes where id =:id',
        [
            'id' => $_GET['id']
        ]
    );


    header('location: /notes');
    exit();
} else {






    $note = $db->query(
        'select * from notes where id = :id',
        [
            'id' => $_GET['id']
        ]
    )->findOrFail();



    authorize($note['user_id'] == $currentusedId);
}


view("notes/show.view.php", [
    'heading' => 'Notes',
    'note' => $note
]);
