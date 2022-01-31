<template>
  <div class="company-index">
    <div class="container">
      <h1>{{ title }}</h1>
      <hr class="border-blue" />

      <!-- mobile filters -->
      <div class="filters-mobile block lg:hidden">
        <label
          class="toggle flex justify-between"
          @click="showFilters = !showFilters"
        >
          <span>Filter</span>
          <svg
            v-if="!showFilters"
            xmlns="http://www.w3.org/2000/svg"
            width="21.333"
            height="14.93"
            viewBox="0 0 21.333 14.93"
          >
            <path
              id="Path_3501"
              data-name="Path 3501"
              d="M2657.885-1355.683h21.333"
              transform="translate(-2657.885 1356.183)"
              fill="none"
              stroke="#ff531b"
              stroke-width="1"
            />
            <path
              id="Path_3502"
              data-name="Path 3502"
              d="M2657.885-1355.683h21.333"
              transform="translate(-2657.885 1363.148)"
              fill="none"
              stroke="#182a35"
              stroke-width="1"
            />
            <path
              id="Path_3503"
              data-name="Path 3503"
              d="M2657.885-1355.683h15.668"
              transform="translate(-2652.22 1370.113)"
              fill="none"
              stroke="#ff531b"
              stroke-width="1"
            />
          </svg>
          <svg
            v-if="showFilters"
            xmlns="http://www.w3.org/2000/svg"
            width="15.792"
            height="15.792"
            viewBox="0 0 15.792 15.792"
          >
            <g
              id="Group_1802"
              data-name="Group 1802"
              transform="translate(-91.408 -247.929)"
            >
              <path
                id="Path_3501"
                data-name="Path 3501"
                d="M2657.885-1355.683h21.333"
                transform="translate(-829.034 3101.389) rotate(-45)"
                fill="none"
                stroke="#ff531b"
                stroke-width="1"
              />
              <path
                id="Path_3502"
                data-name="Path 3502"
                d="M2657.885-1355.683h21.333"
                transform="translate(-2746.259 -672.513) rotate(45)"
                fill="none"
                stroke="#182a35"
                stroke-width="1"
              />
            </g>
          </svg>
        </label>
        <div v-show="showFilters">
          <ul class="accordion">
            <li v-for="(options, filter) in filters" :key="filter">
              <label
                @click="activateGroup(filter)"
                :class="[
                  'flex justify-between',
                  { active: activeGroup == filter },
                ]"
              >
                <span>{{ filter }}</span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="15.416"
                  height="15.416"
                  viewBox="0 0 15.416 15.416"
                >
                  <g
                    id="Group_1803"
                    data-name="Group 1803"
                    transform="translate(8.054 30.464) rotate(-135)"
                  >
                    <path
                      id="Path_3428"
                      data-name="Path 3428"
                      d="M0,10.4H10.4V0"
                      transform="translate(10.886 10.397)"
                      fill="none"
                      stroke="#ff531b"
                      stroke-width="1"
                    />
                  </g>
                </svg>
              </label>
              <div :class="['content', { active: activeGroup == filter }]">
                <div v-for="(value, key) in options" :key="key">
                  <div
                    :class="[
                      'option',
                      {
                        active:
                          activeFilters[filter] &&
                          activeFilters[filter].includes(key),
                      },
                    ]"
                  >
                    <span @click="toggleFilter(filter, key)">{{ value }}</span>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <label>Personalize</label>
            </li>
          </ul>
        </div>
      </div>
      <div class="active-filters-mobile block lg:hidden">
        <div v-for="(filter, group) in activeFilters" :key="group">
          <div v-if="activeGroup == group" :class="filter + '-filters'">
            <button
              v-for="option in activeFilters[group]"
              @click="toggleFilter(group, option)"
              :key="option"
              class="flex"
            >
              <span>{{ option }}</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="7.331"
                height="7.331"
                viewBox="0 0 7.331 7.331"
              >
                <g
                  id="Group_1806"
                  data-name="Group 1806"
                  transform="translate(-91.408 -247.929)"
                >
                  <path
                    id="Path_3501"
                    data-name="Path 3501"
                    d="M0,0H9.368"
                    transform="translate(91.762 254.907) rotate(-45)"
                    fill="none"
                    stroke="#ff531b"
                    stroke-width="1"
                  />
                  <path
                    id="Path_3502"
                    data-name="Path 3502"
                    d="M0,0H9.368"
                    transform="translate(91.762 248.283) rotate(45)"
                    fill="none"
                    stroke="#182a35"
                    stroke-width="1"
                  />
                </g>
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- desktop filters -->
      <div class="filters-desktop hidden lg:block">
        <div class="flex justify-between">
          <div class="w-full">
            <ul class="flex justify-between">
              <li v-for="(options, group) in filters" :key="group">
                <label
                  :class="[
                    'cursor-pointer flex items-start',
                    { active: activeGroup == group },
                  ]"
                  @click="activateGroup(group)"
                  ><span>{{ group }}</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="11.938"
                    height="11.938"
                    viewBox="0 0 11.938 11.938"
                  >
                    <g
                      id="Group_1672"
                      data-name="Group 1672"
                      transform="translate(5.623 -15.049) rotate(45)"
                    >
                      <path
                        id="Path_3428"
                        data-name="Path 3428"
                        d="M0,7.942H7.941V0"
                        transform="translate(10.886 10.397)"
                        fill="none"
                        stroke="#ff531b"
                        stroke-width="1"
                      />
                    </g>
                  </svg>
                </label>
              </li>
              <li>
                <label
                  :class="[
                    'cursor-pointer flex items-start',
                    { active: activeGroup == 'personalize' },
                  ]"
                  @click="activateGroup('personalize')"
                  ><span>personalize</span></label
                >
              </li>
            </ul>
          </div>
          <div class="w-full flex justify-end">
            <form id="company-search" method="post">
              <input
                @keyup="debounceSearch($event)"
                v-model="search"
                type="text"
                name="name"
                placeholder="Search Company Name"
              />
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="17.161"
                height="17.161"
                viewBox="0 0 17.161 17.161"
              >
                <g
                  id="Group_1652"
                  data-name="Group 1652"
                  transform="translate(-131.25 -563.25)"
                >
                  <circle
                    id="Ellipse_13"
                    data-name="Ellipse 13"
                    cx="6.411"
                    cy="6.411"
                    r="6.411"
                    transform="translate(132 564)"
                    fill="none"
                    stroke="#ff531b"
                    stroke-width="1.5"
                  />
                  <line
                    id="Line_68"
                    data-name="Line 68"
                    x2="4.936"
                    y2="4.936"
                    transform="translate(142.944 574.944)"
                    fill="none"
                    stroke="#ff531b"
                    stroke-width="1.5"
                  />
                </g>
              </svg>
            </form>
          </div>
        </div>
      </div>
      <div class="active-filters-desktop hidden lg:block">
        <div v-for="(filter, group) in filters" :key="group">
          <div v-if="activeGroup == group" :class="group + '-filters'">
            <button
              v-for="option in filters[group]"
              @click="toggleFilter(group, option)"
              :key="option"
              :class="{ active: activeFilters[group].includes(option) }"
            >
              {{ option }}
              <span v-if="activeFilters[group].includes(option)"
                >&nbsp;&times;</span
              >
            </button>
          </div>
        </div>
        <div
          v-show="activeGroup == 'personalize'"
          class="personalize-reset cursor-pointer"
          @click="resetFilters()"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="15.792"
            height="15.792"
            viewBox="0 0 15.792 15.792"
          >
            <g
              id="Group_1802"
              data-name="Group 1802"
              transform="translate(-91.408 -247.929)"
            >
              <path
                id="Path_3501"
                data-name="Path 3501"
                d="M2657.885-1355.683h21.333"
                transform="translate(-829.034 3101.389) rotate(-45)"
                fill="none"
                stroke="#ff531b"
                stroke-width="1"
              />
              <path
                id="Path_3502"
                data-name="Path 3502"
                d="M2657.885-1355.683h21.333"
                transform="translate(-2746.259 -672.513) rotate(45)"
                fill="none"
                stroke="#182a35"
                stroke-width="1"
              />
            </g>
          </svg>
        </div>
        <div class="personalize-filter" v-if="activeGroup == 'personalize'">
          <div class="personalize-text">
            <span>We are a</span>
            <select ref="vertical_ruler" class="select-ruler">
              <option :value="personalVertical">
                {{ personalVertical || "vertical" }}
              </option>
            </select>
            <select
              name="vertical"
              ref="personal_vertical"
              v-model="personalVertical"
            >
              <option :value="null" selected="selected" disabled="disabled">
                vertical
              </option>
              <option
                v-for="option in filters.verticals"
                :key="option"
                :value="option"
              >
                {{ option }}
              </option>
            </select>
            <span>company in the</span>
            <select ref="stage_ruler" class="select-ruler">
              <option :value="personalStage">
                {{ personalStage || "stage" }}
              </option>
            </select>
            <select name="stages" ref="personal_stage" v-model="personalStage">
              <option :value="null" selected="selected" disabled="disabled">
                stage
              </option>
              <option
                v-for="option in filters.stages"
                :key="option"
                :value="option"
              >
                {{ option }}
              </option></select
            ><br />
            <span>Lorem ipsum investment size of</span>
            <select ref="usd_ruler" class="select-ruler">
              <option :value="personalUsd">
                {{ personalUsd || "USD range" }}
              </option>
            </select>
            <select name="usd_range" ref="personal_usd" v-model="personalUsd">
              <option :value="null" selected="selected" disabled="disabled">
                USD range
              </option>
            </select>
          </div>
          <a
            class="search-partnerships btn btn--blue w-full lg:w-auto"
            href="#"
            @click="personalizeSearch($event)"
            >Search Partnerships
            <div
              class="
                arrow arrow--sm arrow--top-right
                block
                relative
                overflow-hidden
              "
            >
              <div
                class="
                  arrow__outter
                  pointer-events-none
                  transition-colors
                  duration-500
                  border-t border-r
                  transform
                  border-orange
                "
              ></div>
              <div
                class="
                  arrow__inner
                  pointer-events-none
                  transition-colors
                  duration-500
                  -rotate-45
                  h-e1
                  block
                  absolute
                  bg-cadet-blue
                "
              ></div></div
          ></a>
        </div>
      </div>

      <div class="index">
        <div class="mobile-results lg:hidden">
          <div
            class="row flex"
            v-for="(row, r) in beforeContent.mobile"
            :key="'before_' + r"
          >
            <company-card
              v-for="company in row"
              :key="company.ID"
              :company="company"
            />
          </div>

          <div class="static-content">
            <div class="left">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="47.88"
                height="33.96"
                viewBox="0 0 47.88 33.96"
              >
                <path
                  id="Path_3487"
                  data-name="Path 3487"
                  d="M55.44,17.64,53.88,11.4C41.76,12.36,35.4,18,35.4,31.32V45.36H51.36V28.8H45.12C44.64,22.68,48.12,18.96,55.44,17.64Zm-27.84,0L26.04,11.4C13.92,12.36,7.56,18,7.56,31.32V45.36H23.52V28.8H17.4C16.8,22.68,20.28,18.96,27.6,17.64Z"
                  transform="translate(-7.56 -11.4)"
                  fill="#fff"
                />
              </svg>
              <div class="text-white">{{ quote }}</div>
              <img :src="logo.url" />
            </div>
            <div
              class="right"
              :style="{
                'background-image': 'url(' + image.url + ')',
              }"
            ></div>
          </div>

          <div
            class="row flex"
            v-for="(row, r) in afterContent.mobile"
            :key="'after_' + r"
          >
            <company-card
              v-for="company in row"
              :key="company.ID"
              :company="company"
            />
          </div>
        </div>

        <div class="desktop-results hidden lg:block">
          <div
            class="row flex"
            v-for="(row, r) in beforeContent.desktop"
            :key="'before_' + r"
          >
            <company-card
              v-for="company in row"
              :key="company.ID"
              :company="company"
            />
          </div>

          <div class="static-content">
            <div class="left">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="47.88"
                height="33.96"
                viewBox="0 0 47.88 33.96"
              >
                <path
                  id="Path_3487"
                  data-name="Path 3487"
                  d="M55.44,17.64,53.88,11.4C41.76,12.36,35.4,18,35.4,31.32V45.36H51.36V28.8H45.12C44.64,22.68,48.12,18.96,55.44,17.64Zm-27.84,0L26.04,11.4C13.92,12.36,7.56,18,7.56,31.32V45.36H23.52V28.8H17.4C16.8,22.68,20.28,18.96,27.6,17.64Z"
                  transform="translate(-7.56 -11.4)"
                  fill="#fff"
                />
              </svg>
              <div class="text-white">{{ quote }}</div>
              <img :src="logo.url" />
            </div>
            <div
              class="right"
              :style="{
                'background-image': 'url(' + image.url + ')',
              }"
            ></div>
          </div>

          <div
            class="row flex"
            v-for="(row, r) in afterContent.desktop"
            :key="'after_' + r"
          >
            <company-card
              v-for="company in row"
              :key="company.ID"
              :company="company"
            />
          </div>
        </div>

        <button
          v-show="this.results.length < this.max || this.max == 0"
          @click="loadMore($event)"
          class="load-more btn"
        >
          Load More
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import $ from "jquery";
import axios from "axios";

