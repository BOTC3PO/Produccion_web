<?php
require('config.php');
require('src/modules/topper.php');
require('src/modules/css.php');
$title = "Contacto";
?>
<title>
  <?php echo $title ?>
</title>

<body>
  <?php
  require('src/modules/nav.php');
  ?>

  <div class="relative mt-8">
    <div class="bg-center	bg-cover bg-yellow-100 -z-10 h-screenfullh flex justify-center md:items-end flex-col md:flex-row bg-fixed ">
      <div
        class="grid grid-cols-1 md:grid-cols-3 bg-gradient-to-t md:from-gray-700 from-50% md:via-transparent via-50% w-full justify-items-center">
        <div class=" bg-slate-50 h-40 w-60 md:shadow-2xl shadow-slate-950 my-2">1</div>
        <div class=" bg-slate-50 h-40 w-60 md:shadow-2xl shadow-slate-950 my-2">2</div>
        <div class=" bg-slate-50 h-40 w-60 md:shadow-2xl shadow-slate-950 my-2">3</div>
      </div> 
    </div>
  </div>
  <div class="container flex justify-center items-center h-screen">
        <form class="flex flex-col w-5/12"> 
          <div class="flex flex-col mt-8" tabindex="1">
            <label  for="username">
              <i class="usericon"></i>Nombre
            </label>
            <input class="drop-shadow-lg form-input border-none" name="username" type="text" placeholder="Jaime" required>
          </div>
          <div class="flex flex-col mt-8" tabindex="2">
            <label for="email">
              <i class="Emailicon"></i>Email
            </label>
            <input class="drop-shadow-lg form-input border-none" name="email" type="text" placeholder="email@domain.com" required>
          </div>
          <div class="flex flex-col mt-8" tabindex="3">
            <label for="message">
              <i class="apolo"></i>Your Message
            </label>
            <textarea class="drop-shadow-lg form-textarea resize-none border-none" name="message" placeholder="mensaje" required></textarea>
          </div>
          <!-- cambiar a sumbit para el segundo parcial-->
          <button type="reset" class="bg-blue-600 mt-8 h-10 w-36 self-center shadow-lg" >Enviar</button>
        </form>
      </div>
      </form>
    </div>
  <?php
  require('src/modules/footer.php');
  require('src/modules/js.php');
  #require('src/modules/script.php');
  ?>




</body>

</html>