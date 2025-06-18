// tailwind.config.js
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms'; // <<< PASTIKAN INI ADA

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
            backgroundImage: {
                'login-bg': "url('/storage/image/login-bg.jpg')",
                'hero-bg': "url('/images/hero-bg.jpg')",
            },
            colors: {
                'login-footer-bg-custom': '#1a2e47',
                'footer-text-color': '#ffc107',
                'footer-link-color': '#ffdb58',
            },
        },
    },

    plugins: [forms], // <<< PASTIKAN INI ADA
};