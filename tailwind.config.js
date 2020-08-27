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
          },
          'checkbox, radio': {
            color: theme('colors.gray.700')
          }
        }
      })
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms'),
  ],
  future: {
    removeDeprecatedGapUtilities: true,
  }
}
