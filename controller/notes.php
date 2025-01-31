<?php


$config = require('config.php');
$db = new Database($config['database']);



$heading = 'My Notes';

$notes = $db->query('select * from notes where user_id = 0')->findAll();
require "views/notes.views.php";
