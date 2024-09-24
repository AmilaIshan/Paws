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
                poppins: ['Poppins', 'sans-serif'],
            },
            colors: {
              primary: '#FFA500',
              secondary: '#FFCB70',
              third: '#FFFBF4',
            },
            boxShadow: {
                'orange': '0 4px 30px rgba(255, 165, 0, 0.5)', // Customize as needed
              },
        },
    },

    plugins: [forms],
};
