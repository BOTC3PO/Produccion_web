<?php
    require('config.php');
    require('src/modules/topper.php');
    require('src/modules/css.php');
    $combo =[6,7,9,5];
    $titulo_combo=["Pc_basica","no se","gamer pack","slim"];
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