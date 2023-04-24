<script>

<?php 
for ($i=0; $i < 16; $i++) { 
    # code...

?>

const input_<?php echo $i ?> = document.getElementById("diag_anime_<?php echo $i ?>");

const input_<?php echo $i ?>_quitar = document.getElementById("quitar_<?php echo $i ?>");

const input_<?php echo $i ?>_poner = document.getElementById("poner<?php echo $i ?>");


const input_<?php echo $i ?>_quitar_<?php echo $i ?> = () => {
    if (input_<?php echo $i ?>.value > 0) {
        input_<?php echo $i ?>.value = input_<?php echo $i ?>.value - 1;
        input_<?php echo $i ?>.classList.add("restar");
        setTimeout(() => {
    input_<?php echo $i ?>.classList.remove("restar");
        }, 3000);
    }
}



const input_<?php echo $i ?>_poner_<?php echo $i ?> = () => {
   // console.log(true);
    if (input_<?php echo $i ?>.value < 9999) {
        input_<?php echo $i ?>.value = parseInt(input_<?php echo $i ?>.value) + 1;
        input_<?php echo $i ?>.classList.add("sumar");
        setTimeout(() => {
            input_<?php echo $i ?>.classList.remove("sumar");
        }, 3000);
    }
}

const equilibrar<?php echo $i ?> = () => {
   
   if (input_<?php echo $i ?>.value > 9999) {
       input_<?php echo $i ?>.value=9999;
   }

   if (input_<?php echo $i ?>.value < 0) {
       input_<?php echo $i ?>.value=0;
   }
}


input_<?php echo $i ?>.addEventListener('change',equilibrar<?php echo $i ?>);



input_<?php echo $i ?>_quitar.addEventListener("click", input_<?php echo $i ?>_quitar_<?php echo $i ?>);
input_<?php echo $i ?>_poner.addEventListener("click", input_<?php echo $i ?>_poner_<?php echo $i ?>);
    
<?php
}
?>

</script>