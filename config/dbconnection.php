
<?php
   function connection(){
       $host = "localhost";
       $user = "root";     
       $pass = "bilal@12131414@";          
       $db   ="novacraft";  
       $conn = new mysqli($host, $user, $pass, $db);
       
       if ($conn->connect_error) {
           die("Connexion échouée !!");
       }

       return $conn;
   }
?>