/**
 * Mirror of the former Tailwind Play CDN config that lived inline in
 * includes/header.php, plus the same plugins the CDN build was loaded with
 * (forms, typography; aspect-ratio and line-clamp are core in v3.4).
 */
module.exports = {
  content: [
    '../../*.php',
    '../../includes/**/*.php',
    '../../areas-we-serve/**/*.php',
    '../../template-parts/**/*.php',
    '../../script.js',
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          purple: '#603177',
          purpleLight: '#7A4D8F',
          orange: '#F48F12',
          orangeHover: '#D67A0A',
          dark: '#1F2937',
        },
      },
      fontFamily: {
        sans: ['Montserrat', 'sans-serif'],
        body: ['Open Sans', 'sans-serif'],
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0', transform: 'translateY(-4px)' },
          '100%': { opacity: '1', transform: 'none' },
        },
      },
      animation: {
        fadeIn: 'fadeIn 0.3s ease-in-out',
      },
    },
  },
  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
