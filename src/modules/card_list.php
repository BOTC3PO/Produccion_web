<?php 
for ($s=0; $s < sizeof($combo); $s++) { 
?>
<div class="text-center my-3"><h2 class="text-3xl"><?php echo $titulo_combo[$s]; ?></h2></div>
<?php 
for ($i=0; $i < $combo[$s] ; $i++) {   
?>
<div class="grid grid-cols-10 container  border-2 border-blue-500 mb-1">
    <div class="bg-yellow-300 flex justify-center">
        <img class="w-24" src="src/imagenes_example/600x600.png" alt="">
    </div>
    <div class="bg-green-700 col-span-5">2</div>
    <div class="bg-red-600 col-span-2">3</div>
    <div class="bg-purple-500 col-span-2">4</div>
</div>

<?php 
}};
?>