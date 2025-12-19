
<!DOCTYPE html>
<html lang="fr">
<head> 
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title> <?php echo $title ?> </title>
  <link rel="stylesheet" href="assets/output.css">
</head>
<body class="bg-gray-50 text-gray-800">

  <?php 
  require_once('../app/templates/header.temp.php') ;

  require_once('../app/templates/contactSection.temp.php');

  require_once('../app/templates/footer.temp.php')
  
  ?>
  
</body>
</html>