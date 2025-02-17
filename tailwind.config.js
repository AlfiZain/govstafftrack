import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        fontFamily: {
            sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            poppins: "Poppins, sans-serif",
        },
        extend: {
            colors: {
                primary: "#4640DE",
                secondary: "#F6F6FD",
                grey: "#ABB3C4",
                dark: "#121F3E",
                page: "#F8F8FA",
                success: "#2ED16C",
            },
        },
    },

    plugins: [forms],
};
