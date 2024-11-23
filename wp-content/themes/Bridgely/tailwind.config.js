/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');

module.exports = {
  mode: 'jit',
  content: [
    './src/**/*.{html,js}',
    './public/index.html',
    './**/*.php',
    './wp-content/themes/Bridgely/**/*.php',
    './wp-content/themes/Bridgely/**/*.js',
    './wp-content/themes/Bridgely/**/*.css',
    './src/**/*.{js,css,html,php}',
  ],
  theme: {
    extend: {
      colors: {
        white: '#FFF',
        black: '#000',
        dark_blue: '#141C29',
        blue: '#2A426B',
        orange: '#D1A129',
        orangehover: '#E0B039',
        tan: '#FFF7DE',
        tan2: '#F5EFE7',
      },
      screens: {
        x500: '500px',
        x640: '640px',
        x840: '840px',
        x960: '960px',
        xl2: '1200px',
        x14: '1400px',
      },
      width: {
        'calc-100-minus-820': 'calc(100% - 820px)',
        'calc-100-minus-420': 'calc(100% - 420px)',
        'calc-100-plus-20': 'calc(100% + 20px)',
        'calc-100-plus-10': 'calc(100% + 10px)',
        'calc-100p-divide-1': 'calc(100%/1)',
        '106p': '106%',
        '120p': '120%',
        '140p': '140%',
        '45p': '45%',
        '50': '50px',
        '70': '70px',
        '175': '175px',
        '360': '360px',
        '400': '400px',
        '500': '500px',
        '620': '620px',
        '700': '700px',
      },
      maxWidth: {
        '290': '290px',
        '380': '380px',
        '500': '500px',
        '610': '610px',
        '710': '710px',
        '840': '840px',
        '880': '880px',
        '1050': '1050px',
        '1210': '1210px',
      },
      height: {
        '77': '77px',
        '500': '500px',
        '700': '700px',
        '850': '850px',
      },
      fontSize: {
        responsive: 'calc(36px + 20 * ((100vw - 320px) / 840))',
        responsive_heading: 'clamp(43px, calc(43px + 124 * ((100vw - 320px) / 1200)), 160px)',
        'calc-32-plus-18': 'calc(32px + 18 * ((100vw - 320px) / 840))',
        '160': '160px',
        '23': '23px',
        '30': '30px',
        '250': '250px',
      },
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
        helvetica: ['"Helvetica Neue"', 'Helvetica', 'Arial', '"Lucida Grande"', 'sans-serif'],
      },
      backgroundPosition: {
        'center-top': 'center top',
      },
      backgroundImage: {
        'choose-your-start': "url('../library/images/partners-support-bg.jpg')",
        'gradiant-image': "url('../library/images/header-gradient.png')",
        'our-pillars': "url('../library/images/our-pillars-bg.jpg')",
      },
      backgroundSize: {
        '160': '160%',
        '130': '130%',
        '110': '110%',
        '100': '100%',
        '4px-244px': '4px 244px',
        '2px-122px': '2px 122px',
      },
      padding: {
        '6p': '6%',
        '9p': '9%',
        '47p': '47%',
        '56p': '56.25%',
        '10px': '10px',
        '140': '140px',
        '120': '120px',
        '245': '245px',
        '280': '280px',
      },
      margin: {
        'minus-6p': '-64px',
      },
      inset: {
        '-10': '-10px',
        '-4': '-4px',
        '-3': '-3px',
        '21': '21px',
        '28': '28px',
        '130': '130px',
        '40p': '40%',
        '26p': '26%',
        '13p': '13%',
        '3p': '3%',
        '0p': '0%',
        '-5p': '-5%',
        '-10p': '-10%',
        '-20p': '-20%',
        '-50p': '-50%',
        'calc-100-minus-10': 'calc(100%-10px)',
      },
      rotate: {
        '45': '45deg',
      },
      borderRadius: {
        '4': '4px',
      },
    },
  },
  plugins: [
    plugin(function({ addUtilities, theme }) {
      const newUtilities = {
        '.text-shadow': {
          textShadow: '0 0 16px rgba(0, 0, 0, 0.5)',
        },
        '.transform-matrix': {
          transform: 'matrix(1, 0, 0, 1, 0, 0)',
        },
        '.btn': {
          position: 'relative',
          display: 'inline-block',
          padding: '2px 17px',
          fontFamily: theme('fontFamily.poppins'),
          fontWeight: 600,
          fontSize: '16px',
          color: theme('colors.white'),
          backgroundColor: theme('colors.orange'),
          borderRadius: theme('borderRadius.4'),
          textAlign: 'center',
        },
        '.animateRise': {
          transform: 'translateY(20px)',
          opacity: '0',
        },
      };

      addUtilities(newUtilities, ['responsive', 'hover']);
    }),
  ],
};
