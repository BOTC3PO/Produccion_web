<?php
    require('config.php');
    require('src/modules/topper.php');
    require('src/modules/css.php');
    require('src/modules/datos.php');
    $combo =[3];
    $productosid=[9,11,13];
    $titulo_combo=["kit_actualizacion"];
    $title="Recomendaciones";
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
    require('src/modules/footer.php');
    require('src/modules/js.php');
   # require('src/modules/script.php');

  ?>




</body>

</html>