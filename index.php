<?php
$page ;
if(isset($_SERVER['PATH_INFO'])){
    $page = trim($_SERVER['PATH_INFO'],'/');
}else{
   $page='home';
}

$allowed = ['home','about','services','contact'];

if (!in_array($page, $allowed)) {
    $page = '404';
}
$pageTitles = [
    'home' => 'Accueil - NovaCraft Studio',
    'about' => 'À propos - NovaCraft Studio',
    'services' => 'Services - NovaCraft Studio',
    'contact' => 'Contact - NovaCraft Studio',
    '404' => 'Page non trouvée'
];

$title = $pageTitles[$page];

include_once "views/".$page.'.view.php';

?>