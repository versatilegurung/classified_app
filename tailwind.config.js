/** @type {import('tailwindcss').Config} */
export default {
  content: [
<<<<<<< HEAD
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
=======
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
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
}