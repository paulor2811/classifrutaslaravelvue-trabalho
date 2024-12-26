<script>
export default {
  name: "PageTitle"
}
</script>

<template>
  <section>
    <div class="container d-flex flex-column align-items-center justify-content-center">
      <div class="title-text">
        <h1>entrar no classifrutas</h1>
        <p>pode chegar, a casa é sua</p>
      </div>
    </div>
  </section>
</template>

<style scoped>
.title-text h1 {
  position: relative;
  margin-top: 50px;
  font-weight: bold;
  font-family: Arial;
  font-size: 26px;
  text-align: center; /* Centraliza o título */
  right: 20%;
}
.title-text p {
  position: relative;
  font-family: Arial;
  font-size: 16px;
  color: #5C525B;
  right: 20%;
}
@media (max-width: 480px) {
  .title-text h1 {
    font-size: 18px; /* Ajusta o título em telas muito pequenas */
  }
}
</style>