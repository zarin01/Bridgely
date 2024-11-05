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
      },
      padding: {
        '6p': '6%',
        '9p': '9%',
      },
      fontFamily: {
          poppins: ['Poppins', 'sans-serif'],
        },
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
        '.fifty-fifty-fancy-split .part': {
          flex: '0 0 50%',
        },
        '.fifty-fifty-fancy-split .part-left::after': {
          content: '""',
          position: 'absolute',
          display: 'block',
          width: '80px',
          height: '30px',
          bottom: '-61px',
          left: '45% !important',
          background: "url('../library/images/icon-bridge.png') no-repeat center center !important",
          backgroundSize: '40px 11px !important',
        },
        '@media (min-width: 960px)': {
          '.fifty-fifty-fancy-split .part-left::after': {
            bottom: 'auto',
            top: '50%',
            marginTop: '-6px',
            left: 'auto',
            right: '0',
            marginRight: '-20px',
          },
        },
            '.committed-to-text-after::after': {
              content: '""',
              position: 'absolute',
              display: 'block',
              width: '1166px',
              height: '77px',
              top: '12px',
              left: '50%',
              marginLeft: '-593px',
              background: "url('../library/images/dot-curve.png') no-repeat center center",
              backgroundSize: '1166px 77px',
            },
      };
      addUtilities(newUtilities, ['responsive', 'hover']);
    }),
  ],
};
