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
        blue: '#263E78',
        yellow: '#FFD700',
        red: '#DA291C'
      },
      spacing: {
        'navbar': '5rem',
        'footer': '5rem',
        'homeTitle': '28rem',
        'homeTitleXL': '35rem',
        'whatsapp_expanded': '22rem',
        'whatsapp_text': '18rem',
      },
      animation: {
        'spin-slow': 'spin 2s linear infinite',
      },
      screens: {
        'laptop': '1440px',
        'tablet': '768px'
      }
    },
  },
  plugins: [],
}
