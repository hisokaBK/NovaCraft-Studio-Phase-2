<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/output.css">
    <title>Document</title>
</head>
<body class=' pt-32'>
          
         <form class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4 border-t-2 border-blue-700" action="https://formsubmit.co/bilalbakessou99@gmail.com" method="POST">

              
          <div class=" text-2xl font-thin"> are you sure !? </div>
     
            <input type="text" name="nom" placeholder="Votre nom" class="w-full border  px-4 py-2 rounded-lg" value="<?php echo $_SESSION['valid']['name']?>" hidden>
            
            <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg <?php echo $_SESSION['valid']['name']?> "hidden>
       
            <textarea name="message" placeholder="Votre message" class="w-full border px-4 py-2 rounded-lg <?php echo $_SESSION['valid']['name']?>" hidden></textarea>
      
            <div class='flex gap-4' >
                 <a href="../index.php" ><button type="button" class=" bg-blue-600 text-white py-2 rounded-lg hover:bg-red-400 px-8 ">annuler</button></a>
                 <button type="submit" class="w-full bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">Confirmer</button>
      
            </div>
         </form>

  
</body>
</html>