export default {
  props: ["title", "quote", "image", "logo", "filters"],

  data() {
    return {
      showFilters: false,
      activeGroup: false,
      debounce: false,
      activeFilters: {},
      personalVertical: null,
      personalStage: null,
      personalUsd: null,
      search: "",
      page: 1,
      results: [],
      max: 0,
    };
  },

  mounted() {
    this.resetFilters();
    this.query();
  },

  updated() {
    // Resize select boxes to fit in context after updates.
    let vertical = this.$refs.personal_vertical;
    let vertical_ruler = this.$refs.vertical_ruler;
    let stage = this.$refs.personal_stage;
    let stage_ruler = this.$refs.stage_ruler;
    $(vertical).width($(vertical_ruler).innerWidth());
    $(stage).width($(stage_ruler).innerWidth());
  },

  methods: {
    /**
     * Query the endpoint for companies using filter params.
     */
    query() {
      let query = this.activeFilters;
      $.extend(query, {
        page: this.page,
        search: this.search,
      });

      axios
        .get("/wp-json/insight/v1/get-companies?" + $.param(query))
        .then((response) => {
          let data = JSON.parse(response.data);
          this.max = data.max;

          if (this.page == 1) {
            this.results = data.rows;
          } else {
            this.results = this.results.concat(data.rows);
          }
        });
    },

    /**
     * Display a filter group's options.
     * @param string group
     */
    activateGroup(group) {
      if (this.activeGroup == group) {
        this.resetFilters();
      } else {
        this.resetFilters();
        this.activeGroup = group;
      }
    },

    /**
     * Reset all selected filters.
     */
    resetFilters() {
      let groups = Object.keys(this.filters);
      for (let g in groups) this.activeFilters[groups[g]] = [];
      this.page = 1;
      this.activeGroup = null;
      this.personalVertical = null;
      this.personalStage = null;
      // this.$forceUpdate();
      this.query();
    },

    /**
     * Toggle a clicked filter on/off.
     * @param string filter
     * @param string key
     */
    toggleFilter(filter, key) {
      if (
        this.activeFilters[filter] &&
        this.activeFilters[filter].includes(key)
      ) {
        this.removeFilter(filter, key);
      } else {
        this.addFilter(filter, key);
      }
    },

    /**
     * Add a clicked filter to active filters.
     * @param string filter
     * @param string key
     * @param bool refresh
     */
    addFilter(filter, key, refresh = true) {
      this.activeFilters[filter].push(key);
      if (refresh) {
        this.page = 1;
        this.query();
      }
    },

    /**
     * Remove a clicked filter from active filters.
     * @param string filter
     * @param string key
     * @param bool refresh
     */
    removeFilter(filter, key, refresh = true) {
      for (var i = 0; i < this.activeFilters[filter].length; i++) {
        if (this.activeFilters[filter][i] == key) {
          this.activeFilters[filter].splice(i, 1);
        }
      }

      if (refresh) {
        this.page = 1;
        this.query();
      }
    },

    debounceSearch(e) {
      clearTimeout(this.debounce);
      this.debounce = setTimeout(() => {
        this.page = 1;
        this.query();
      }, 500);
    },

    personalizeSearch(e) {
      this.activeFilters = {};

      if (this.personalVertical) {
        this.activeFilters.verticals = [this.personalVertical];
      }

      if (this.personalStage) {
        this.activeFilters.stages = [this.personalStage];
      }

      this.page = 1;
      this.query();
    },

    loadMore(e) {
      this.page++;
      this.query();
    },

    /**
     * @see https://github.com/lodash/lodash/blob/master/chunk.js
     */
    _chunk(array, size) {
      size = Math.max(Number.parseInt(size), 0);
      const length = array == null ? 0 : array.length;
      if (!length || size < 1) {
        return [];
      }
      let index = 0;
      let resIndex = 0;
      const result = new Array(Math.ceil(length / size));

      while (index < length) {
        result[resIndex++] = array.slice(index, (index += size));
      }
      return result;
    },
  },

  computed: {
    /**
     * Return the first 6 rows of results to display before content.
     */
    beforeContent() {
      return {
        mobile: this._chunk(this.results.slice(0, 6), 2),
        desktop: this._chunk(this.results.slice(0, 6), 3),
      };
    },

    /**
     * Return all rows that should follow the static content.
     */
    afterContent() {
      return {
        mobile: this._chunk(this.results.slice(6), 2),
        desktop: this._chunk(this.results.slice(6), 3),
      };
    },
  },
};
</script>
