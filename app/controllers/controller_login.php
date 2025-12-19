<?php

if (isset($_SESSION['logined'])){
     require_once "../app/views/home.view.php";
     exit();
}

$_SESSION['error'] = [
    'email_log' => '',
    'password_log' => ''
];


$comp = 0;

$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email)) {
    $_SESSION['error']['email_log'] = 'email is required';
    $comp = 0;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error']['email_log'] = 'email invalid';
    $comp = 0;
} else {
    $_SESSION['error']['email_log'] = '';
    $comp++;
}

if (empty($password)) {
    $_SESSION['error']['password_log'] = 'password is required';
    $comp = 0;
}else {
    $_SESSION['error']['password_log'] = '';
    $comp++;
}

if ($comp == 2) {

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        $_SESSION['error']['email_log']='email not found';
        require_once "../app/views/login.view.php";
        exit();
    }

    $user = $result->fetch_assoc();
    $_SESSION['pss']=$user['password'];

    if (!password_verify($password, $user['password']) && $password == $user['password']) {
        $_SESSION['error']['password_log'] = 'incorrect password';
        require_once "../app/views/login.view.php";
        exit();
    }

    $_SESSION['role'] = $user['password'];

    $_SESSION['logined']=true;


    require_once "../app/views/home.view.php";
    exit();
}

require_once "../app/views/login.view.php";
