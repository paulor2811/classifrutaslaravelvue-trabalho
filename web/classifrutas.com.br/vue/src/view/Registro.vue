<template>
  <Cabecalho />
  <BotaoRegistroAutomatico />
  <Formulario />
</template>

<script>
import Cabecalho from '../components/GeralComponents/Header.vue';
import BotaoRegistroAutomatico from '../components/Registro/AuthButtons.vue';
import Formulario from '../components/Registro/Form.vue';
export default {
  name: "Registro",
  components: {
    Cabecalho,
    BotaoRegistroAutomatico,
    Formulario,
  },
};
</script>

<style src="../GlobalStyles/Register.css">
/* Adicione estilos específicos para Registro.vue */
</style>
