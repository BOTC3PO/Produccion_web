<?php
require('config.php');
require('src/modules/topper.php');
require('src/modules/css.php');
$title = "perfil";
$background = ["from-cyan-500 to-blue-500", "from-blue-400 to-violet-600","from-pink-500 via-red-500 to-yellow-500", " from-green-200 via-green-400 to-purple-700","from-rose-100 to-teal-100"," from-sky-400 to-cyan-300"," from-amber-200 via-violet-600 to-sky-900"];
$direccion=['bg-gradient-to-r',"bg-gradient-to-l","bg-gradient-to-t","bg-gradient-to-b","bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] "];
?>
<title>
  <?php echo $title ?>
</title>

<body>
  <?php
  require('src/modules/nav.php');
  ?>


  <div class="min-h-screen">
    <div class="shadow-lg">
      <div
        class="absolute w-full rounded-xl border-10 border-white h-64 <?php echo $direccion[random_int(0,4)] ; ?>  <?php echo $background[random_int(0,6)] ;?> -z-10 top-16 flex items-center justify-center">
        <h2 class="text-3xl text-black/70  backkdrop-blur-sm backkdrop-hue-rotate-180	m-2">Felix Lennon</h2>
      </div>
      <div class=" flex w-full h-80 items-end">
        <img src="src/imagenes_example/325672.jpg"
          class=" ml-5 w-48 h-48 rounded-full ring-4 ring-slate-100 object-cover object-center	" alt="">
      </div>
      <div class="m-4">
        <div class="flex">
        <img src="src/bandera/ar.svg" class="w-10 shadow-lg rounded border-2 border-black "  alt="">
        <p class="ml-2">Argentina</p>
        </div>
        <div class="my-2">
          <p>Direccion   Av. 9 de Julio s/n, C1043 CABA</p>
        </div>
        <div> 
        <button class="bg-blue-600 text-blue-50 rounded w-24 h-10 mb-10 "> Compras </button>  
        </div>
        <?php
        $admin = $_GET['admin'] ?? null ;
        if ($admin=="1") {
        ?>
        <div>
          <button class="bg-red-600 text-blue-50 rounded w-24 h-10 mb-10 "><a href="admin.php" class="w-full h-full">administrar</a></button>
        </div>

        <?php   } ?>
      </div>
    </div>
    
    <div class="hidden">
            <!--  aqui irian las compras y opciones --->
    </div>
  </div>



  <?php
  require('src/modules/footer.php');
  require('src/modules/js.php');
  #  require('src/modules/script.php');
  
  ?>

</body>

</html>