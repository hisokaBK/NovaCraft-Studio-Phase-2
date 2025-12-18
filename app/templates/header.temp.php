<header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4 px-[5%]">
      <h1 class="text-2xl font-bold text-blue-600">D-<span class="text-blue-400 font-thin">Wave</span> </h1>
      <ul class="flex space-x-6">
        <li><a href="/home"
               class="<?php echo $_SERVER['REQUEST_URI']=='/home'?'text-blue-600 font-medium':'hover:text-blue-600' ?>">home</a></li>

        <li><a href="/services"
              class="<?php echo  $_SERVER['REQUEST_URI']=='/services'?'text-blue-600 font-medium':'hover:text-blue-600'?>">Services</a></li>

        <li><a href="/about"
             class="<?php echo  $_SERVER['REQUEST_URI']=='/about'?'text-blue-600 font-medium':'hover:text-blue-600' ?>">À propos</a></li>
             
        <li><a href="/contact"
             class="<?php echo  $_SERVER['REQUEST_URI']!='/contact'?'text-black hover:text-blue-600':'text-blue-600 font-medium' ?>">Contact</a>
        </li>
      </ul>
      <ul class="flex space-x-6">
          <li><a href="/login"
             class="<?php echo  $_SERVER['REQUEST_URI']!='/login'?'text-black hover:text-blue-600':'text-blue-600 font-medium' ?>">Sing in</a>
          </li>
          <li><a href="/register"
             class="<?php echo  $_SERVER['REQUEST_URI']!='/register'?'text-black hover:text-blue-600':'text-blue-600 font-medium' ?>">Sing up</a>
          </li>
      </ul>
    </nav>
  </header>