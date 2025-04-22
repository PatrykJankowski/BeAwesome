module.exports = {
  content: ['./**/*.php'],
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      dark: '#0D1E2E',
      'gray-1': '#F6F6F6',
      'gray-2': '#545454',
      'gray-3': '#E2E2E2',
      white: '#fff',
      gold: '#D1AA5F',
      primary: '#D1AA5F',
      secondary: '#093363',
      'text-color': '#0D1E2E'
    },
    container: {
      screens: {
        DEFAULT: '1556px'
      }
    },
    screens: {
      sm: '576px',
      md: '768px',
      lg: '992px',
      xl: '1200px',
      '2xl': '1556px'
    },
    fontFamily: {
      Poppins: ['Poppins'],
      Montserrat: ['Montserrat']
    },
    extend: {
      /*gap: {
        '30': '1.875rem',
      }*/
      /*fontFamily: {
        'sans': ['Source Sans Pro', ...defaultTheme.fontFamily.sans],
      },*/
      backgroundImage: {
        'hero-bg': "url('/wp-content/themes/beawesome/img/hero-bg.webp')",
        'footer-bg': "url('/wp-content/themes/beawesome/img/footer-bg.webp')"
      }
    }
  },
  plugins: []
};
