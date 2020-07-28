const { colors } = require('tailwindcss/defaultTheme');

module.exports = {
  purge: [],
  theme: {
    extend: {
      colors: {
        primary: colors.gray
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif']
      },
      customForms: theme => ({
        default: {
          input: {
            
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
