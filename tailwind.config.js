/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    container: {
      center: true,
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
