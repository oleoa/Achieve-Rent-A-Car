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
      spacing: {
        'navbar': '5rem',
        'footer': '5rem',
        'margin': '15rem',
        'whatsapp_expanded': '22rem',
        'whatsapp_text': '18rem',
      },
    },
  },
  plugins: [],
}
