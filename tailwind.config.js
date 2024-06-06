import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        // "./node_modules/tw-elements/js/**/*.js"
    ],

    theme: {
        container: {
            padding: {
              DEFAULT: '80px'
            }
          },
          
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    screens: {
        sm: '640px',
        md: '768px',
        lg: '960px',
        xl: '1330px',
    },

    boxShadow: {
        custom1: '0px 2px 40px 0px rgba(8, 70, 78, 0.08)',
        custom2: '0px 2px 40px 0px rgba(8, 73, 81, 0.06)',
        custom3: '0px 4.44px 4.44px 0px rgba(0, 0, 0, 0.25)',
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
        // require("tw-elements/plugin.cjs")
    ],
    darkMode: "class"
    
};
