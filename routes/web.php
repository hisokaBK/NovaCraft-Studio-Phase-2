<?php 
session_start();
require_once __DIR__."/../config/dbconnection.php";

$conn = connection();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$basePath =''; 


$route = trim($uri, '/');

if ($route === '') {
    $route = 'home';
}

$list_url = ['home', 'about', 'services', 'contact','form_validation','register','login','controller_register','controller_login','controller_sign_out','profil','dashboard'];

$No_cntroler = ['home', 'about', 'services', 'contact','404','register','login','profil'];

if (!in_array($route, $list_url)) {
    $route = '404';
}


$pageTitles = [
    'home'     => 'Accueil - NovaCraft Studio',
    'about'    => 'À propos - NovaCraft Studio',
    'services' => 'Services - NovaCraft Studio',
    'contact'  => 'Contact - NovaCraft Studio',
    'form_validation' => 'form validation',
    '404'       => 'Page non trouvée',
    'register'  => 'Page register',
    'login'     => 'Page login',
    'controller_register'  => 'controller_register',
    'controller_login'=> 'controller_login',
    'controller_sign_out'=>'controller_sign_out',
    'profil'=>'your profil',
    'dashboard'=>'admin dashboard'
];

$title = $pageTitles[$route];

if(!in_array($route, $No_cntroler)){
     if($route=='dashboard'){
        require_once "../app/controllers/controller_dashboard.php";
        exit();
     }
    require_once "../app/controllers/{$route}.php";
}else{
    require_once "../app/views/{$route}.view.php";
}

