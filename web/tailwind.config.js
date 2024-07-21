/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./static/**/*.{html,php,js,ts,jsx,tsx,mdx,css}"
  ],
  variants: {
    textColor: ["hover", "group-hover"],
    backgroundImage: ["hover", "group-hover"],
  },
  safelist: [
    'btn-arrow-left',
    'btn-arrow-right',
    {
      pattern: /(bg|text|p|pt|pl|pr|pb|px|py|mt|ml|mr|mb|mx|my|bottom|top|left|right|max-w|max-h|min-w|min-h)-./,
      variants: ['sm', 'md', 'lg', 'xl', 'xxl'],
    }
  ],
  theme: {
    screens: {
      sm: '375px',
      md: '768px',
      lg: '1024px',
      xl: '1200px',
      xxl: '1300px',
    },
    borderWidth: {
      DEFAULT: '1px',
      '0': '0',
      '1': '1px',
      '2': '2px',
      '3': '3px',
      '4': '4px',
      '6': '6px',
      '8': '8px',
    },
    backgroundImage: {
      'icon-chevron': "url('/static/images/icons/icon-chevron.svg')",
      'icon-chevron-primary': "url('/static/images/icons/icon-chevron-primary.svg')",
      'icon-facebook': "url('/static/images/icons/icon-facebook.svg')",
      'icon-instagram': "url('/static/images/icons/icon-instagram.svg')",
      'icon-twitter': "url('/static/images/icons/icon-twitter.svg')",
      'icon-pinterest': "url('/static/images/icons/icon-pinterest.svg')",
    },
    fontFamily: {
      dmsans: ['"Inter"', '"sans-serif"'],
    },
    extend: { 
      fontSize: {
        xxs: '10px',
        xs: '12px',
        s: '14px',
        sm: '16px',
        md: '18px',
        lg: '20px',
        base: '16px',
        xl: '48px',
        xxl: '96px',
        'lead': '24px',
        'h1': '56px',
        'h2': '32px',
        'h3': '24px',
      },
      colors: {
        'transparent': 'transparent',
        'primary': '#0E202C',
        'lightWhite': '#f8f8f9', 
        'fontGrey': '#DAD0C9',
        'cnGrey': '#D2D6D5',
        'cnCream': '#F1EEE6',
        'superBlue': '#122529',
        'cnBlue': '#81D1E0',
      },
      backgroundSize: {
        '100': '100%',
      }
    },
  }, 
  plugins: [
    require('daisyui'),
    require('flowbite/plugin')
  ],
  daisyui: {
    themes: false,
    darkTheme: false,
    base: true,
    styled: true,
    utils: true,
    rtl: false,
    prefix: "",
    logs: true,
  },
}