import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
  content: ["./src/**/*.{ts,js}", "./theme/**/*.{php,html}"],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "4rem",
        xl: "5rem",
        "2xl": "6rem",
      },
    },
    fontFamily: {
      heading: ["Roboto", ...defaultTheme.fontFamily.sans],
      body: ["Open Sans", ...defaultTheme.fontFamily.sans],
    },
    colors: {
      dark: "#0d130e",
      light: "#f8faf8",
      oxford: {
        50: "#d9e0e7",
        100: "#cdd5df",
        200: "#b4c1ce",
        300: "#9cacbe",
        400: "#8397ae",
        500: "#6a829e",
        600: "#586e87",
        700: "#485a6f",
        800: "#384656",
        900: "#222a34",
        950: "#171d23",
        DEFAULT: "#384656",
      },
      emerald: {
        50: "#e5f6e8",
        100: "#d5f1db",
        200: "#b7e6c0",
        300: "#99dca6",
        400: "#7ad18b",
        500: "#5cc771",
        600: "#3caf53",
        700: "#2e853f",
        800: "#1f5b2b",
        900: "#113217",
        950: "#0a1d0e",
        DEFAULT: "#5cc771",
      },
    },
    extend: {
      gridTemplateRows: {
        "0fr": "0fr",
        "1fr": "1fr",
      },
      content: {
        empty: '""',
      },
    },
  },
  plugins: [
    require("tailwindcss-full-bleed"),
    require("@tailwindcss/typography"),
  ],
};
