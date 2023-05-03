<?php
require('config.php');
require('src/modules/topper.php');
require('src/modules/css.php');
$title = "Producto";
?>
<title>
  <?php echo $title ?>
</title>

<body>
  <?php
  require('src/modules/nav.php');
  ?>
  <div>


    <div class="grid md:grid-cols-3 grid-cols-2 container">

      <div class="col-span-2 mb-4">
        <img src="src/imagenes_example/600X600.png" alt="" srcset="">
        <div>

        </div>
      </div>
      <div class="">
        <input type="text" value="0" min="0" max="999" aria-valuemin="0" aria-valuemax="999" maxlength="3">
        <button class="">anadir al carrito</button>
        <button disabled="disabled">quitar</button>
        
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