<?php

if (!isset($_SESSION['user'])) {
    header("Location: /login");
    exit();
}

$stmt = $conn->prepare("SELECT id, name, email , created_at FROM users");
$stmt->execute();

$result = $stmt->get_result();
$users = $result->fetch_all(MYSQLI_ASSOC);

$stmtUsers = $conn->prepare("SELECT id, name, email, created_at,role FROM users");
$stmtUsers->execute();
$resultUsers = $stmtUsers->get_result();
$users = $resultUsers->fetch_all(MYSQLI_ASSOC);


$stmtMsg = $conn->prepare(
    "SELECT id, name, email, message, send_at 
     FROM contacts 
     ORDER BY send_at DESC"
);
$stmtMsg->execute();
$resultMsg = $stmtMsg->get_result();
$messages = $resultMsg->fetch_all(MYSQLI_ASSOC);

require_once "../app/views/dashboard.view.php";
