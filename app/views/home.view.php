<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title> <?php echo $title ?> </title>
 <link rel="stylesheet" href="assets/output.css">
     
  
  
</head>
<body class="bg-gray-50 text-gray-800">

<?php 



  include(__DIR__.'/../templates/header.temp.php');

  include(__DIR__.'/../templates/homeSection.temp.php');

  include(__DIR__.'/../templates/footer.temp.php')

  ?> 

</body>
</html>