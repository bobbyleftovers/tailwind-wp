/****
 * Finds the viewbox data attribute on the <symbol> element
 * called from svg-defs and replaces the viewbox on the 
 * current icon with it. Remnoves the need for adding the
 * viewbox param to 'svg' component calls
 */

const svg = el => {
  const defs = document.querySelector('svg#svg-defs')
  const iconID = el.querySelector('use').getAttribute('xlink:href')
  if(defs.querySelector(iconID).dataset.viewbox) {
    el.setAttribute('viewBox', defs.querySelector(iconID).dataset.viewbox)
  }
}

export default function (el) {
  svg(el)
}
