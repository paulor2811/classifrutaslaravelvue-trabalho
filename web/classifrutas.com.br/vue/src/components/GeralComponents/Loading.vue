<script>
export default {
  name: "Loading"
}
</script>

<template>
  <section>
    <div class="container-fluid d-flex justify-content-center align-items-center">
      <h4>Analisando suas<br/>informações</h4>
      <p>aguarde um momento</p>
      <div class="gif-container">
        <img class="animation1" src="../../assets/site-assets/loading-animation1.gif" alt="Carregando..." />
        <img class="animation2" src="../../assets/site-assets/loading-animation2.gif" alt="Carregando..." />
      </div>
    </div>
  </section>
</template>

<style scoped>
.container-fluid {
  height: 100vh;
  flex-direction: column;
}
.gif-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.animation1 {
  height: 150px;
  width: 150px;
}
.animation2 {
  height: 86px;
  width: 150px;
}
h4 {
  font-size: 32px;
  font-weight: bold;
  font-family: Arial;
}
.p {
  font-size: 24px;
  font-family: Arial;
}
</style>