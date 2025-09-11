// tailwind.config.js
module.exports = {
  theme: {
    extend: {
      keyframes: {
        slideInLeft: {
          "0%": { transform: "translateX(-300px)", opacity: "0" },
          "100%": { transform: "translateX(0)", opacity: "1" },
        },
        slideInRight: {
          "0%": { transform: "translateX(300px)", opacity: "0" },
          "100%": { transform: "translateX(0)", opacity: "1" },
        },
        slideInTop: {
          "0%": { transform: "translateY(-300px)", opacity: "0" },
          "100%": { transform: "translateY(0)", opacity: "1" },
        },
        slideInBottom: {
          "0%": { transform: "translateY(300px)", opacity: "0" },
          "100%": { transform: "translateY(0)", opacity: "1" },
        },
      },
      animation: {
        slideInLeft: "slideInLeft 0.8s ease-out",
        slideInRight: "slideInRight 0.8s ease-out",
        slideInTop: "slideInTop 0.8s ease-out",
        slideInBottom: "slideInBottom 0.8s ease-out",
      },
    },
  },
};
