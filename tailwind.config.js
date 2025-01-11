const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                dark: {
                    'eval-0': '#151823',
                    'eval-1': '#222738',
                    'eval-2': '#2A2F42',
                    'eval-3': '#2C3142',
                },
            },

            keyframes: {
                title: {
                    '0%': { opacity: '0', transform: 'translateX(-50px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
            },
            animation: {
                title: 'title 1s ease forwards',
                'title-delay-0': 'title 1s ease forwards 0s',
                'title-delay-1': 'title 1s ease forwards 0.2s',
                'title-delay-2': 'title 1s ease forwards 0.4s',
                'title-delay-3': 'title 1s ease forwards 0.6s',
                'title-delay-4': 'title 1s ease forwards 0.8s',
                'title-delay-5': 'title 1s ease forwards 1s',
                'title-delay-6': 'title 1s ease forwards 1.2s',
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        plugin(function ({ addUtilities }) {
            addUtilities({
                '.animate-title': {
                    '@apply opacity-0': {},
                    animation: 'title 1s ease forwards',
                },
            });
        }),
    ],
};
