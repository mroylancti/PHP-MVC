<?php


$config = require('config.php');
$db = new Database($config['database']);



$heading = 'Notes';
$currentusedId = 0;

$note = $db->query(
    'select * from notes where id = :id',
    [
        'id' => $_GET['id']
    ]
)->findOrFail();



authorize($note['user_id'] == $currentusedId);



require "views/note.view.php";
