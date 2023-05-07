<?php
    require('config.php');
    require('src/modules/topper.php');
    require('src/modules/css.php');
    require('src/modules/datos.php');
    $adminp=0;
    $title="Panel de administracion";
?>
  <title> <?php echo $title ?></title>
<body>
<?php
  #  require('src/modules/nav.php');
  require('src/modules/admin_panel.php');
?> 

<?php
   # require('src/modules/footer.php');
    require('src/modules/js.php');
    #require('src/modules/script.php');
  ?>

</body>

</html>