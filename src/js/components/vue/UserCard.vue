<template>
  <div class="user-card" @click="handleClick($event)">
    <img src="http://fpoimg.com/188x160" />
    <p class="name">{{ user.full_name }}</p>
    <p class="position">{{ user.position }}</p>
  </div>
</template>

<script>
export default {
  props: ["user"],

  methods: {
    handleClick(e) {},
  },
};
</script>
