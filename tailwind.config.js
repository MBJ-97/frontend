module.exports = {
  purge: [
    './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {

    colors: {
      worange: '#FDC094',
      blue: '#120C6E',
      greyBlue: '#8D99AE',
      grey: '#7e7e7e',
      wblack: '#2b2d42',
      white: '#ffffff',
      red: '#ff0000'
    },

    boxShadow:{
      shadd: '0px 0px 10px rgba(0, 0, 0, 0.16)',
      hov: '0px 0px 10px rgba(253,192,148)'
    },

    fontFamily: {
      'jost': ['Jost', 'sans-serif']
    },

    container: {
      padding: {
        default: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
      }
    },

    inset: { 
      '1/2': '50%'
    },

  },
  variants: {
    extend: {},
  },
  plugins: [],
}
