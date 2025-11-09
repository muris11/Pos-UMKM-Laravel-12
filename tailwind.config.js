/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            animation: {
                "fade-in": "fadeIn 0.3s ease-out",
                "slide-in": "slideIn 0.3s ease-out",
                "pulse-slow": "pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite",
            },
            keyframes: {
                fadeIn: {
                    "0%": { opacity: "0", transform: "translateY(10px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                slideIn: {
                    "0%": { transform: "translateX(-100%)" },
                    "100%": { transform: "translateX(0)" },
                },
            },
        },
    },
    plugins: [],
};
