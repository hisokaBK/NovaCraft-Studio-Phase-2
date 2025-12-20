<?php

if (!isset($_SESSION['user'])) {
    header("Location: /login");
    exit();
}


$allUsers = $conn->prepare("SELECT id, name, email, created_at,role FROM users");
$allUsers->execute();
$resultUsers = $allUsers->get_result();
$users = $resultUsers->fetch_all(MYSQLI_ASSOC);


$compAll_users=$conn->prepare("SELECT count(*) as allusers FROM users");
$compAll_users->execute();
$resultComp=$compAll_users->get_result();
$comp = $resultComp->fetch_assoc();


$stmtMsg = $conn->prepare(
    "SELECT id, name, email, message, send_at 
     FROM contacts 
     ORDER BY send_at DESC"
);
$stmtMsg->execute();
$resultMsg = $stmtMsg->get_result();
$messages = $resultMsg->fetch_all(MYSQLI_ASSOC);

$compAll_messages =$conn->prepare("SELECT count(*) as allMessages FROM contacts");
$compAll_messages->execute();
$message_result=$compAll_messages->get_result();
$allMessages=$message_result->fetch_assoc();


require_once "../app/views/dashboard.view.php";
