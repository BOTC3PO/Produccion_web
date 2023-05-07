<?php
require('config.php');
require('src/modules/topper.php');
require('src/modules/css.php');
$title = "login";
?>
<title>
  <?php echo $title ?>
</title>

<body>
  <?php
  #    require('src/modules/nav.php');
  ?>


  <div class="h-screen w-screen flex justify-center items-center flex-col">
    <div class="flex justify-center items-center flex-col h-screen w-screen bg-gradient-to-r from-violet-500 to-cyan-500  ">
      <div class="shadow-2xl bg-stone-300/80 md:w-3/12 w-8/12 h-3/6 flex justify-center items-center flex-col">
        <form action="#" class="h-4/6 w-full flex justify-center items-center flex-col">
          <div class="flex flex-col w-10/12">
            <label for="user">usuario</label>
            <input type="text">
          </div>
          <div class="flex flex-col w-10/12">
            <label for="password">Contrasena</label>
            <input type="password">
          </div>
          <div class=" flex justify-center">
          <button class="bg-blue-500 w-28 h-8 m-4" type="submit">Login</button>
          </div>
        </form>
        <div class="flex justify-end items-center">
          <a class="border-b-green-400 border-b-2 my-4 content-end self-center" href="index.php">volver</a>
        </div>
      </div>
    </div>
  </div>

  <?php
  # require('src/modules/footer.php');
  require('src/modules/js.php');
  # require('src/modules/script.php');
  
  ?>
</body>

</html>