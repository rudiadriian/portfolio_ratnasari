/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
    ],
    darkMode: 'class', // BARIS INI WAJIB ADA
    theme: {
      extend: {
        colors: {
          'accurate-red': '#ed3969',
        }
      },
    },
    plugins: [],
}
