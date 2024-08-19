/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php", //de manera recursiva buscamos todos los archivos .blade.php(buscando vistas etc..)
    "./resources/**/*.blade.js" //igual con los de javascript
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

