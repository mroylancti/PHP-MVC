<?php


$config = require base_path('config.php');
$db = new Database($config['database']);




$currentusedId = 0;

$note = $db->query(
    'select * from notes where id = :id',
    [
        'id' => $_GET['id']
    ]
)->findOrFail();



authorize($note['user_id'] == $currentusedId);



view("notes/show.view.php", [
    'heading' => 'Notes',
    'note' => $note
]);
