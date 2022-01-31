<template>
  <div class="company-card bg-white" @click="handleClick($event)">
    <div class="flex justify-center items-center h-full">
      <img
        v-if="company.logo"
        :src="company.logo.url"
        :alt="company.logo.alt"
      />
      <h4 v-else>{{ company.name }}</h4>
    </div>
    <p class="verticals">{{ company.verticals.join(" / ") }}</p>
    <p class="stage">{{ company.stage }}</p>
    <p class="location">{{ company.location }}</p>
    <div
      class="arrow arrow--lg arrow--top-right block relative overflow-hidden"
    >
      <div
        class="
          arrow__outter
          pointer-events-none
          transition-colors
          duration-500
          border-t border-r
          transform
          border-white
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
          bg-white
        "
      ></div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["company"],

  methods: {
    handleClick(e) {
      this.$store.commit("CompanyIndexState/selectCompany", this.company);
    },
  },
};
</script>
