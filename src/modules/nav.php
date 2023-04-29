<div id="overlay" class="fixed invisible z-30 w-full h-full bg-black/25 top-0"></div>
  <div class="fixed w-full top-0 z-40">
    <div id="fondo_menu"
      class="absolute top-0 bg-gray-900/50 backdrop-blur-xl backdrop-brightness-150 backdrop-contrast-100 backdrop-saturate-150 -z-10 w-full h-full m-0">
    </div>
    <nav class="w-full">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button id="open_menu" type="button"
              class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
              aria-controls="mobile-menu" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <!--
                  Icon when menu is closed.
      
                  Menu open: "hidden", Menu closed: "block"
                -->
              <svg class="block h-6 w-6" id="hamb_on" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!--
                  Icon when menu is open.
      
                  Menu open: "block", Menu closed: "hidden"
                -->
              <svg class="hidden h-6 w-6" id="hamb_off" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex flex-shrink-0 items-center">
              <img class="block h-8 w-auto lg:hidden"
                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" />
              <img class="hidden h-8 w-auto lg:block"
                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" />
            </div>
            <div class="hidden sm:ml-6 sm:block">
              <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href=" <?php if ($title=="Index") {echo "#";}else {echo PathList[0];}   ?> " class="<?php if($title=="Index"){ echo "bg-gray-900" ;}else{echo "hover:bg-gray-700";} ?>  text-white rounded-md px-3 py-2 text-sm font-medium"
                  aria-current="page">Home</a>

                <a href="<?php if ($title=="Catalogo") {echo "#";}else {echo PathList[6];}   ?>"
                  class="text-gray-300 <?php if($title=="Catalogo"){ echo "bg-gray-900" ;}else{echo "hover:bg-gray-700";} ?>  hover:text-white rounded-md px-3 py-2 text-sm font-medium">Catalogo</a>

                <a href="<?php if ($title=="Recomendaciones") {echo "#";}else {echo PathList[7];}   ?>"
                  class="text-gray-300 <?php if($title=="Recomendaciones"){ echo "bg-gray-900" ;}else{echo "hover:bg-gray-700";} ?>  hover:text-white rounded-md px-3 py-2 text-sm font-medium">Recomendaciones</a>

                <a href="<?php if ($title=="Contacto") {echo "#";}else {echo PathList[5];}   ?>"
                  class="text-gray-300 <?php if($title=="Contacto"){ echo "bg-gray-900" ;}else{echo "hover:bg-gray-700";} ?>  hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contacto</a>
              </div>
            </div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <!---bg-gray-800--->
            <button type="button" id="carrito"
              class="rounded-full p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="sr-only">View notifications</span>
              <img src="src/interface/cart.png" alt="" srcset="" width="25" />
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <!--bg-gray-800-->
                <button type="button" id="menu_usuario"
                  class="flex rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                  id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full pointer-events-none" src="src/user_imagenes/default.svg" alt="" />
                </button>
              </div>

              <!--
                  Dropdown menu, show/hide based on menu state.
      
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
              <div
                class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right top-10 rounded-md bg-gray-900/50 py-1 shadow-lg ring-1 border-none ring-black ring-opacity-5 focus:outline-none backdrop-blur-xl backdrop-brightness-150 backdrop-contrast-100 backdrop-saturate-150"
                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" id="usuario" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="<?php echo PathList[2];   ?>" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-0">Perfil</a>
                  <?php
                  $login=true;
                  if ($login) { 
                  ?>
                <a href="<?php echo PathList[3]; ?>" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-2">Login</a>
                  <?php
                  }else{
                  ?>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-2">Sign out</a>
                  <?php
                  }

                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href=" <?php if ($title=="Index") {echo "#";}else {echo PathList[0];}   ?> " class="<?php if($title=="Index"){ echo "bg-gray-900" ;}else{echo "hover:bg-gray-700";} ?>  text-white block rounded-md px-3 py-2 text-base font-medium"
            aria-current="page">Home</a>

          <a href="<?php if ($title=="Catalogo") {echo "#";}else {echo PathList[6];}   ?>"
            class="text-gray-300 <?php if($title=="Catalogo"){ echo "bg-gray-900" ;}else{echo "hover:bg-gray-700";} ?> hover:text-white block rounded-md px-3 py-2 text-base font-medium">Catalogo</a>

          <a href="<?php if ($title=="Recomendaciones") {echo "#";}else {echo PathList[7];}   ?>"
            class="text-gray-300  <?php if($title=="Recomendaciones"){ echo "bg-gray-900" ;}else{echo "hover:bg-gray-700";} ?>  hover:text-white block rounded-md px-3 py-2 text-base font-medium">Recomendaciones</a>

          <a href="<?php if ($title=="Contacto") {echo "#";}else {echo PathList[5];}   ?>"
            class="text-gray-300 <?php if($title=="Contacto"){ echo "bg-gray-900" ;}else{echo "hover:bg-gray-700";} ?> hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contacto</a>
        </div>
      </div>
    </nav>
  </div>
  <!--espacio arriba-->
  <div class="h-20"></div>
