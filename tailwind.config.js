/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
        },
        colors: {
            "primary": "#1f4b8e",
            "primary-dark": "#102a52",
            "secondary": "#182430",
            "secondary-dark": "#060C11",
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.slate,
            green: colors.emerald,
            purple: colors.violet,
            yellow: colors.amber,
            pink: colors.fuchsia,
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}

