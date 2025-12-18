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
        <li class="hidden"><a href="/contact"
             class="<?php echo  $_SERVER['REQUEST_URI']!='/contact'?'text-black hover:text-blue-600':'text-blue-600 font-medium' ?> ">bord</a>
        </li>
      </ul>
      <ul class="flex space-x-6">
          <li><a href="/login"
             class="<?php echo  $_SERVER['REQUEST_URI']!='/login'?'text-black hover:text-blue-600':'text-blue-600 font-medium' ?>">Sing in</a>
          </li>
          <li><a href="/register"
             class="<?php echo  $_SERVER['REQUEST_URI']!='/register'?'text-black border border-black px-2 py-[2px] rounded-xl hover:text-blue-600 hover:border-blue-600':'text-blue-600 font-medium' ?>">Sing up</a>
          </li>

          <li class="hidden"><a href="/sign_out"
             class="<?php echo  $_SERVER['REQUEST_URI']!='/sign_out'?'text-black hover:text-blue-600':'text-blue-600 font-medium' ?>">sign out</a>
          </li>
          <li class="hidden"><a href="/profil"><img src="assets/prof.png" alt="profil" class=" rounded-full h-[31px] w-[43px]"></a>
          </li>
      </ul>
    </nav>
  </header>