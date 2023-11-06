/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["*.{html,php,js}"],
    theme: {
        colors: {
            blue: {
                primary: "var(--color-blue)",
                dark: "var(--color-dark-blue)"
            },
            orange: 'var(--color-orange)',
            peach: 'var(--color-peach)',
            gray: {
                primary: "var(--color-gray)",
                dark: "var(--color-dark-gray)",
                light: "var(--color-light-gray)"
            },
            white: "#fff"
        },
        fontFamily: {
            secondary: ['Poppins', 'sans-serif'],
            primary: ['Roboto Condensed', 'sans-serif']
        },
        extend: {},
    },
    plugins: []
}