<script>
import Cabecalho from "../inicial/Cabecalho.vue";
export default {
  name: "PageBemVindo",
  components: {
    Cabecalho,
  }
}
</script>

<template>
  <Cabecalho />
  <section>
    <div class="container d-flex justify-content-center align-items-center">
      <img src="../../assets/site-assets/background-classifrutas.png" class="bg-cf">
      <div class="banner">
        <img src="../../assets/site-assets/banner-iceasa.png" class="img-banner" alt="Facebook" />
        <h4 class="banner-tittle">COM O SOFTWARE CERTO, GRANDES COISAS ACONTECEM!</h4>
      </div>
      <div class="margem"></div>
      <div class="page-title-div">
        <h4 class="page-title">bem vindo ao</h4>
      </div>
      <div class="conteudo row">
        <div class="col-6">
          <div class="imagem">
            <img src="../../assets/site-assets/classifrutas-img1.png" class="cf-imagem"/>
          </div>
          <div class="descricao">
            <p>faça seus anúncios e publique<br/>o que tem de melhor.</p>
          </div>
          <div class="btn-criar-anuncio">
            <button class="button" @click="signupHandleClick">criar anuncio</button>
          </div>
          <div class="final-text">
            <p>publique seu anúncios, sejam bem avaliado e divulgue a<br/>qualidade dos seus produtos.</p>
          </div>
        </div>
        <div class="col-6">
          <div class="imagem">
            <img src="../../assets/site-assets/classifrutas-img2.png" class="cf-imagem"/>
          </div>
          <div class="descricao">
            <p>tenha acesso a todas as ferramentas<br/>e destaques nas suas publicações .</p>
          </div>
          <div class="btn-criar-anuncio">
            <button class="button"  @click="enviarDados">condições</button>

          </div>
          <div class="final-text">
            <p>anúncios em destaques, cotações de preços, contato<br/>rápido com os anunciantes e muito mais.</p>
          </div>
        </div>
      </div>
      <h4>ENCONTRE O MELHOR PREÇO DO MERCADO</h4>
    </div>
  </section>
</template>

<style scoped>
.container {
  flex-direction: column;
  width: 1080px;
}
.img-banner {
  width: 904px;
  height: 102px;
}
.banner-tittle {
  font-size: 20px;
  font-family: Arial;
  font-weight: 500;
  text-align: center;
  color: #552020;
}
.margem {
  width: 100%;
  height: 1px;
  border-bottom: 1px solid #8080808C;
  margin-top: 20px;
}
.page-title-div {
  margin-right: 70%;
}
.page-title {
  font-size: 48px;
  font-weight: 275;
}
.bg-cf {
  width: 100%;
  position: fixed;
  top: 280px;
  opacity: 60%;
}
.descricao {
  margin-top: 30px;
  margin-bottom: 30px;
  font-weight: bold;
}
.btn-criar-anuncio {

}
.button {
  border-radius: 16px;
  background-color: #EE2641;
  color: white;
  font-weight: bold;
  width: 100%;
  height: 40px;
  border: none;
  cursor: pointer; /* Adiciona o ponteiro de mão ao passar o mouse */
}
.final-text {
  font-family: Arial;
  font-size: 16px;
  font-weight: 400;
  margin-bottom: 30px;
  margin-top: 30px;
}
.imagem {
  margin-top: 50px;
}
</style>