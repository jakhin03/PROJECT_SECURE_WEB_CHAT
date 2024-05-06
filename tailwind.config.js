/** @type {import('tailwindcss').Config} */
export default {
    content: [
        // You will probably also need these lines
        "./resources/**/**/*.blade.php",
        "./resources/**/**/*.js",
        "./app/View/Components/**/**/*.php",
        "./app/Livewire/**/**/*.php",

        // Add mary
        "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
    ],
    theme: {
        extend: {},
    },

    daisyui: {
        themes: [
          {
            mytheme: {
            
   "primary": "#00215E",
            
   "secondary": "#2C4E80",
            
   "accent": "#10439F",
            
   "neutral": "#F3CA52",
            
   "base-100": "#FFF5E0",
            
   "info": "#0A6847",
            
   "success": "#7ABA78",
            
   "warning": "#FFC55A",
            
   "error": "#FC4100",
            },
          },
        ],
      },

    // Add daisyUI
    plugins: [require("daisyui")]
}
