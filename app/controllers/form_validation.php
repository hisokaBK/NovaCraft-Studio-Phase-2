<?php

    $_SESSION['error']=[
        'name'=>'',
        'email'=>'',
        'message'=>''
    ];

    $_SESSION['ok']="";

   
    $comp=0;
    
    $name=$_POST['nom'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    if(empty($name)){
        $_SESSION['error']['name']='name is required';
        $comp=0;
    }elseif(!preg_match("/^[a-zA-Z\s]{2,50}$/",$name)){
           $_SESSION['error']['name']='name must contain 5 characters and just alphabte';
        $comp=0;
    }else{
        $_SESSION['error']['name']='';
        $comp++;
    }

    if(empty($email)){
        $_SESSION['error']['email']='email is required';
        $comp=0;
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $_SESSION['error']['email']='email invalid';
        $comp=0;
    }elseif(!preg_match("/^[a-zA-Z0-9._]{4,}@[a-zA-Z]{3,9}.[a-zA-Z]{3,9}$/",$email)){
        $_SESSION['error']['email']='EX : example_123@gmail.com';
        $comp=0;
    }else{
         $_SESSION['error']['email']='';
         $comp++;
    }

    if(empty($message)){
        $_SESSION['error']['message']='message is required';
        $comp=0;
    }elseif(strlen($message)<8){
       $_SESSION['error']['message']='message must contain 8 characters';
        $comp=0;
    }else{
         $_SESSION['error']['message']='';
        $comp++;
    }
   
    if($comp==3){
        $_SESSION['valid']=[
        'name'=>$name,
        'email'=>$email,
        'message'=>$message
    ];

    $_SESSION['ok']='message envoyer';

     $stmt = $conn->prepare(
         "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)"
     );
     $stmt->bind_param("sss",$name, $email, $message);
     $stmt->execute();
     require_once "../app/views/contact.view.php";
    exit();
  }
    $_SESSION['ok']='';
   require_once "../app/views/contact.view.php";


?>