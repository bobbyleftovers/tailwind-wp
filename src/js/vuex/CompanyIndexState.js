/**
 * @file
 * Vuex module for tracking company index page state.
 */
import $ from 'jquery';

export default {
  namespaced: true,

  state: {
    selectedCompany: false,
  },

  mutations: {

    /**
     * Update the currently selected company.
     * @param object company
     */
    selectCompany(state, company) {
      state.selectedCompany = company;
      $('html, body').css('overflow', 'hidden')
    },

    /**
     * Reset the selected company to false.
     */
    clearCompany(state) {
      state.selectedCompany = false;
      $('html, body').css('overflow', 'auto')
    },
  }
}
