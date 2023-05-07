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
    <div class="bg-slate-200 col-span-2 md:col-span-1 flex justify-center">
        <img class="w-24" src="<?php echo $dir_producto.''.$producto[$productosid[$i]].'.jpg' ?>" alt="">
    </div>
    <?php } ?>
    <div class="bg-slate-200  h-24 flex justify-center items-center <?php  if (!in_array("subtotal",$titulo_combo)){echo "col-span-4  md:col-span-7";}else{echo "col-span-8";} ?>">
        <?php 
        if (!in_array("subtotal",$titulo_combo)) {
        ?>
        <p><?php echo $titulo[$productosid[$i]]?></p>
        <?php
        }else{
        echo $titulo_combo[$s];
        }
        ?>
    </div>
    <?php if(!in_array("subtotal",$titulo_combo)){?>
    <div class="bg-slate-200  col-span-2 md:col-span-1 flex justify-center items-center ">1</div>
    <?php } ?>
    <div class="bg-slate-200 flex justify-center items-center <?php if(!in_array("subtotal",$titulo_combo)){ echo "col-span-2 md:col-span-1" ;}else{echo "col-span-2";} ?> "><p><?php if(!in_array("subtotal",$titulo_combo)){ echo $precio[$productosid[$i]];}else{echo ( $d= $precio[$productosid[0]]+$precio[$productosid[1]]+$precio[$productosid[2]]);} ?></p></div>
</div>

<?php 
}};
?>