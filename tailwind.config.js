/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');

module.exports = {
  content: [
    "./inc/**/*.php",
    "./template-parts/**/*.php",
    "./*.php"
  ],
  theme: {
    container: {
      padding: '1rem',
    },
    screens: {
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      // '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    }
  },
  plugins: [
    plugin(function({ addComponents }) {
      addComponents({
        // '.menu-item-has-children': {
        //   '&:hover > .sub-menu': {
        //     display: 'flex'
        //   }
        // },
       '.main-navigation': {
        '&.toggled .nav-menu': {
          display: 'flex',
          'li': {
            'a': {
              fontSize: '1.5rem'
            }
          },
          '.sub-menu': {
            paddingRight: '1rem',
            'li': {
              'a': {
                fontSize: '1.5rem'
              }
            }
          }
        }
      }})
    })
  ],
}