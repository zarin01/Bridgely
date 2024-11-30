/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');

module.exports = {
  mode: 'jit',
  content: [
    './src/**/*.{html,js}',
    './public/index.html',
    './**/*.php',
    './wp-content/themes/Bridgely/*.php',
    './wp-content/themes/Bridgely/**/*.php',
    './wp-content/themes/Bridgely/**/*.js',
    './src/**/*.{js,html,php}', 
  ],
  safelist: [
    {
      pattern: /^bg-(blue|green|yellow|red|purple|pink|indigo|cyan|teal|lime|amber|orange|emerald|violet|fuchsia|rose|sky)-[1-9]00$/,
    },
    {
      pattern: /^text-(blue|green|yellow|red|purple|pink|indigo|cyan|teal|lime|amber|orange|emerald|violet|fuchsia|rose|sky)-[1-9]00$/,
    },
  ],
  theme: {
    extend: {
      colors: {
        primary_orange: '#E0B039',
        custom_gold: '#D1A129',
        primary_white: '#FFF7DE',
        primary_gray: '#141C29',
        black: '#000',
        blue: '#2A426B',
        tan2: '#F5EFE7',
        white: '#FFF',
        manifesto_background: '#151C27',
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
        'calc-100-plus-10': 'calc(100% + 10px)',
        'calc-100p-divide-1': 'calc(100%/1)',
        '115p': '115%',
        '106p': '106%',
        '120p': '120%',
        '140p': '140%',
        '70p': '70%',
        '61p': '61%',
        '30p': '39%',
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
        '550': '550px',
        '610': '610px',
        '624': '624px',
        '710': '710px',
        '840': '840px',
        '880': '880px',
        '950': '950px',
        '1050': '1050px',
        '1210': '1210px',
        'half': '50%',
        'double': '200%',
      },
      maxHeight: {
        '680px': '680px',
      },
      minHeight: {
        '500px': '500px',
        '1000px': '1000px',
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
        'calc-100-minus-320': 'calc(43px + 57 * ( ( 100vw - 320px ) / 960 ))',
        '160': '160px',
        '23': '23px',
        '26px': '26px',
        '28': '28px',
        '40': '40px',
        '48px': '48px',
        '68': '68px',
        '82p': '82px',
        '200': '200px',
        '250': '250px',
      },
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
        UDPGothic: ['BIZ UDPGothic', 'Poppins', 'sans-serif'],
        yellowtail: ["Yellowtail", 'cursive'],
      },
      backgroundPosition: {
        'center-top': 'center top',
      },
      backgroundImage: {
        'choose-your-start': "url('../library/images/partners-support-bg.jpg')",
        'gradiant-image': "url('../library/images/header-gradient.png')",
        'our-pillars': "url('../library/images/our-pillars-bg.jpg')",
        'manifesto-bg': "url('https://bridgely.org/wp-content/themes/Bridgely/library/images/manifesto-section-1-bg.jpg')",
        'manifesto-bottom-bg': "url('../library/images/manifesto-bottom-bg.jpg')",
        'manifesto-footer-bg': "url('../library/images/manifesto-very-bottom-bg.jpg')",
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
        '11p': '11%',
        '47p': '47%',
        '56p': '56.25%',
        '67p': '67%',
        '10px': '10px',
        '100px': '100px',
        '140': '140px',
        '120': '120px',
        '245': '245px',
        '280': '280px',
        'calc-100-minus-608': 'calc(100% - 608px)',
        'calc-100-minus-512': 'calc(100% - 512px)',
        'calc-100-minus-480': 'calc(100% - 480px)',
      },
      margin: {
        'minus-6p': '-64px',
      },
      inset: {
        '-190px': '-190px',
        '-94px': '-94px',
        '-20px': '-20px',
        '-10': '-10px',
        '-4': '-4px',
        '-3': '-3px',
        '-1px': '-1px',
        '21': '21px',
        '28': '28px',
        '130': '130px',
        '40p': '40%',
        '26p': '26%',
        '13p': '13%',
        '10p': '10%',
        '3p': '3%',
        '0p': '0%',
        '-1p': '-1%',
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
      lineHeight: {
        '96%': '96%',
        '100%': '100%',
        '112%': '112%',
        '130%': '130%',
      },
    },
  },
  plugins: [
    plugin(function({ addUtilities, theme }) {
      const newUtilities = {

        /*
         Base Common Classes with Styles not Offered by Tailwind
         */

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
          fontStyle: 'normal',
          fontWeight: 600,
          textDecoration: 'none',
          fontSize: '16px',
          textTransform: 'uppercase',
          textAlign: 'center',
          border: 'none',
          color: theme('colors.white'),
          backgroundColor: theme('colors.custom_gold'),
          borderRadius: theme('borderRadius.4'),
        },

        '.animateRise': {
          transform: 'translateY(20px)',
          opacity: '0',
        },


        /*
         Before and After Classes 
        */  
       
        '.fifty-fifty-fancy-split .part-left::after': {
          content: '""',
          position: 'absolute',
          display: 'block',
          width: '40px',
          height: '11px',
          background: "url('../library/images/icon-bridge.png') no-repeat center center !important",
          backgroundSize: '40px 11px !important',
          bottom: 'auto',
          top: '50%',
          marginTop: '-6px',
          left: 'auto',
          right: '0',
          left: '105% !important',
          marginRight: '-20px',

          
        },

       '@media (max-width: 960px)': {
          '.fifty-fifty-fancy-split .part-left::after': {
            left: '44% !important',
            top: '100% !important',
          },
          
          '.fifty-fifty-fancy-split .part-right': {
            paddingLeft: '0% !important',
            marginTop: '25px',
          },

          '.fifty-fifty-fancy-split .part-left': {
            marginBottom: '0 !important',
            paddingRight: '0 !important',
            
          },



        },
          '.fifty-fifty-fancy-split .part-right': {
            paddingLeft: '9%',
          },

          '.fifty-fifty-fancy-split .part-left': {
            marginBottom: '0',
            paddingRight: '9%',
          },

          '.fifty-fifty-fancy-split .part': {
            flex: '0 0 50%',
          },
      

        '.fifty-fifty-fancy-split .part-left': {
          marginBottom: '121px',
        },

        '.fifty-fifty-fancy-split .part': {
          position: 'relative',
        },
        
        '.committed-to-text::after': {
          position: 'relative',
          overflow: 'hidden',
          marginBottom: '14px',
          textAlign: 'center',
          height: '77px',
          background: "url('../library/images/dot-curve.png') no-repeat center center",
          textTransform: 'uppercase',
          letterSpacing: '2px',
        },
        '@media (min-width: 960px)': {
          '.committed-to-text::after': {
            position: 'relative',
            overflow: 'hidden',
            marginBottom: '14px',
            textAlign: 'center',
            height: '77px',
            textTransform: 'uppercase',
            letterSpacing: '2px',
          },
        },
       


        '.committed-to-text-after::after': {
          content: '""',
          position: 'absolute',
          display: 'block',
          width: '1166px',
          height: '115px',
          left: '50%',
          marginLeft: '-593px',
          background: "url('../library/images/dot-curve.png') no-repeat center center",
          backgroundSize: '1166px 77px',
        },

        '@media (max-width: 1140px)': {
          '.committed-to-text-after::after': {
            width: '100%',
            height: '95px',
            marginLeft: '0',
            left: '0',
            backgroundSize: 'contain',
          },
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


        /* 
        Wordpress Loaded Nav and Menu Classes
        */
       '@media (min-width: 840px)': {
          '#menu-main-navigation li.current-menu-item a::after': {
            content: '""',
            position: 'absolute',
            display: 'block',
            height: '1px',
            width: 'calc(100% - 20px)',
            bottom: '0',
            left: '10px',
            background: '#D1A129',
          },
          '#menu-main-navigation li a':{
          color: '#FFF !important',
        },
        },
        '@media (max-width: 840px)': {

          '#menu-footer-navigation #menu-item-514 a': {
            marginTop: '5px',
          }
        },

        

        '.contact-us-button a': {
          paddingTop: '11px !important',
          padding: '13px 17px !important',
          display: 'inline-block !important',
          color: '#FFF !important',
          backgroundColor: '#E0B039 !important',
          borderRadius: '4px !important', 
        },

        '#menu-footer-navigation #menu-item-345 a, #menu-footer-navigation #menu-item-514 a': {
          paddingTop: '11px !important',
          padding: '13px 17px !important',
          display: 'inline-block !important',
          color: '#FFF !important',
          backgroundColor: '#E0B039 !important',
          borderRadius: '4px !important', 
        },
        
        '#menu-main-navigation li.current-menu-item a': {
          fontWeight: '700',
          color: '#FFF',
        },

        '#mobile-nav-trigger .line': {
          position: 'absolute',
          display: 'block',
          width: '26px',
          height: '2px',
          backgroundColor: '#FFF',
          left: '9px',
          transition: 'all 0.15s ease-in-out',
        },

        '#mobile-nav-trigger.open .line1': {
          top: '21px',
          transform: 'rotate(45deg)',
        },
        '#mobile-nav-trigger.open .line2': {
          opacity: '0',
        },
        '#mobile-nav-trigger.open .line3': {
          top: '21px',
          transform: 'rotate(-45deg)',
        },

        '#menu-item-346 a': {
          padding: '13px 17px',
          display: 'inline-block',
          color: '#FFF',
          background: '#D1A129 !important',
          borderRadius: '4px',
          paddingLeft: '10px',
          marginBottom: '10px',
          width: '100%',
          textAlign: 'center',
        }, 
        '#menu-item-518 a': {
          padding: '13px 17px',
          display: 'inline-block',
          color: '#FFF',
          background: '#D1A129 !important',
          borderRadius: '4px',
          paddingLeft: '10px',
          textAlign: 'center',
        },
        '@media (max-width: 550px)':{
          '#menu-item-346 a': {
              width: '95% !important',
            }, 
            '#menu-item-518 a': {
              width: '95% !important',
            }, 
        },

        '@media (max-width: 839px)': {
          '.primary-navigation-wrapper': {
          position: 'absolute',
          display: 'none',
          top: 'calc(100% - 10px)',
          left: '0',
          padding: '30px 20px',
          width: '100%',
          background: '#fff',
        }, 
        '#menu-main-navigation': {
          position: 'relative',
          marginBottom: '10px',
        },
        '#menu-main-navigation li': {
          position: 'relative',
          display: 'block',
          listStyle: 'none',
          margin: '0',
          padding: '0',
        },
        '#menu-main-navigation li a': {
          position: 'relative',
          display: 'block',
          padding: '11px 0',
          fontFamily: '"Poppins", sans-serif',
          fontStyle: 'normal',
          fontWeight: '500',
          fontSize: '18px',
          lineHeight: '18px',
          textTransform: 'uppercase',
          color: 'black',
          textDecoration: 'none',
          borderBottom: 'none',
        },
        '#menu-item-26 a, #menu-item-24 a': {
          color: 'black !important',
        },

        '#menu-item-346 a': {
          padding: '13px 17px',
          display: 'inline-block',
          background: '#D1A129 !important',
          borderRadius: '4px',
          width: '15%',
          color: '#FFF !important',
          paddingLeft: '10px',
          marginBottom: '10px',
          textAlign: 'center',
        }, 
        '#menu-item-518 a': {
          padding: '13px 17px',
          display: 'inline-block',
          color: '#FFF !important',
          background: '#D1A129 !important',
          borderRadius: '4px',
          width: '32%',
          paddingLeft: '10px',
          textAlign: 'center',
        },
        },
        

        /* 
        Page Template Refusing to Accpet Color Updates, Adding them Here for now until
        I find a fix:
        */
        '.page-header': {
          color: '#2A426B',
        },

        '.full-width-component .content-inner p': {
          marginTop: '25px',
        },

        '.statmenu': {
          backgroundColor: '#fff7e4',
        },
        '.statmenu .statmenu-item a': {
          color: 'black',
          textDecoration: 'underline',
        },

        /* 
        Wordpress Loaded Footer Classes 
        */
       
        '@media (min-width: 840px)': {
          '#footer #menu-footer-navigation li a': {
            padding: '13px 17px',
          },
          '.hover-translate-y-2:hover': {
            transform: 'translateY(-2px)',
          },
        },

        'footer': {
          background: '#141c29'
        },
        'footer a, footer p': {
          color: '#FFF',
        },

        'footer #menu-footer-navigation li a': {
          position: 'relative',
          display: 'block',
          padding: '13px 5px',
          fontFamily: '"Poppins", sans-serif',
          fontStyle: 'normal',
          fontWeight: '500',
          fontSize: '16px',
          lineHeight: '17px',
          color: '#FFF',
          textTransform: 'uppercase',
          border: 'none',
          textDecoration: 'none',
        },

        '#menu-social-navigation #menu-item-33 a': {
          backgroundImage: 'url("../library/images/icon-facebook.png")',
          backgroundRepeat: 'no-repeat',
          backgroundPosition: 'center center',
          backgroundSize: '28px 28px',
          color: 'transparent',
          position: 'relative',
          display: 'block',
          overflow: 'hidden',
          border: 'none',
          TextDecoder: 'none',
          float: 'right',
          width: '50%',
        },

        '#menu-social-navigation #menu-item-34 a': {
          backgroundImage: 'url("../library/images/icon-linkedin.png")',
          backgroundRepeat: 'no-repeat',
          backgroundPosition: 'center center',
          backgroundSize: '28px 28px',
          color: 'transparent',
          position: 'relative',
          display: 'block',
          overflow: 'hidden',
          border: 'none',
          TextDecoder: 'none'
        },

        '#menu-social-navigation #menu-item-35 a': {
          backgroundImage: 'url("../library/images/icon-instagram.png")',
          backgroundRepeat: 'no-repeat',
          backgroundPosition: 'center center',
          backgroundSize: '28px 28px',
          color: 'transparent',
          position: 'relative',
          display: 'block',
          overflow: 'hidden',
          border: 'none',
          TextDecoder: 'none',
          float: 'left',
          width: '50%',
        },

        '#menu-footer-navigation ul li.contact-us-button a': {
          padding: '13px 17px',
          display: 'inline-block',
          color: '#FFF',
          backgroundColor: '#D1A129',
          borderRadius: '4px',
        },


        /* 
        70 30 page styles
        */
        '.default-section-3070 a, .default-page-template a': {
          color: '#d1a129',
        },
        '#poverty-stat': {
          borderBottom: '1px solid #d1a129',
          paddingBottom: '40px',
        },
        '#poverty-stat ul li a': {
          fontSize: '14px',
          fontWeight: '700',
          textDecoration: 'underline',
        },
        '#poverty-stat ul li': {
          listStyleType: 'square',
          marginLeft: '50px',
        },
        '.list-square::marker': {
            color: '#E0B039',
        },
        '#poverty-stat p': {
          marginBottom: '3px',
        },

        '@media (min-width: 960px)': {
          '.default-section-3070 .part-70': {
            width: 'calc(100% - 420px)',
          },

          '.default-section-3070 .part-30': {
            width: '420px',
            paddingRight: '30px',
          },
          '.default-section-3070 .part h3': {
            padding: '20px 0 20px 0',
          },
        },
        '@media (min-width: 840px)': {
          '.default-section-3070 .part-70': {
            position: 'relative',
            paddingLeft: '40px !important',
            width: '55%',
            textAlign: 'left',
            height: 'fit-content',
          },

          '.default-section-3070 .part-30': {
            position: 'relative',
            width: '45%',
            height: 'fit-content',
            paddingRight: '15px',
          },
        },




        /* 
        Organizations Loaded Components Styles
        */

        'a.orange-button, #orange-button': {
          padding: '5px 25px',
          display: 'inline-block',
          color: '#fff',
          backgroundColor: '#d1a129',
          borderRadius: '4px',
          borderBottom: 'none',
          fontWeight: 'bold',
          margin: '10px 0',
          textDecoration: 'none',
        },

        '.three-column-icon-section .committed-to-text': {
          textAlign: 'center',
          textTransform: 'uppercase',
          letterSpacing: '2px',
          '@screen md': {
            textAlign: 'center',
            textTransform: 'uppercase',
            letterSpacing: '2px',
          },
          '&::after': {
            content: '""',
            position: 'absolute',
            display: 'block',
            width: '1166px',
            height: '60px',
            top: '12px',
            left: '50%',
            marginLeft: '-593px',
            background: `url("https://bridgelystg.wpengine.com/wp-content/themes/Bridgely/library/images/dot-curve.png") no-repeat center center`,
            backgroundSize: '1166px 77px',
            '@screen md': {
              backgroundSize: '1166px 77px',
            },
          },
        },


        /* 
        Manifesto Page
        */
        '.manifesto-section-1 p a.orange': {
          display: 'inline',
          fontWeight: '700',
          color: '#D1A129',
          borderBottom: 'none',
          textDecoration: 'none',
        },
        '.manifesto-section-1 p a.orange:hover': {
          textDecoration: 'underline',
        },
        '.manifesto-section-2 p': {
          fontWeight: 400,
        }, 
        '@media (min-width: 840px)': {
          '.manifesto-section-3 .support-cols .col::after': {
            width: '1px !important',
            height: '100% !important',
            bottom: '0 !important',
            left: 'auto !important',
            right: '-25px !important',
          },
        },
      
        '.manifesto-section-3 .support-cols .col::after': {
          content: '""',
          position: 'absolute',
          display: 'block',
          width: '100%',
          height: '1px',
          bottom: '-30px',
          left: '0',
          background: '#D1A129',
          zIndex: '0',
        },

        '.reach-out-simple.manifesto .extra-form-line a': {
          color: '#D1A129',
          textDecoration: 'none',
          border: 'none',
        },

        '.manifesto-signature-wrap .col .line3 span': {
          color: '#D1A129',
        }
       

       
      };
      addUtilities(newUtilities, ['responsive', 'hover']);
    }),
  ],
};