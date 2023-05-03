<?php
    require('config.php');
    require('src/modules/topper.php');
    require('src/modules/css.php');
    $combo =[6];
    $titulo_combo=["Resumen"];
    $title="carrito";
?>
  <title> <?php echo $title ?></title>
<body>
<?php
    require('src/modules/nav.php');
?> 


<?php

    require('src/modules/card_list.php')

?>


<?php

$combo =[1];
$titulo_combo=["subtotal"];
require('src/modules/card_list.php')

?>
<div class="flex items-center justify-center">
<button class="bg-blue-600 w-6/12 md:w-4/12 lg:w-2/12 h-16 m-5" >comprar</button>
</div>
<?php
    require('src/modules/footer.php');
    require('src/modules/js.php');
    #require('src/modules/script.php');
  ?>

</body>

</html>