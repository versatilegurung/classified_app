/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
  ],
  theme: {
    extend: {
    },
  },
  daisyui: {
    themes: [
      {
        mytheme: {

          "primary": "#3D0B37",
          "secondary": "#63264A",
          "accent": "#121826",
          "neutral": "#F2F2F2",
          "base-100": "#ffffff",
          "info": "#4eb2ff",
          "success": "#296637",
          "warning": "#ffba15",
          "error": "#fa043e",
          
        },

      },
    ],
  },
  plugins: [
    require("daisyui"),
    require('@tailwindcss/typography')
  ],

}