/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["../**/*.{html,php,js}"],
    theme: {
        extend: {
            fontFamily: {
              sans: [
                  'suisse-intl'
              ],
              mono: [
                'suisse-intl-mono'
              ],
              condensed: [
                'suisse-intl-cond'
              ],
              works: [
                'suisse-intl-works'
              ]
            }
        },
        screens: {
          '2xl': {'min': '1601px'},
        }
    },
    plugins: []
}
