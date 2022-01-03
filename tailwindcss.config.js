// const defaultTheme = require('tailwindcss/defaultTheme')
// const colors = require("tailwindcss/colors")
// console.log('=======',process.args.purge)

const spacing = { // eslint-disable-line
  // Exact
  e0: '0',
  e1: '1px',
  e2: '2px',
  e3: '3px',
  e10: '10px',
  e15: '15px',
  e16: '16px',
  e20: '20px',
  e25: '25px',
  e30: '30px',
  e36: '36px',
  e40: '40px',
  e50: '50px',
  e60: '60px',
  e70: '70px',
  e75: '75px',
  e80: '80px',
  e90: '90px',
  e100: '100px',
  e110: '110px',
  e120: '120px',
  e130: '130px',
  e150: '150px',
  e160: '160px',
  e170: '170px',
  e180: '180px',
  e220: '220px',
  e240: '240px',
  e260: '260px',
  e275: '275px',
  e280: '280px',
  e256: '256px',
  e300: '300px',
  e330: '330px',
  e350: '350px',
  e380: '380px',
  e460: '460px',
  e480: '480px',
  e500: '500px',
  e510: '510px',
  e530: '530px',
  e585: '585px',
  e490: '490px',
  e600: '600px',
  e625: '625px',
  e640: '640px',
  e645: '645px',
  e660: '660px',
  e670: '670px',
  e700: '700px',
  e710: '710px',
  e740: '740px',
  e750: '750px',
  e990: '990px',

  // Screen
  s80: '80vh',
  s90: '90vh',
  s100: '100vh',

  // Proportional
  '1/10': '10%',
  '1/5': '20%',
  '3/10': '30%',
  '2/5': '40%',
  '1/2': '50%',
  '16/9': '56.25%',
  '3/5': '60%',
  '7/10': '70%',
  '4/5': '80%',
  '9/10': '90%'
}

module.exports = {
  content: [
    './components/*.php',
    './404.php',
    './archive.php',
    './footer.php',
    './functions.php',
    './header.php',
    './index.php',
    './page-home.php',
    './page-styleguide.php',
    './page.php',
    './search.php',
    './searchform.php',
    './sidebar.php',
    './single.php',
    './single-sfuser.php',
    './single-sfcompany.php',
    './single-sfcompanyindex.php',
    './tag.php',
    './templates/*.php',
    './src/js/**/*.js',
    './src/css/**/*.css'
  ],
  theme: {
    screens: {
      'xs': '480px',
      'sm': '640px',
      'md': '768px',
      'lg': '992px',
      'xl': '1024px',
      '2xl': '1280px',
      '3xl': '1440px',
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1.5rem'
      }
    },
    minWidth: {
      // '0': '0',
      // '1/4': '25%',
      // '1/2': '50%',
      // '3/4': '75%',
      full: '100%',
      e240: '240px'
    },
    fontFamily: {
      serif: ['serif'],
      sans: ['Graphie', 'sans']
    },
    fontSize: {
      xs: ['1.2rem', '1.4rem'],
      sm: ['1.4rem', '2.4rem'],
      base: ['1.6rem', '2.1rem'],
      'base-alt': ['1.6rem', '2.4rem'],
      md: ['1.8rem', '2.4rem'],
      'md-alt': ['1.8rem', '3rem'],
      lg: ['2.4rem', '3.6rem'],
      xl: ['2.7rem', '3.6rem'],
      '2xl': ['3.6rem', '4.6rem'],
      '2xl-alt': ['4rem', '4.8rem'],
      '3xl': ['4.2rem', '5rem'],
      '4xl': ['5.4rem', '6rem'],
      '5xl-alt': ['6rem', '7.2rem'],
      '5xl': ['7.2rem', '8.1rem'],
      '6xl': ['9rem', '10.5rem'],
      '7xl': ['10rem', '11.2rem'],
      '8xl': ['15rem', '17.2rem']
    },
    // inset: Object.assign({}, spacing, {
    //   '0': 0,
    //   auto: 'auto',
    //   full: '100%',
    //   p65: '65%',
    //   p85: '85%',
    //   p95: '95%',
    //   '1/2': '50%',
    //   'e45': '45px',
    //   'e30': '30px'
    // }),
    opacity: {
      '0': '0',
      '25': '.25',
      '30': '.3',
      '50': '.5',
      '75': '.75',
      '10': '.1',
      '20': '.2',
      '40': '.4',
      '60': '.6',
      '70': '.7',
      '80': '.8',
      '90': '.9',
      '100': '1'
    },
    zIndex: {
      '0': 0,
      '1': 1,
      '10': 10,
      '20': 20,
      '25': 25,
      '30': 30,
      '40': 40,
      '50': 50,
      '75': 75,
      '100': 100,
      '125': 125,
      '150': 150,
      '200': 200,
      '210': 210,
      '500': 500,
      'auto': 'auto',
    },
    colors: {
      black: '#000000',
      white: '#FFFFFF',
      lynch: '#63779A',
      transparent: 'transparent',
      blue: '#182A35',
      'cadet-blue': '#9FABC4',
      sky: {
        DEFAULT: '#E4EBF1',
        lt: '#73C1D6',
        dk: '#20343A'
      },
      orange: '#FA581E',
      purple: {
        DEFAULT: '#5624D0',
        lt: '#9E82E4'
      },
      magenta: '#B329F9',
    },
    extend: {
      spacing: spacing,
      rotate: {
        // '-45': '-45deg',
        '-90': '-90deg',
        '135': '135deg',
        '-135': '-135deg',
        '-180': '-180deg',
      },
      maxWidth: {
        e120: '120px',
        e490: '490px',
        e880: '880px',
        e1440: '1440px'
      }
    }
  },
  plugins: [
    // require('postcss-import'),
    // require('tailwindcss/nesting'),
    // require('tailwindcss'),
    // require('autoprefixer'),
  ]
}
