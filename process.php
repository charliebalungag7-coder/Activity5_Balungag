<?php
header('Content-Type: application/json');

$users = [
    "1" => ["name" => "Alice", "email" => "alice@example.com"],
    "2" => ["name" => "Bob", "email" => "bob@example.com"],
    "3" => ["name" => "Charlie", "email" => "charlie@example.com"]
];

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (array_key_exists($id, $users)) {
        echo json_encode($users[$id]);
    } else {
        echo json_encode(["error" => "User not found"]);
    }
} else {
    echo json_encode(["error" => "No ID provided"]);
}
?>