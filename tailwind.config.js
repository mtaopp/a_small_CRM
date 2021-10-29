module.exports = {
    purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
     colors:{
        prime: 'rgba(98, 110, 189, 1)',
        second: 'rgba(58, 65, 111, 1)',
        third: 'rgba(47, 97, 128, 1)',
        comp: 'rgba(189, 159, 60, 1)',
        lightblue: 'rgba(170, 223, 255, 1)',
        black: 'rgba(0, 0, 0, 1)',
        white: 'rgba(255, 255, 255, 1)',
    },
     extend: {},
    },
    variants: {
      extend: {},
    },
    plugins: [],
  }
