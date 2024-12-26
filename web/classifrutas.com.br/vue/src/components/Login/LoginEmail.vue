<template>
  <section>
    <div class="container d-flex flex-column justify-content-center">

      <!-- Campo Email -->
      <div class="field email-field">
        <label for="id-email" class="label">email</label>
        <div class="input-wrapper">
          <input
              type="text"
              id="id-email"
              class="text-input"
              placeholder="Digite seu email"
          />
        </div>
      </div>

      <!-- Campo Senha -->
      <div class="field pwd-field">
        <label for="id-pwd" class="label">senha super secreta</label>
        <div class="input-wrapper">
          <input
              type="password"
              id="id-pwd"
              class="text-input"
              placeholder="no mínimo 6 caracteres"
          />
        </div>
      </div>

      <!-- Campo Continuar Conectado -->
      <div class="field checkbox-field">
        <label class="checkbox-label">
          <input type="checkbox" v-model="conectado" class="checkbox-input" />
          continuar conectado
        </label>
      </div>

      <!-- Botão Entrar -->
      <div class="signup-button">
        <button class="button" @click="signupHandleClick">
          entrar
        </button>
      </div>

      <!-- Esqueci a Senha -->
      <div class="link-container">
        <a href="#" class="forgot-pwd-link">esqueci a senha</a>
      </div>

    </div>
  </section>
</template>

<script>
export default {
  name: "LoginEmail",
  data() {
    return {
      conectado: false, // Define se o checkbox está marcado ou não
      email: "", // Armazena o email digitado pelo usuário
    };
  },
  methods: {
    signupHandleClick() {
      console.log("Email:", this.email, "Conectado:", this.conectado);
    },
  },
};
</script>

<style scoped>
/* -------- Estilo do container principal -------- */
.container {
  height: auto;
  width: 383px;
  margin: 0 auto;
  padding: 0 15px;
}

/* -------- Estilo dos campos -------- */
.field {
  margin-bottom: 15px;
}

.label {
  display: block;
  font-size: 14px;
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
}

.input-wrapper {
  display: flex;
  height: 48px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 20px;
  padding: 2px 10px; /* Controle do espaçamento interno */
  background-color: #fff;
}

.text-input {
  flex: 1;
  border: none;
  height: 40px;
  font-size: 16px;
  padding-left: 5px;
  outline: none;
  border-radius: 20px;
  font-family: Arial, sans-serif;
}

.text-input::placeholder {
  color: #999;
}

/* -------- Estilo do botão -------- */
.button {
  width: 100%;
  height: 48px;
  border-radius: 20px;
  border: none;
  background-color: #EE2641;
  font-family: Arial, sans-serif;
  font-size: 15px;
  font-weight: bold;
  color: white;
}

/* -------- Esqueceu a senha -------- */
.link-container {
  display: flex; /* Torna o container flexível */
  justify-content: center; /* Centraliza horizontalmente */
  align-items: center; /* Centraliza verticalmente */
  margin: 20px 0;
}

a {
  color: #EE2641;
  font-family: Arial, sans-serif;
  font-size: 14px;
  font-weight: bold;
  text-decoration: none;
}

/* -------- Responsividade -------- */
@media (max-width: 768px) {
  .label {
    font-size: 12px;
  }
  .text-input {
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  .container {
    width: 100%;
  }

  .text-input {
    font-size: 13px;
  }
}
</style>