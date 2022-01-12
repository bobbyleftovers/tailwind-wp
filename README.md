# Tailwind Theme For WP With a Bunch of Tools 
## Tools
- [Tailwind CSS](https://tailwindcss.com/)
- [PostCSS](https://postcss.org/)
- [Laravel Mix](https://laravel.com/docs/8.x/mix)
- [BEM](http://getbem.com/introduction/)
- [Git Flow](https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow)
- JS Components Loader (hand-rolled!)
## CLI
- `npm run watch`: runs `npx mix watch`, will monitor `/src` and all php files for changes
- `npm run dev`: runs `npx mix` once and closes
- `npm run prod`: runs `npx mix --production`, compiles prod assets
## Adding Components
1. Add PHP template file in `/components`
2. Add CSS file in `/src/css/components` and add import to `/src/css/app.css`
  - **NOTE:** Normal CSS will still compile but this theme uses tailwind so writing your own CSS is less necessary. No mixins or other utils are included apart from tailwinds config file. Component css files are just inteded leverage tailwinds `@apply` directive to clean up the lengthy class lists that would otherwise be in template files.
  - Best practice is to name the css file the same as the php template for easier searching.
3. Add JS file in `/src/js/components` (when js is needed)
  - No need to import these. In the template file add `data-component="{name}"` as an attr. The js file will be loaded once an reinstatiated for subsequent uses. The element the attr is placed on will be passed to the js function or classs per-use.
4. To use, call `get_component({name}, [$args])`
  - Pass the name of the component (filename of php template) as the first parm and a name-indexed array as the second. It will grab that template and break up the array into variables.

## Getting Started
- ***Using SVGs:*** the `svg-defs` component is loaded in the header component. This is where svg icons are stored so all the icons only load once. They are kept off-page and are called by #id using `<?= get_component('svg', ['icon' => 'close', 'classes' => '', 'width' => 20, 'height' => 20, 'viewbox' => '0 0 20 20']) ?>`. The color in most icons is set to currentColor, so it'll take on the color of the tag containing it.
- This theme relies heavily on ACF. The theme will not work without it unless significant changes are made
- Demo is viewable on the home page. It is static html found in `/templates/page-home.php`
- ***JS:*** common utils can be imported form `src/js/lib/utils.js` as needed
- You're not likely to need all the config in `tailwind-congif.js`. Feel free to empty this out and start fresh.
## TODO
- Reorganize components a little:
  - Create folders in `/components`, such as `/components/card/card.php`
  - Move JS/CSS files into these folders
  - Create PostCSS Task to grab all component CSS files instead of importing them individually
- Bash script to create new components
- Create a Carbon Fields version of the theme