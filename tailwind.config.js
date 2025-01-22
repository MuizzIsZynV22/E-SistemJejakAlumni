/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./components/**/*.{html,php}",
    "./public/**/*.{html,php}",
    "./admin/**/*.{html,php}",
    "./src/**/*.{html,js}",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Inria Sans"', 'sans-serif'],
      }
    },
  },
  plugins: [],
}

