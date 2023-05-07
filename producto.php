<?php
require('config.php');
require('src/modules/topper.php');
require('src/modules/css.php');
require('src/modules/datos.php');
$title = "Producto";
$id =(int) $_GET['id'] ?? null;
if ($id<0) {
  $id=$id*-1;
}
if ($id>15) {
  ?>
  <script> location.replace("index.php"); </script>
  <?php
}
$producto_titulo = $titulo[$id];
?>
<title>
  <?php echo $title ?>
</title>

<body>
  <?php
  require('src/modules/nav.php');
  ?>
  <div>


    <div class="grid md:grid-cols-3 grid-cols-2 text-center">

      <div class="col-span-2 mb-4 flex justify-center flex-col">
        <h2 class="text-xl block md:hidden mb-4">
          <?php echo $producto_titulo ?>
        </h2>
        <img src="<?php echo $dir_producto .''.$producto[$id] .'.jpg' ?>" alt="" srcset="">
        <div>

        </div>
      </div>
      <div class="flex flex-col items-center justify-evenly col-span-2 md:col-span-1 h-screen2 md:h-screen">
        <div class="flex flex-col items-center">
          <h2 class="text-xl invisible md:visible">
            <?php echo $producto_titulo ?>
          </h2>
          <p class="min-w-full">
            <br>
          </p>
          <div class="flex justify-center items-center">
            <select name="combo" class="appearance-none border-0 focus:ring-0	shadow-lg focus:shadow-none m-0">
              <option class="ring-2  appearance-none">Ars</option>
              <option class="ring-2  appearance-none">Usd</option>
              <option class="ring-2  appearance-none ">Usdc</option>
            </select>
            <input type="text" disabled class="border-0  m-3 pl-4 w-fit" value="<?php echo $precio[$id] ?>">
          </div>

        </div>
        <div class="flex justify-end items-center flex-col w-full">
          <input class="w-3/6" type="text" value="0" min="0" max="999" aria-valuemin="0" aria-valuemax="999"
            maxlength="3">
          <button class=" border-2 border-x-black border-y-slate-800 bg-blue-600 w-32 h-16 my-4">anadir al
            carrito</button>
          <button
            class="invisible border-2 border-x-black border-y-slate-800 bg-blue-600 w-32 h-16 my-4">quitar</button>
        </div>
      </div>
    </div>

  </div>
  <?php
  require('src/modules/footer.php');
  require('src/modules/js.php');
  #require('src/modules/script.php');
  
  ?>
</body>

</html>