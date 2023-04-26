<?php
    require('config.php');
    require('src/modules/topper.php');
    require('src/modules/css.php');
    $cards=16;
    $title="Catalogo";
?>
  <title> <?php echo $title ?></title>
<body>
<?php
    require('src/modules/nav.php');
?> 
<div class="flex ">
<div class="w-4/12">
    <div id="filter" class="w-60 ">
    <div class="sticky inline-block top-20">
        <p>a</p> 
    </div>
    </div>
</div>
<div class="w-8/12">
    <?php require_once('src/modules/card.php');?>
</div>
</div>


<?php 
    require('src/modules/footer.php');
    require('src/modules/js.php');
    require('src/modules/script.php');
?>
