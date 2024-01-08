/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      colors: {
        flagBlue: '#263E78',
        flagYellow: '#FFD700',
        flagRed: '#DA291C'
      },
    },
  },
  plugins: [],
}
