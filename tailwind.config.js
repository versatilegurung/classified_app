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
      colors: {
        'primary': '#3d0b37',
        'secondary': '#63264a',
        'cream': '#ced3dc',
        'cbs-gray': '#f2f2f2',
      },
    },
  },
  daisyui: {
    themes: [
      {
        mytheme: {
          "primary": "#3d0b37",
          "secondary": "#63264a",
          "accent": "#facc15",
          "neutral": "#02141b",
          "base-100": "#e8e8e8",
          "info": "#4f46e5",
          "success": "#19b34a",
          "warning": "#d97706",
          "error": "#dc2626",
        },
      },
    ],
  },
  plugins: [
    require("daisyui"),
    require('@tailwindcss/typography')
  ],

}