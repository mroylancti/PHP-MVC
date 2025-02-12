<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $db->query("SELECT * FROM notes WHERE id=$id");
            $data = $result->fetch_assoc();
            echo json_encode($data);
        } else {
            $result = $conn->query("SELECT * FROM notes");
            $notes = [];
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
            echo json_encode($notes);
        }
        break;

        // case 'POST':
        //     $note = $input['body'];
        //     $db->query("INSERT INTO notes (name, email, age) VALUES ('$name', '$email', $age)");
        //     echo json_encode(["message" => "User added successfully"]);
        //     break;

    case 'PUT':
        $id = $_GET['id'];
        $body = $input['body'];

        $db->query("UPDATE notes SET name='$body'
                     WHERE id=$id");
        echo json_encode(["message" => "User updated successfully"]);
        break;

    case 'DELETE':
        $id = $_GET['id'];
        $db->query("DELETE FROM notes WHERE id=$id");
        echo json_encode(["message" => "User deleted successfully"]);
        break;

    default:
        echo json_encode(["message" => "Invalid request method"]);
        break;
}

$db->close();
