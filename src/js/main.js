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

const input_1 = document.getElementById("diag_anime_1");
const input_2 = document.getElementById("diag_anime_2");
const input_3 = document.getElementById("diag_anime_3");
const input_4 = document.getElementById("diag_anime_4");
const input_5 = document.getElementById("diag_anime_5");
const input_6 = document.getElementById("diag_anime_6");
const input_7 = document.getElementById("diag_anime_7");
const input_8 = document.getElementById("diag_anime_8");
const input_9 = document.getElementById("diag_anime_9");
const input_10 = document.getElementById("diag_anime_10");
const input_11 = document.getElementById("diag_anime_11");
const input_12 = document.getElementById("diag_anime_12");
const input_13 = document.getElementById("diag_anime_13");
const input_14 = document.getElementById("diag_anime_14");
const input_15 = document.getElementById("diag_anime_15");
const input_16 = document.getElementById("diag_anime_16");

const input_1_quitar = document.getElementById("quitar_1");
const input_2_quitar = document.getElementById("quitar_2");
const input_3_quitar = document.getElementById("quitar_3");
const input_4_quitar = document.getElementById("quitar_4");
const input_5_quitar = document.getElementById("quitar_5");
const input_6_quitar = document.getElementById("quitar_6");
const input_7_quitar = document.getElementById("quitar_7");
const input_8_quitar = document.getElementById("quitar_8");
const input_9_quitar = document.getElementById("quitar_9");
const input_10_quitar = document.getElementById("quitar_10");
const input_11_quitar = document.getElementById("quitar_11");
const input_12_quitar = document.getElementById("quitar_12");
const input_13_quitar = document.getElementById("quitar_13");
const input_14_quitar = document.getElementById("quitar_14");
const input_15_quitar = document.getElementById("quitar_15");
const input_16_quitar = document.getElementById("quitar_16");

const input_1_poner = document.getElementById("poner1");
const input_2_poner = document.getElementById("poner2");
const input_3_poner = document.getElementById("poner3");
const input_4_poner = document.getElementById("poner4");
const input_5_poner = document.getElementById("poner5");
const input_6_poner = document.getElementById("poner6");
const input_7_poner = document.getElementById("poner7");
const input_8_poner = document.getElementById("poner8");
const input_9_poner = document.getElementById("poner9");
const input_10_poner = document.getElementById("poner10");
const input_11_poner = document.getElementById("poner11");
const input_12_poner = document.getElementById("poner12");
const input_13_poner = document.getElementById("poner13");
const input_14_poner = document.getElementById("poner14");
const input_15_poner = document.getElementById("poner15");
const input_16_poner = document.getElementById("poner16");

const inputs = [input_1,input_2,input_3,input_4,input_5,input_6,input_7,input_8,input_9,input_10,input_11,input_12,input_13,input_14,input_15,input_16]

const inputsp = [input_1_poner, input_2_poner, input_3_poner, input_4_poner, input_5_poner, input_6_poner, input_7_poner, input_8_poner, input_9_poner,input_10_poner, input_11_poner, input_12_poner, input_13_poner, input_14_poner, input_15_poner, input_16_poner];

const inputsq = [input_1_quitar, input_2_quitar, input_3_quitar, input_4_quitar, input_5_quitar, input_6_quitar, input_7_quitar, input_8_quitar, input_9_quitar, input_10_quitar, input_11_quitar, input_12_quitar, input_13_quitar, input_14_quitar, input_15_quitar, input_16_quitar]

const quitar = (vin) => {
    if (inputs[vin].value > 0) {
        inputs[vin].value = inputs[vin].value - 1;
    }
}

const poner = (vin) => {
    if (inputs[vin].value < 9999) {
        inputs[vin].value = parseInt(inputs[vin].value) + 1;
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


const menu_usuariobutton = document.getElementById("carrito");

const menu_usuariofuncion = () => {
    document.location.href = "http://localhost/programacion_web_2/carrito.php";
    console.log(true);
}

menu_usuariobutton?.addEventListener("click", menu_usuariofuncion);
