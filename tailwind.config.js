/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [        
  './index.php',
  './src/**/*.{php,js}',
  '.src/modules/card_list.php',
  '.recomendaciones.php',
  '.contacto.php',
  './*.php',
  './index.html',
  './perfil.php'
    ],
  theme: {
    extend: {
      fontFamily: {
        'icons': ['Social'],
      },
      gridTemplateColumns: {
        // Simple 16 column grid
        '20': 'repeat(20, minmax(0, 1fr))',

        // Complex site-specific column configuration
        'footer': '200px minmax(900px, 1fr) 100px',
    },      gridColumnStart: {
      '13': '13',
      '14': '14',
      '15': '15',
      '16': '16',
      '17': '17',
      '18': '18',
      '19': '19',
      '20': '20',
    },gridColumnEnd: {
      '13': '13',
      '14': '14',
      '15': '15',
      '16': '16',
      '17': '17',
    },gridColumn: {
      'span-16': 'span 16 / span 16',
    },
    stroke:{
      '15':'1.5px'
    },
    width:{
      'screen2':'50vw',
      '95p':'95%',
      '5p':'5%',
      '94p':'94%'
    },
    height:{
      'screen2':'50vh',
      'screenfullh':'80vh',
      '95p':'95%',
      '5p':'5%',
      '94p':'94%'
    },
    maxHeight:{
      '50':'500px'
    },
    minHeight:{
      '50':'300px'
    },
    backgroundImage:{
      'texture1':'url("http://localhost/programacion_web_2/src/imagenes_example/texture1.png")',
      'map':'url("http://localhost/programacion_web_2/src/interface/mapa.png")',
      'textura_beta':'url("http://localhost/programacion_web_2/src/imagenes_example/600X600.png")',
    },
    colors:{
      'Glaucous':'#5F72BE',
    },
    borderWidth:{
      '10':'10px',
    }

    },
    container: {
      center: true,
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}