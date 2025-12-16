<form class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4" action="/novaCraft_Studio/controllers/form_validation.php" method="POST">

      <input type="text" name="nom" placeholder="Votre nom" class="w-full border  px-4 py-2 rounded-lg  <?php echo !empty($_SESSION['error']['name'])?'border-red-500':'' ?>">
      <?php echo !empty($_SESSION['error']['name'])?"<p class='px-4 text-red-400'>".$_SESSION['error']['name']."</p>":"" ?>

      <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg <?php echo !empty($_SESSION['error']['email'])?'border-red-500':'' ?>">
      <?php echo !empty($_SESSION['error']['email'])?"<p class='px-4 text-red-400'>".$_SESSION['error']['email']."</p>":"" ?>

      <textarea name="message" placeholder="Votre message" class="w-full border px-4 py-2 rounded-lg <?php echo !empty($_SESSION['error']['message'])?'border-red-500':'' ?>"></textarea>
      <?php echo !empty($_SESSION['error']['message'])?"<p class='px-4 text-red-400'>".$_SESSION['error']['message']."</p>":"" ?>

      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Envoyer</button>
    </form>

  

    