<template>
  <div class="company-modal">
    <div v-if="company" class="scrim" @click="closeModal($event)">
      <div
        @click="preventClickBubble($event)"
        class="modal flex justify-center items-center"
      >
        <img
          v-if="company.logo"
          :src="company.logo.url"
          :alt="company.logo.alt"
        />
        <h4 v-else>{{ company.name }}</h4>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    closeModal(e) {
      this.$store.commit("CompanyIndexState/clearCompany");
    },

    preventClickBubble(e) {
      e.stopPropagation();
    },
  },

  computed: {
    company() {
      return this.$store.state.CompanyIndexState.selectedCompany ?? false;
    },
  },
};
</script>

<style>
.scrim {
  background-color: rgba(0, 0, 0, 0.75);
  height: 100%;
  left: 0px;
  position: fixed;
  top: 0px;
  width: 100%;
  z-index: 999;
}

.modal {
  background-color: white;
  height: 50%;
  left: 50%;
  position: relative;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 50%;
}
</style>