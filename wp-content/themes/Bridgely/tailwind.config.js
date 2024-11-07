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
      screens: {
        xl2: '1200px',
        x960: '960px',
        x840: '840px',
      },      
      colors: {
        primary_orange: '#E0B039',
        custom_gold: '#D1A129',
        primary_white: '#FFF7DE',
        primary_gray: '#141C29',
        black: '#000',
        darkgray: '#141C29',
        blue: '#2A426B',
        darkblue: '#141C29',
        orange: '#D1A129',
        orangehover: '#E0B039',
        tan: '#FFF7DE',
        tan2: '#F5EFE7',
        white: '#FFF',
      },
      width: {
        'calc-100-minus-820': 'calc(100% - 820px)',
        'calc-100-minus-420': 'calc(100% - 420px)',
        'calc-100-plus-20': 'calc(100% + 20px)',
        '140p': '140%',
        '106p': '106%',
        '45p': '45%',
        '360': '360px',
        '400': '400px',
        '620': '620px',
        '700': '700px',
      },
      maxWidth: {
        '610': '610px',
        '840': '840px',
        '1210': '1210px',
      },
      height: {
        '500': '500px',
      },
      fontSize: {
        'responsive': 'calc(36px + 20 * ((100vw - 320px) / 840))',
        'responsive_heading': 'clamp(43px, calc(43px + 124 * ((100vw - 320px) / 1200)), 160px)',
        'calc-32-plus-18': 'calc(32px + 18 * ((100vw - 320px) / 840))',
        '160': '160px',
        '30': '30px',
      },
      backgroundPosition: {
        'center-top': 'center top',
      },
      backgroundImage: {
        'choose-your-start': "url('../library/images/partners-support-bg.jpg')",
      },
      backgroundSize: {
        '160': '160%',
        '130': '130%',
        '110': '110%',
        '100': '100%',
      },
      padding: {
        '6p': '6%',
        '9p': '9%',
        '56p': '56.25%',
        '280': '280px',
        '140': '140px',
      },
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },
      inset: {
        '-10': '-10px',
        '-4': '-4px',
        '-20p': '-20%',
        '-5p': '-5%',
      },
      borderRadius: {
        '4': '4px',
      },
    },
  },
  plugins: [
    plugin(function({ addUtilities }) {
      const newUtilities = {
        '.text-shadow': {
          textShadow: '0 0 16px rgba(0, 0, 0, 0.5)',
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
        '.down-curve-contain': {
          width: 'calc(100% + 20px)',
          top: '-1px',
          left: '-10px',
        },
        '.dotted_bridge': {
          backgroundSize: 'cover',
          backgroundPosition: 'center top',
          padding: '30px 0',
        },
        '.text-point.yes::before': {
          background: 'url("../library/images/Icon_Bridgely-Checkmark.png") no-repeat center center',
          backgroundSize: '34px 32px !important',
        },
        '.text-point.no::before': {
          background: 'url("../library/images/Icon_Bridgely-No.png") no-repeat center center',
          backgroundSize: '34px 32px !important',
        },
        '.text-point::before': {
          content: '""',
          position: 'absolute !important',
          display: 'block !important',
          width: '34px',
          height: '32px',
          left: '0 !important',
          top: '2px !important',
        },
      };
      addUtilities(newUtilities, ['responsive', 'hover']);
    }),
  ],
};
