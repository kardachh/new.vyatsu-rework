const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: ["./**/*.php"],
  theme: {
    screens: {
      xs: "475px",
      ...defaultTheme.screens,
    },
    extend: {},
  },
};
