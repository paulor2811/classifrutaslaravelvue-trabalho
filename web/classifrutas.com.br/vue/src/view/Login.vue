<script>
import Cabecalho from '../components/GeralComponents/Cabecalho.vue';
import PageTitle from "../components/login/PageTitle.vue";
import BotaoRegistroAutomatico from '../components/login/LoginOptions.vue';
export default {
  name: "Login",
  components: {
    Cabecalho,
    PageTitle,
    BotaoRegistroAutomatico,
  },
};
</script>

<template>
  <Cabecalho />
  <PageTitle />
  <BotaoRegistroAutomatico />
</template>

<style src="../GlobalStyles/Login.css">

</style>