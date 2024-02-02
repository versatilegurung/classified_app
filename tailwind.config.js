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
        'cream': '#f3f9d2',
      },
    },
  },
  plugins: [
		require("daisyui")
	],
}