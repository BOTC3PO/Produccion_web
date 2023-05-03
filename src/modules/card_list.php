<?php 
for ($s=0; $s < sizeof($combo); $s++) { 
?>

<?php 
if (!in_array("subtotal",$titulo_combo)) {
?>
<div class="text-center my-3"><h2 class="text-3xl"><?php echo $titulo_combo[$s]; ?></h2></div>
<?php
}
?>
<?php 
for ($i=0; $i < $combo[$s] ; $i++) {   
?>
<div class="grid grid-cols-10 container  border-2 border-blue-500 mb-1">
    <?php 
        if (!in_array("subtotal",$titulo_combo)) {
    ?>
    <div class="bg-yellow-300 col-span-2 md:col-span-1 flex justify-center">
        <img class="w-24" src="src/imagenes_example/600x600.png" alt="">
    </div>
    <?php } ?>
    <div class="bg-green-700 h-24  <?php  if (!in_array("subtotal",$titulo_combo)){echo "col-span-4  md:col-span-7";}else{echo "col-span-8";} ?>">
        <?php 
        if (!in_array("subtotal",$titulo_combo)) {
        ?>
        titulo
        <?php
        }else{
        echo $titulo_combo[$s];
        }
        ?>
    </div>
    <?php if(!in_array("subtotal",$titulo_combo)){?>
    <div class="bg-red-600 col-span-2 md:col-span-1 ">cantidad</div>
    <?php } ?>
    <div class="bg-purple-500 <?php if(!in_array("subtotal",$titulo_combo)){ echo "col-span-2 md:col-span-1" ;}else{echo "col-span-2";} ?> ">precio</div>
</div>

<?php 
}};
?>