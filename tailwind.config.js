/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [        
  './index.php',
  './src/**/*.{php,js}',
  './*.{php}',
  './index.html',

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
      'screen2':'50vw'
    },
    height:{
      'screen2':'50vh',

    },
    maxHeight:{
      '50':'500px'
    },
    minHeight:{
      '50':'300px'
    }

    },
    container: {
      center: true,
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}