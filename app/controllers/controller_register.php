<?php

$_SESSION['error'] = [
    'name' => '',
    'email' => '',
    'password' => ''
];

$_SESSION['ok'] = "";

$comp = 0;

$name     = $_POST['name'] ?? '';
$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($name)) {
    $_SESSION['error']['name'] = 'name is required';
    $comp = 0;
} elseif (!preg_match("/^[a-zA-Z\s]{2,50}$/", $name)) {
    $_SESSION['error']['name'] = 'name must contain only letters (2–50)';
    $comp = 0;
} else {
    $_SESSION['error']['name'] = '';
    $comp++;
}

if (empty($email)) {
    $_SESSION['error']['email'] = 'email is required';
    $comp = 0;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error']['email'] = 'email invalid';
    $comp = 0;
} elseif (!preg_match("/^[a-zA-Z0-9._]{4,}@[a-zA-Z]{3,9}\.[a-zA-Z]{2,9}$/", $email)) {
    $_SESSION['error']['email'] = 'EX : example_123@gmail.com';
    $comp = 0;
} else {
    $_SESSION['error']['email'] = '';
    $comp++;
}

if (empty($password)) {
    $_SESSION['error']['password'] = 'password is required';
    $comp = 0;
} elseif (strlen($password) < 8) {
    $_SESSION['error']['password'] = 'password must contain at least 8 characters';
    $comp = 0;
} else {
    $_SESSION['error']['password'] = '';
    $comp++;
}

if ($comp == 3) {

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $_SESSION['valid'] = [
        'name'  => $name,
        'email' => $email
    ];

    $_SESSION['ok'] = 'account created successfully';

    $stmt = $conn->prepare(
        "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"
    );
    $stmt->bind_param("sss", $name, $email, $hashedPassword);
    $stmt->execute();

    require_once "../app/views/register.view.php";
    exit();
}

$_SESSION['ok'] = '';
require_once "../app/views/register.view.php";
