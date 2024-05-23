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
        'footer': '1rem',
      },
      animation: {
        'spin-slow': 'spin 2s linear infinite',
      },
      screens: {
        'computer': '1900px',
        'laptop': '1440px',
        'tablet': '768px',
      }
    },
  },
  plugins: [],
}
