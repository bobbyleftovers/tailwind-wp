import 'svg-classlist-polyfill'
import './polyfills/ie11-foreach.js'
import './polyfills/ie11-object-fit.js'
import './polyfills/ie11-element-matches'
import './polyfills/ie11-prepend'
import {init, editorInit} from './lib/init-components'

// Initialize Vue.
import Vue from 'vue/dist/vue.js';
import Vuex from 'vuex';
import CompanyIndexState from './vuex/CompanyIndexState';
Vue.use(Vuex);

document.addEventListener('DOMContentLoaded', () => {
  if (document.querySelector('#vue-app')) {
    Vue.component('company-index', require('./components/vue/CompanyIndex.vue').default);
    Vue.component('company-card', require('./components/vue/CompanyCard.vue').default);
    Vue.component('company-modal', require('./components/vue/CompanyModal.vue').default);
    Vue.component('user-index', require('./components/vue/UserIndex.vue').default);
    Vue.component('user-card', require('./components/vue/UserCard.vue').default);
    const store = new Vuex.Store({
      modules: {
        CompanyIndexState
      }
    });

    new Vue({
      el: '#vue-app',
      store
    })
  }

  if(document.querySelector('body').classList.contains('block-editor-page')) {
    if( window.acf ) {
      const blocks = [ /* DO-NOT-DELETE-THIS-LINE */
        "block-demo"
      ]

      blocks.forEach(blockName => {
        window.acf.addAction( `render_block_preview/type=${blockName}`, function() {
          editorInit({
            component: blockName
          }, blockName).mount()
        })
      })
    }
  } else {
    // Init components for front end
    init({
      component: 'components'
    }).mount()
  }
})
