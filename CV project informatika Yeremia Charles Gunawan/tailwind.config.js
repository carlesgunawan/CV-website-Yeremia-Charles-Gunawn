/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'fitness-red': '#ef4444',
        'fitness-black': '#0a0a0a',
        'fitness-gray': '#1f2937',
      }
    },
  },
  plugins: [],
}
