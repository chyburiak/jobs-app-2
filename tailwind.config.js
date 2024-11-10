import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                logo: ['Passion One', ...defaultTheme.fontFamily.serif],
            },
            spacing: {
                520: '32.5rem', // 520px
            },
            colors: {
                'blue-650': '#5C73DB',
                'gray-450': '#9FA6B2',
            },
            padding: {
                3.25: '0.813rem', // 13px
            },
        },
    },

    plugins: [forms],
};
