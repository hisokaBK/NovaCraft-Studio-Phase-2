<header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4 px-[5%]">
      <h1 class="text-2xl font-bold text-blue-600">D-<span class="text-blue-400 font-thin">Wave</span> </h1>
      <ul class="flex space-x-6">
        <li><a href="<?php echo isset($_SERVER['PATH_INFO'])?'home':'index.php/home'?>"
               class="<?php echo !isset($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO']=='/home'?'text-blue-600 font-medium':'hover:text-blue-600' ?>">home</a></li>

        <li><a href="<?php echo isset($_SERVER['PATH_INFO'])?'services':'index.php/services'?>"
              class="<?php echo isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO']=='/services'?'text-blue-600 font-medium':'hover:text-blue-600'?>">Services</a></li>

        <li><a href="<?php echo isset($_SERVER['PATH_INFO'])?'about':'index.php/about'?>"
             class="<?php echo isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO']=='/about'?'text-blue-600 font-medium':'hover:text-blue-600' ?>">À propos</a></li>
             
        <li><a href="<?php echo isset($_SERVER['PATH_INFO'])?'contact':'index.php/contact'?>"
             class="<?php echo (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO']!='/contact')||!isset($_SERVER['PATH_INFO']) ?'text-black hover:text-blue-600':'text-blue-600 font-medium' ?>">Contact</a>
        </li>
      </ul>
    </nav>
  </header>