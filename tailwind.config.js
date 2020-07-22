const { colors } = require('tailwindcss/defaultTheme');

module.exports = {
  purge: [],
  theme: {
    extend: {
      colors: {
        primary: colors.indigo
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif']
      },
      customForms: theme => ({
        default: {
          input: {
            backgroundColor: theme('colors.gray.100')
          }
        }
      })
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms'),
  ],
}
