<!-- cards-->
<div class="grid grid-cols-<?php echo $columnassm ?> md:grid-cols-4 sm:grid-cols-<?php echo $columnassm ?>  container">
<?php 
for ($i=0; $i < $cards; $i++) { 
  # code...

?>

    <div class="container w-10/12 my-4 border-2 border-gray-800 rounded-lg  drop-shadow-lg">
      <div class="bg-sky-500 h-10 flex flex-col place-content-center text-center rounded-t-md">
        <h3 class="text-xl text-center place-items-center">titulo</h3>
      </div>
      <div class="flex justify-center flex-col items-center">
        <img class="" src="src/imagenes_example/600X600.png" alt="" srcset="" />
        <!--<p class="text-center my-0">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore hic laudantium facere fugit aut, distinctio doloremque, mollitia magni libero repudiandae quidem corporis? Ad quidem ipsum ducimus inventore, aspernatur pariatur nesciunt.
        </p>-->
        <div class="grid grid-cols-3 h-12">
          <button id="quitar_<?php echo $i ?>" class="hover:bg-red-400 bg-red-200 flex justify-center flex-col items-center rounded-bl-md">
            
            <div class="w-8 h-8 p-1 bg-red-700 text-center rounded-full border-2 border-black flex justify-center">
              <svg class="fill-orange-600 stroke-violet-100" version="1.1" viewBox="0 0 11.311 1.5875"
                xmlns="http://www.w3.org/2000/svg">
                <g transform="translate(-50.982 -107.88)">
                  <text x="50.387096" y="117.80645" fill="#000000" font-family="'MS Gothic'" font-size="25.4px"
                    xml:space="preserve">
                    <tspan x="50.387096" y="117.80645">-</tspan>
                  </text>
                </g>
              </svg>
            </div>

          </button>
            <input id="diag_anime_<?php echo $i ?>" name="publicacion<?php echo $i ?>"
            class="text-center rounded-sm border-2 border-gray-700/10 active:bg-blue-200 focus:bg-blue-200  appearance-none"
            type="number" value="0" min="0" />
  
            <button id="poner<?php echo $i ?>" class="hover:bg-green-500 bg-green-300 flex justify-center flex-col items-center rounded-br-md">  
              <div  class="w-8 h-8 p-1 bg-green-700 text-center rounded-full border-2 border-black flex justify-center">
             <svg class="fill-orange-600 stroke-violet-100" version="1.1" viewBox="0 0 11.41 11.311"
                xmlns="http://www.w3.org/2000/svg">
                <g transform="translate(-76.176 -131.76)" fill="#f9f9f9" font-family="'Lucida Console'">
                  <text transform="scale(.26458)" font-size="96px" style=" white-space: pre" />
                  <text x="75.580643" y="146.54839" font-size="25.4px">
                    <tspan x="75.580643" y="146.54839" fill="#000000" font-family="'MS Gothic'">
                      +
                    </tspan>
                  </text>
                </g>
              </svg>
            </div>
          </button>
        </div>
      </div>
    </div>
     <?php } ?>
  </div>
  