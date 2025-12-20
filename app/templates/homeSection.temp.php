<section class="container mx-auto py-8 text-center min-h-[520px] pb-5 "> 
      <?php echo isset($_SESSION['hello'])?"<p id='flashMsg' class=' text-white border border-cyan-600 w-[190px] rounded-2xl bg-sky-700 h-14 pt-4  shadow-[0px_0px_14px_black] ' >{$_SESSION['hello']}</p>":'' ?>
    
    <h2 class="text-4xl font-bold mb-6  text-sky-600">Propulsez votre entreprise vers le digital</h2>
    <div class="flex justify-center m-4">
      <img src="assets/images/web2.gif" alt="kfgmvcl," class="h-[324px] rounded-full border border-cyan-500 border-y-2">
    </div>
    <p class="text-lg mb-8 text-gray-600">Création de sites Web, automatisation, solutions digitales sur mesure.</p>
    <a href="/services" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700">Voir nos services</a>
    <?php if(isset($_SESSION['hello'])){unset($_SESSION['hello']);} ?>
</section>