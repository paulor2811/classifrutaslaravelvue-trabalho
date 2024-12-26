<template>
  <section>
    <div class="container d-flex flex-column align-items-center justify-content-center">
      <div class="title-text">
        <h1>criando sua conta no classifrutas</h1>
      </div>
      <div class="auto-register-buttons d-flex flex-column align-items-center">
        <div class="facebook-button mb-3">
          <button class="button" @click="handleClick">
            <img src="../../assets/site-assets/facebook-icon.png" alt="Facebook" class="facebook-icon me-2" />
            continuar com o facebook
          </button>
        </div>
        <div class="google-button mb-3">
          <button class="button" @click="handleClick">
            <img src="../../assets/site-assets/google-icon.png" alt="Facebook" class="google-icon me-2" />
            continuar com o google
          </button>
        </div>
      </div>
      <h4>ou</h4>
    </div>
  </section>
</template>

<script>
export default {
  name: "Form"
}
</script>

<style scoped>
.container {
  height: auto;
  padding: 20px; /* Garante que o conteúdo não fique colado nas bordas */
}

.title-text h1 {
  margin-top: 50px;
  font-weight: bold;
  font-size: 25px;
  text-align: center; /* Centraliza o título */
}

.auto-register-buttons {
  margin-top: 20px;
  width: 100%; /* Garante que os botões ocupem toda a largura */
  display: flex;
  flex-direction: column;
  align-items: center;
}

.facebook-button,
.google-button {
  width: 100%; /* Garante que os botões ocupem a largura total */
  max-width: 383px; /* Limita a largura máxima ao tamanho desejado */
}

.button {
  width: 100%; /* Garante que o botão ocupe 100% da largura do container */
  max-width: 383px; /* Limita a largura máxima */
  height: 48px;
  border-radius: 20px;
  border: 1px solid #E2E0E2;
  background-color: #FFFFFF;
  font-family: Arial;
  font-size: 15px;
  font-weight: bold;
  display: flex;
  justify-content: center;
  align-items: center;
}

.facebook-icon,
.google-icon {
  height: 20px; /* Tamanho dos ícones ajustado */
  width: 20px;
  margin-right: 10px;
}

.container h4 {
  position: relative;
  font-weight: bold;
  font-size: 15px;
  text-align: center; /* Centraliza o texto */
  width: 383px;
  margin-top: 20px;
  margin-bottom: 20px;
}
.container h4:before {
  content: "";
  position: absolute;
  left: 0px;
  top: 9px; /* Espaço de início */
  height: 2px; /* Altura da borda */
  width: 45%;
  background-color: #F4F2F0; /* Cor da borda */
}
.container h4:after {
  content: "";
  position: absolute;
  right: 0px;
  top: 9px; /* Espaço de início */
  height: 2px; /* Altura da borda */
  width: 45%;
  background-color: #F4F2F0; /* Cor da borda */
}
/* Responsividade */
@media (max-width: 768px) {
  .title-text h1 {
    font-size: 20px; /* Ajusta o tamanho da fonte do título */
  }

  .facebook-button .button,
  .google-button .button {
    width: 90%; /* Reduz a largura dos botões em telas pequenas */
    font-size: 14px; /* Ajusta o tamanho da fonte */
  }

  .facebook-icon,
  .google-icon {
    height: 18px; /* Ajusta o tamanho dos ícones */
    width: 18px;
  }

  .container h4 {
    font-size: 18px; /* Ajusta o tamanho do texto "ou" */
  }
}

@media (max-width: 480px) {
  .title-text h1 {
    font-size: 18px; /* Ajusta o título em telas muito pequenas */
  }

  .button {
    font-size: 13px; /* Ajusta o tamanho da fonte para celulares muito pequenos */
  }

  .facebook-icon,
  .google-icon {
    height: 16px; /* Ajusta ainda mais o tamanho dos ícones */
    width: 16px;
  }

  .container h4 {
    position: relative;
    font-weight: bold;
    font-size: 15px;
    text-align: center; /* Centraliza o texto */
    width: 100%;
  }
}
</style>
