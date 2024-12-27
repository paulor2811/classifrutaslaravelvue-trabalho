<script>
export default {
  name: "ConfirmarEndereco"
}
</script>

<template>
  <section>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="formulario">
        <div class="text-title">
          <h4>confirme aqui<br/>seu endereço</h4>
        </div>
        <div class="row">
          <div class="cep">
            <label for="id-name" class="label">cep</label>
            <div class="input-wrapper input-wrapper-cep">
              <input
                  type="text"
                  id="id-name"
                  v-model="a"
                  class="cep-button-input"
              />
            </div>
          </div>
          <div class="numero">
            <label for="id-name" class="label">numero</label>
            <div class="input-wrapper input-wrapper-numero">
              <input
                  type="text"
                  id="id-name"
                  v-model="a"
                  class="numero-button-input"
              />
            </div>
          </div>
        </div>
        <div class="endereco">
          <label for="id-name" class="label">endereco</label>
          <div class="input-wrapper input-wrapper-endereco">
            <input
                type="text"
                id="id-name"
                v-model="a"
                class="endereco-button-input"
            />
          </div>
        </div>
        <div class="row">
          <div class="bairro">
            <label for="id-name" class="label">bairro</label>
            <div class="input-wrapper input-wrapper-bairro">
              <input
                  type="text"
                  id="id-name"
                  v-model="a"
                  class="bairro-button-input"
              />
            </div>
          </div>
          <div class="complemento">
            <label for="id-name" class="label">complemento</label>
            <div class="input-wrapper input-wrapper-complemento">
              <input
                  type="text"
                  id="id-name"
                  v-model="a"
                  class="complemento-button-input"
              />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="cidade">
            <label for="id-name" class="label">cidade</label>
            <div class="input-wrapper input-wrapper-cidade">
              <input
                  type="text"
                  id="id-name"
                  v-model="a"
                  class="cidade-button-input"
              />
            </div>
          </div>
          <div class="estado">
            <label for="id-name" class="label">estados</label>
            <div class="input-wrapper input-wrapper-estado">
              <input
                  type="text"
                  id="id-name"
                  v-model="a"
                  class="estado-button-input"
              />
            </div>
          </div>
        </div>
        <div class="signup-button">
          <button class="button" @click="submitForm">
            criar conta
          </button>
        </div>
      </div>
      <div class="navegar d-flex">
        <div class="voltar">
          <button class="button-voltar" @click="handleClick"> < voltar </button>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.text-title {
  margin-top: 50px;
}
.button-voltar {
  width: 198px;
  height: 48px;
  border-color: #EE2641;
  background-color: #FFFFFF;
  color: #EE2641;
  border-radius: 21px;
  border: 2px solid #EE2641;
  position: relative;
  top: 450px;
  right: 700px;
}
.button {
  width: 370px; /* Ajusta o botão para 100% da largura do formulário */
  height: 48px;
  border-radius: 20px;
  border: none;
  background-color: #EE2641;
  font-family: Arial;
  font-size: 15px;
  font-weight: bold;
  color: white;
  margin-top: 20px; /* Espaço superior do botão */
}

.label {
  display: block; /* Garante que o label fique acima do input */
  font-size: 13px;
  font-family: Arial;
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
}

.input-wrapper-cep {
  display: flex;
  width: 275px;
  height: 48px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 20px;
  padding: 2px 2px;
  background-color: #fff;
}
.input-wrapper-numero {
  display: flex;
  width: 76px;
  height: 48px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 20px;
  padding: 2px 2px;
  background-color: #fff;
}
.input-wrapper-endereco {
  display: flex;
  width: 375px;
  height: 48px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 20px;
  padding: 2px 2px;
  background-color: #fff;
}

.input-wrapper-bairro {
  display: flex;
  width: 176px;
  height: 48px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 20px;
  padding: 2px 2px;
  background-color: #fff;
}

.input-wrapper-complemento {
  display: flex;
  width: 176px;
  height: 48px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 20px;
  padding: 2px 2px;
  background-color: #fff;
}
.input-wrapper-cidade {
  display: flex;
  width: 275px;
  height: 48px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 20px;
  padding: 2px 2px;
  background-color: #fff;
}
.input-wrapper-estado {
  display: flex;
  width: 76px;
  height: 48px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 20px;
  padding: 2px 2px;
  background-color: #fff;
}
.cep-button-input {
  flex: 1;
  border: none;
  height: 40px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.numero-button-input {
  flex: 1;
  border: none;
  height: 40px;
  width: 72px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.endereco-button-input {
  flex: 1;
  border: none;
  height: 40px;
  width: 375px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.bairro-button-input {
  flex: 1;
  border: none;
  height: 40px;
  width: 172px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.complemento-button-input {
  flex: 1;
  border: none;
  height: 40px;
  width: 172px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.endereco-button-input {
  flex: 1;
  border: none;
  height: 40px;
  width: 172px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.cidade-button-input {
  flex: 1;
  border: none;
  height: 40px;
  width: 275px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.estado-button-input {
  flex: 1;
  border: none;
  height: 40px;
  width: 72px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.text-title {
  margin-bottom: 50px;
}
.cep {
  width: 275px;
  margin-right: 10px;
  margin-bottom: 30px;
}
.numero {
  width: 76px;
  margin-left: 10px;
}
.bairro {
  width: 180px;
  margin-right: 10px;
  margin-bottom: 30px;
}
.complemento {
  width: 180px;
  margin-left: 10px;
}
.cidade {
  width: 275px;
  margin-right: 10px;
  margin-bottom: 30px;
}
.estado {
  width: 76px;
  margin-left: 10px;
  margin-bottom: 30px;
}
.endereco {
  margin-bottom: 30px;
}
</style>