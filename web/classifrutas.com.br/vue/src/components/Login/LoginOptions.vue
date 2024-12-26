<template>
  <section>
    <div class="container d-flex flex-column align-items-center justify-content-center">
      <div class="signin" v-if="showSigninDiv">
        <button class="signin-button" @click="SigninHandleClick">
          criar conta
        </button>
      </div>
      <div v-if="showEmailComponent">
        <LoginEmail />
      </div>
      <h4>ou</h4>
      <div class="login-buttons d-flex g-0 flex-column align-items-center">
        <div class="social-button mb-3" v-if="showEmailDiv">
          <button id="button-email-id" class="social-auth-button" @click="emailHandleClick">
            <img src="../../assets/site-assets/email-icon.png" alt="Email" class="social-login-buttons-icon me-2" />
            continuar com o email
          </button>
        </div>
        <SocialAuthButtons />
      </div>
    </div>
    <a class="link-signup-text" href="http://classifrutas.local:88/registrar">criar conta</a>
  </section>
</template>

<script>
import LoginEmail from './LoginEmail.vue'
import SocialAuthButtons from './AuthButtons.vue'
export default {
  name: "Form",
  components: {
    LoginEmail,
    SocialAuthButtons,
  },
  data() {
    return {
      showEmailComponent: false, // Variavel de controle de exibição
      showEmailDiv: true,
      showSigninDiv: true,
    };
  },
  methods: {
    handleClick() {
      this.$router.push("/registrar"); // Substitua pelo caminho desejado
    },
    emailHandleClick() {
      this.showEmailComponent = true; // Ativa a exibição do componente email
      this.showEmailDiv = false;
      this.showSigninDiv = false;
    },
  },
}
</script>

<style scoped>
.container {
  height: auto;
  width: 383px;
  padding: 20px; /* Garante que o conteúdo não fique colado nas bordas */
}
.container h4 {
  position: relative;
  font-weight: bold;
  font-size: 15px;
  text-align: center; /* Centraliza o texto */
  width: 100%;
  margin-top: 10px;
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

.link-signup-text {
  display: flex; /* Torna o link um contêiner flexível */
  justify-content: center; /* Centraliza o link horizontalmente */
  align-items: center; /* Garante que o conteúdo dentro do link esteja alinhado verticalmente */
  color: black;
  font-weight: bold;
  font-size: 15px;
  font-family: Arial;
}

/* Responsividade */
@media (max-width: 768px) {
  .container h4 {
    font-size: 18px; /* Ajusta o tamanho do texto "ou" */
  }
}

@media (max-width: 480px) {
  .container h4 {
    font-size: 23px; /* Ajusta o tamanho do texto "ou" em telas muito pequenas */
  }
}
</style>
