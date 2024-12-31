import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
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
            colors: {
                'background-primary': '#111113',
                'background-secondary': '#19191B',
                'background-tertiary': '#222325',

                'accent-blue': '#F0F5FF',
                'accent-blue-mid': '#1349C3',
                'accent-blue-dark': '#012580',

                'accent-green': '#F5F3F1',
                'accent-green-dark': '#044F30',

                'accent-purple': '#F9F1FE',
                'accent-purple-dark': '#5A0B8E',

                'accent-pink': '#FFF0F9',
                'accent-pink-dark': '#99005E',

                'border-primary': '#292A2E',
                'border-secondary': '#393A40',

                'placeholder': '#6C6E79'
            }
        },
    },

    plugins: [],
};
