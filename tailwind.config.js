import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import preset from "./vendor/filament/support/tailwind.config.preset";
/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                academic: {
                    950: '#022c22', // Deepest Green (Background)
                    900: '#064e3b', // Surface
                    800: '#065f46', // Cards/Modals
                    700: '#047857', // Borders
                    accent: '#10b981', // Brand Green (Buttons)
                }
            },
        },
    },

    plugins: [forms],
};
