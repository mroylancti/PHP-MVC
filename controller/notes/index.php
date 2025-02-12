<?php



// $config = require base_path('config.php');
// $db = new Database($config['database']);
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);





$notes = $db->query('select * from notes where user_id = 0')->findAll();



view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
