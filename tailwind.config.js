const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: ["./**/*.html"],
  theme: {
    screens: {
      xs: "475px",
      ...defaultTheme.screens,
    },
    extend: {},
  },
};
