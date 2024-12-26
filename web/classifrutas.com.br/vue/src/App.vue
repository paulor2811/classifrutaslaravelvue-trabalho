<template>
  <div id="app">

    <router-view></router-view>
  </div>
</template>

<script>

let currentController = new AbortController();
export default {
  name: "App",
};
</script>

<style src="./GlobalStyles/Home.css">

</style>
