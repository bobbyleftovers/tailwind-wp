<template>
  <div class="user-index">
    <div class="container">
      <div class="index">
        <div class="block md:flex">
          <div class="filters w-full md:w-1/4">
            <h5>We are</h5>
            <ul>
              <li v-for="(filter, f) in filters.departments" :key="f">
                <label
                  @click="selectDepartment(f, $event)"
                  :class="{ active: department == f }"
                  >{{ filter }}</label
                >
              </li>
            </ul>
            <form id="user-search" method="post">
              <input
                @keyup="debounceSearch($event)"
                v-model="search"
                type="text"
                name="name"
                placeholder="Search Our Team"
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
          <div class="results w-full md:w-3/4">
            <user-card
              :user="user"
              v-for="(user, u) in this.results"
              :key="u"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import $ from "jquery";
import axios from "axios";

export default {
  props: ["title", "quote", "image", "filters"],

  data() {
    return {
      department: null,
      debounce: false,
      search: "",
      results: [],
    };
  },

  mounted() {
    this.query();
  },

  methods: {
    selectDepartment(department, e) {
      this.department = department;
      this.query();
    },

    /**
     * Query the endpoint for users using filter params.
     */
    query() {
      let query = {
        department: this.department,
        search: this.search,
      };

      axios
        .get("/wp-json/insight/v1/get-users?" + $.param(query))
        .then((response) => {
          let data = JSON.parse(response.data);
          this.results = data.rows;
        });
    },

    debounceSearch(e) {
      clearTimeout(this.debounce);
      this.debounce = setTimeout(() => {
        this.query();
      }, 500);
    },
  },

  computed: {},
};
</script>