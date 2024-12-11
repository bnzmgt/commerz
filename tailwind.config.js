/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
    purge: {
        content: ['./**/*.php', './**/*.html', './src/**/*.js'],
        options: {
            safelist: ['dynamic-font'], // Add your dynamic classes here
        },
    },
  theme: {
    
    extend: {
        fontFamily: {
            //sans: ['Outfit', 'sans-serif'],
            sans: ['Roboto', ...defaultTheme.fontFamily.sans],
        },
        colors: {
            'primary': '#364D59',
            'orange': '#FA812F',
            'yellow': '#FAB12F',
            'tosca': '#91DDCF',
            'maroon': '#CC2B52',
            'blue-light': '#27AAE1',
        },
    },
  },
  plugins: [],
}

