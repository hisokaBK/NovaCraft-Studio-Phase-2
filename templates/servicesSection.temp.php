<?php 

$services_fill=file_get_contents("data/services_list.json") ;

$services=json_decode($services_fill,true);

?>
<section class="container mx-auto py-16 px-4 min-h-[420px]">
    <h2 class="text-3xl font-bold mb-8 text-center">Nos Services</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <?php foreach($services as $service){
          echo "
             <div class='bg-white p-6 shadow-md rounded-lg'>
             <h3 class='text-xl font-bold mb-2'>{$service['title']}</h3>
             <img src='{$service['img']}' alt='eroor'/>
             <p class='text-gray-600'>{$service['description']}</p>
             </div>
          ";
      } ?>
    </div>
</section>