<?php
require('config.php');
require('src/modules/topper.php');
require('src/modules/css.php');
require('src/modules/datos.php');
$cards = 16;
$title = "Catalogo";
$columnassm=1;
?>
<title>
    <?php echo $title ?>
</title>

<body>
    <?php
    require('src/modules/nav.php');

    ?>
    <div class="flex ">
        <div class="md:w-2/12 ">
            <div id="filter" class="md:w-full w-40 sticky top-24 mb-2 ml-2">
                <div class="relative items-stretch h-80 bg-slate-200 border-gray-500 border-2 rounded-lg flex flex-col ">
                    <p class="inline-block text-2xl mt-2 ml-2 self-center">filtros</p>
                    <p class="inline-block text-inherit mt-4 ml-2">categoria</p>
                    <p class="inline-block text-inherit  ml-2">precio</p>
                    <p class="inline-block text-inherit  ml-2">descuento</p>
                </div>
            </div>
        </div>
        <div class="md:w-10/12">
            <?php require_once('src/modules/card.php'); ?>
        </div>
    </div>

    <?php
    require('src/modules/footer.php');
    require('src/modules/js.php');
    #require('src/modules/script.php');
    ?>