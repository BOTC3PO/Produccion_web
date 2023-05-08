<?php
    require('config.php');
    require('src/modules/topper.php');
    require('src/modules/css.php');
    require('src/modules/datos.php');

    $cards=16;
    $columnassm=1;
    $title="Index";
?>
  <title> <?php echo $title ?></title>
<body>
<?php
    require('src/modules/nav.php');
    require('src/modules/foto_inicio.php');
?> 


<!-- cards-->


  <?php
  require('src/modules/card.php'); 
  ?>

  
 

  <?php
    require('src/modules/footer.php');
    require('src/modules/js.php');
    #require('src/modules/script.php');

  ?>




</body>

</html>