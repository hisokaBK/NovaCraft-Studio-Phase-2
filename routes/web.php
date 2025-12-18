<?php 
    session_start();

require_once "../config/dbconnection.php";

$conn = connection();
$stmt = $conn->prepare("SELECT id, name FROM contacts");
$stmt->execute();
$result = $stmt->get_result();
$contacts = $result->fetch_all(MYSQLI_ASSOC);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$basePath = ''; 


$route = trim($uri, '/');

if ($route === '') {
    $route = 'home';
}

$list_url = ['home', 'about', 'services', 'contact','form_validation','register'];

if (!in_array($route, $list_url)) {
    $route = '404';
}


$pageTitles = [
    'home'     => 'Accueil - NovaCraft Studio',
    'about'    => 'À propos - NovaCraft Studio',
    'services' => 'Services - NovaCraft Studio',
    'contact'  => 'Contact - NovaCraft Studio',
    'form_validation'=>'form validation',
    '404'      => 'Page non trouvée',
    'register'=>'Page register',
];

$title = $pageTitles[$route];

if($route=='form_validation'){
    require_once "../app/controllers/form_validation.php";
}else{
    require_once "../app/views/{$route}.view.php";
}

