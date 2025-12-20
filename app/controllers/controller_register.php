<?php

if (isset($_SESSION['logined'])){
     require_once "../app/views/home.view.php";
     exit();  
}

$_SESSION['error'] = [
    'name' => '',
    'email' => '',
    'password' => ''
];

$_SESSION['ok_r'] = "";

$comp = 0;

$name     = $_POST['name'] ?? '';
$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($name)) {
    $_SESSION['error']['name_r'] = 'name is required';
    $comp = 0;
} elseif (!preg_match("/^[a-zA-Z\s]{2,50}$/", $name)) {
    $_SESSION['error']['name_r'] = 'name must contain only letters (2–50)';
    $comp = 0;
} else {
    $_SESSION['error']['name_r'] = '';
    $comp++;
}

if (empty($email)) {
    $_SESSION['error']['email_r'] = 'email is required';
    $comp = 0;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error']['email_r'] = 'email invalid';
    $comp = 0;
} elseif (!preg_match("/^[a-zA-Z0-9._]{4,}@[a-zA-Z]{3,9}\.[a-zA-Z]{2,9}$/", $email)) {
    $_SESSION['error']['email_r'] = 'EX : example_123@gmail.com';
    $comp = 0;
} else {
    $_SESSION['error']['email_r'] = '';
    $comp++;
}

if (empty($password)) {
    $_SESSION['error']['password_r'] = 'password is required';
    $comp = 0;
} elseif (strlen($password) < 8) {
    $_SESSION['error']['password_r'] = 'password must contain at least 8 characters';
    $comp = 0;
} else {
    $_SESSION['error']['password_r'] = '';
    $comp++;
}

if ($comp == 3) {

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $_SESSION['valid'] = [
        'name'  => $name,
        'email' => $email
    ];

    $_SESSION['ok_r'] = 'account created successfully';

    $stmt = $conn->prepare(
        "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"
    );
    $stmt->bind_param("sss", $name, $email, $hashedPassword);
    $stmt->execute();

   header("Location: /login");
  exit();
}

$_SESSION['ok_r'] = '';
require_once "../app/views/register.view.php";
