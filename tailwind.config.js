/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#B7EFC5',
        'secondary': '#EDFEFF',
        'light-80': '#8F8F8F',
        'light-70': '#616161',
      }, 
      fontFamily: {
        hahmlet : ['Hahmlet'],
        Jetbrains: ['JetBrains Mono'],
        inter: ['Inter'],
      },
    },
  },
  plugins: [],
}