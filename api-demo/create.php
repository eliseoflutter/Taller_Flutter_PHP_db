<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
include "../api-demo/db.php";


$name = $_POST['name'];
$age = (int) $_POST['age'];

$stmt = $db->prepare("INSERT INTO student (name, age) VALUES (?, ?)");
$result = $stmt->execute([$name, $age]);

echo json_encode([
'success' => $result
]);
