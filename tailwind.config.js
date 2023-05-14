const defaultTheme = require('tailwindcss/defaultTheme');

// @type {import('tailwindcss').Config}
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'quasinegre':'#2c3434',
                'gris':'#645c54',
                'roig':'#ac2c34',
                'grismig':'#a97d71',
                'rosaclar':'#ddbfb2',
                'roigclar':'#ba5349',
                'rosa':'#d49482',
                'grisclar': '#a49494'
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
