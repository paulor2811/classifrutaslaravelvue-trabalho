<script>
import BarraSuperior from '../components/GeralComponents/Header.vue';
import PageTitle from "../components/Login/PageTitle.vue";
import BotaoRegistroAutomatico from '../components/Login/LoginOptions.vue';
export default {
  name: "Login",
  components: {
    BarraSuperior,
    PageTitle,
    BotaoRegistroAutomatico,
  },
};
</script>

<template>
  <BarraSuperior />
  <PageTitle />
  <BotaoRegistroAutomatico />
</template>

<style src="../GlobalStyles/Login.css">

</style>