/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "custom-gray": "#2a343d",
                "custom-blue": "#499af9",
                "custom-gray-for-links": "#2f363d",
            },
        },
    },
    plugins: [],
};
