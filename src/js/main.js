/*import { running } from 'animejs';
import anime from '/node_modules/animejs/lib/anime.es.js';*/
//menu hemburguesa
const test = false;
document.addEventListener('DOMContentLoaded', () => { });
/* llamadas */
const button_hamburguesa = document.getElementById("open_menu");
const hamb_on = document.getElementById("hamb_on");
const hamb_off = document.getElementById("hamb_off");
const hamburguesa_menu = document.getElementById("mobile-menu");
const user = document.getElementById("usuario");
const boton_user = document.getElementById("menu_usuario");
const documento = document.getElementById("overlay");
/* funciones */
const hamburguesa = () => {
    hamb_on.classList.toggle("hidden");
    hamb_off.classList.toggle("hidden");

    if (!hamburguesa_menu.classList.contains("hidden") && !user.classList.contains("hidden")) {
        ovelay_unit(0);
    }

    hamburguesa_menu.classList.toggle("hidden");

    if (!documento.classList.contains("overlay") && !hamburguesa_menu.classList.contains("hidden")) {
        ovelay_unit(1);
    }



    if (user.classList.contains("hidden") == false) {
        user.classList.toggle("hidden");

        ovelay_unit(0);
    }

};
const user_fun = () => {
    if (!user.classList.contains("hidden") && hamburguesa_menu.classList.contains("hidden")) {
        ovelay_unit(0);
        //console.log("false");
    }

    user.classList.toggle("hidden");
    if (!documento.classList.contains("overlay") && !user.classList.contains("hidden")) {
        ovelay_unit(1);
    }

    if (hamburguesa_menu.classList.contains("hidden") == false) {
        hamburguesa_menu.classList.toggle("hidden");
        hamb_on.classList.toggle("hidden");
        hamb_off.classList.toggle("hidden");

        ovelay_unit(0);
    }
};

const power_off = () => {

    ovelay_unit(0);

    if (user.classList.contains("hidden") == false) {
        user.classList.toggle("hidden");
    }

    if (hamburguesa_menu.classList.contains("hidden") == false) {
        hamburguesa_menu.classList.toggle("hidden");
        hamb_on.classList.toggle("hidden");
        hamb_off.classList.toggle("hidden");
    }
}

boton_user?.addEventListener("click", user_fun);

button_hamburguesa?.addEventListener("click", hamburguesa);

documento?.addEventListener("click", power_off);

if (test) {
    //test button
    const talk = () => alert("texto");
    button_hamburguesa?.addEventListener("click", talk)
}
//end

function ovelay_unit(z) {
    switch (z) {
        case 0:
            documento.classList.remove("overlay");
            documento.classList.add("invisible");
            //console.log("off");
            break;

        case 1:

            documento.classList.add("overlay");
            documento.classList.remove("invisible");
            // console.log("on");
            break;
    }
}

/*
const input_1 = document.getElementById("diag_anime_1");

const input_1_quitar = document.getElementById("quitar_1");

const input_1_poner = document.getElementById("poner1");


const input_1_quitar_1 = () => {
    if (input_1.value > 0) {
        input_1.value = input_1.value - 1;
        input_1.classList.add("restar");
        setTimeout(() => {
    input_1.classList.remove("restar");
        }, 3000);
    }
}



const input_1_poner_1 = () => {
    console.log(true);
    if (input_1.value < 9999) {
        input_1.value = parseInt(input_1.value) + 1;
        input_1.classList.add("sumar");
        setTimeout(() => {
            input_1.classList.remove("sumar");
        }, 3000);
    }
}

const equilibrar1 = () => {
   
    if (input_1.value < 9999) {
        input_1.value=9999;
    }

    if (input_1.value > 0) {
        input_1.value=0;
    }
}


input_1.addEventListener('onchange',equilibrar1);
input_1_quitar.addEventListener("click", input_1_quitar_1);
input_1_poner.addEventListener("click", input_1_poner_1);
*/
//anime





