import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                gray:colors.gray,
                red:colors.red,
                orange:colors.orange,
                lime:colors.lime,
                green:colors.green,
                lightBlue:colors.lightBlue,
                blue:colors.blue,
                indigo:colors.indigo,
                purple:colors.purple,
                violet:colors.violet,

            },
        },
    },

    plugins: [forms, typography, require('@tailwindcss/aspect-ratio'),],
};
