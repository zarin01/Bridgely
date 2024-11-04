/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');

module.exports = {
  content: [
    './**/*.php',
    './src/**/*.js',
    './src/**/*.css',
    './src/**/*.{html,js}'
  ],
  theme: {
    extend: {
      colors: {
        primary: '#E0B039 !important',
        secondary_white: '#FFF7DE !important',
        darkgray: '#141C29 !important',
      },
      width: {
        'calc-100-minus-820': 'calc(100% - 820px)',
      },
      maxWidth: {
        'screen-xl': '1210px',
        '1210': '1210px',
      },
      fontSize: {
        'responsive': 'calc(36px + 20 * ((100vw - 320px) / 840))',
      },
      backgroundPosition: {
        'center-top': 'center top',
      },
      backgroundImage: {
        'choose-your-start': "url('../library/images/partners-support-bg.jpg')",
        'footer-texture': "url('/img/footer-texture.png')",
      }
    },
  },
  plugins: [
    plugin(function({ addUtilities }) {
      const newUtilities = {
        '.text-shadow': {
          textShadow: '0 0 16px rgba(0, 0, 0, 0.5)',
        },
        '.center': {
          position: 'relative',
          maxWidth: '1210px',
          padding: '0 20px',
          margin: '0 auto',
        },
      };
      addUtilities(newUtilities, ['responsive', 'hover']);
    }),
  ],
};
