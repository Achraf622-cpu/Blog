/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./*.php",           // All PHP files in the root directory
      "./**/*.php",        // All PHP files in subdirectories
      "./src/**/*.php",    // Adjust this based on your project structure
      "./components/**/*.php"
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }
  