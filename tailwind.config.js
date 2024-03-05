/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    container: {
      center: true,
      padding: "1rem",
    },
    extend: {
      colors: {
        "ave-primary": "var(--ave-primary)",
      },
      fontFamily: {
        helvetica: ["HelveticaMedium", "sans-serif"],
      },
    },
  },
  plugins: [],
};
