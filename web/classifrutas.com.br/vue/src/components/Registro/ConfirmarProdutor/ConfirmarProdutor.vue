<script>
export default {
  name: "ConfirmarProdutor",
  data() {
    return {
      selected: "autonomo", // Estado inicial (opção padrão)
    };
  },
  methods: {
    selectOption(option) {
      this.selected = option; // Atualiza a seleção
    },
  },
};
</script>

<template>
  <section>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="formulario">
        <img src="../../../assets/site-assets/produtor-icon.png" alt="produtor" class="produtor me-2" />
        <h4>confirme aqui<br/>seus dados pessoais</h4>
        <div class="toggle-container">
          <!-- Botões de Alternância -->
          <div class="toggle-buttons">
            <button
                :class="['toggle-button', { active: selected === 'autonomo' }]"
                @click="selectOption('autonomo')"
            >
              autônomo
            </button>
            <button
                :class="['toggle-button', { active: selected === 'representante' }]"
                @click="selectOption('representante')"
            >
              representante
            </button>
          </div>
        </div>
        <div class="form-autonomo row">
          <div class="nome">
            <label for="id-name" class="label">nome completo</label>
            <div class="input-wrapper">
              <input
                  type="text"
                  id="id-name"
                  v-model="nome"
                  class="text-input"
              />
            </div>
          </div>
          <div class="cpf">
            <label for="id-name" class="label">cpf</label>
            <div class="input-wrapper">
              <input
                  type="text"
                  id="id-name"
                  v-model="nome"
                  class="text-input"
              />
            </div>
          </div>
          <div class="row">
            <div class="data">
              <label for="id-name" class="label">data de nascimento</label>
              <div class="input-wrapper-nasc">
                <input
                    type="text"
                    id="id-name"
                    v-model="nome"
                    class="text-input-nasc"
                />
              </div>
            </div>
            <div class="tel">
              <label for="id-name" class="label">celular</label>
              <div class="input-wrapper-tel">
                <input
                    type="text"
                    id="id-name"
                    v-model="nome"
                    class="text-input-tel"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="form-representate row" v-if="selected === 'representante'">
          <div class="cnpj">
            <label for="id-name" class="label">CNPJ da empresa representante</label>
            <div class="input-wrapper-cnpj">
              <input
                  type="text"
                  id="id-name"
                  v-model="nome"
                  class="text-input-cnpj"
              />
            </div>
          </div>
          <label for="id-empresa" class="empresa-label">SAVIOLLI & SAVIOLLI</label>
          <div class="nao-achou-empresa">
            <p class="text1">não encontrou a empresa?</p>
            <button class="button-ajuda" @click="ajudaClick">
              ajuda
            </button>
            <p class="text2">
              clique nesse botão para<br/>
              podermos te ajudar
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
  .formulario {
    width: 376px;
    height: 532px;
    margin-top: 57px;
  }
  .produtor {
    margin-bottom: 20px;
  }
  .button-ajuda {
    height: 30px;
    width: 120px;
    background-color: lightskyblue;
    color: white;
    border-radius: 10px;
    border: none;
    font-weight: bold;
    margin-left: 220px;
    position: relative;
    bottom: 10px;
  }
  .nao-achou-empresa {
    background-color: #F2F2F2;
    border: 1px solid #D8D8D8;
    height: 100px;
    border-radius: 10px;
  }
  .label {
    display: block; /* Garante que o label fique acima do input */
    font-size: 14px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
    width: 230px;
  }

  .input-wrapper {
    display: flex;
    height: 48px;
    width: 376px;
    align-items: center;
    border: 1px solid #E2E0E2;
    border-radius: 12px;
    padding: 2px 2px;
    background-color: #fff;
    margin-bottom: 25px;
  }

  .input-wrapper-nasc {
    display: flex;
    height: 48px;
    width: 176px;
    align-items: center;
    border: 1px solid #E2E0E2;
    border-radius: 12px;
    padding: 2px 2px;
    background-color: #fff;
    margin-bottom: 25px;
  }
  .input-wrapper-tel {
    display: flex;
    height: 48px;
    width: 176px;
    align-items: center;
    border: 1px solid #E2E0E2;
    border-radius: 12px;
    padding: 2px 2px;
    background-color: #fff;
    margin-bottom: 25px;
  }
  .input-wrapper-cnpj {
    display: flex;
    height: 48px;
    width: 376px;
    align-items: center;
    border: 1px solid #E2E0E2;
    border-radius: 12px;
    padding: 2px 2px;
    background-color: #fff;
    margin-bottom: 25px;
  }
  .text-input {
    flex: 1;
    border: none;
    height: 40px;
    font-size: 16px;
    outline: none;
    border-radius: 20px;
  }
  .text-input-nasc {
    flex: 1;
    border: none;
    height: 40px;
    width: 172px;
    font-size: 16px;
    outline: none;
    border-radius: 20px;
  }
  .text-input-tel {
    flex: 1;
    border: none;
    height: 40px;
    width: 172px;
    font-size: 16px;
    outline: none;
    border-radius: 20px;
  }
  .text-input-cnpj {
    flex: 1;
    border: none;
    height: 40px;
    font-size: 16px;
    outline: none;
    border-radius: 20px;
  }
  h4 {
    margin-bottom: 30px;
  }
  .data {
    width: 176px;
    margin-right: 13px;
  }
  .tel {
    width: 176px;
    margin-left: 11px;
  }
  /* Estilo do container */
  .toggle-container {
    width: 100%;
    height: 44px;
    margin: 0 auto;
    text-align: center;
    margin-bottom: 25px;
  }

  /* Estilo dos botões */
  .toggle-buttons {
    border: 1px solid #ccc;
    border-radius: 25px;
    overflow: hidden;
    width: fit-content;
  }

  .toggle-button {
    flex: 1;
    padding: 10px 20px;
    background-color: white;
    color: black;
    border: none;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    outline: none;
    transition: all 0.3s ease;
    height: 44px;
    width: 132px;
  }

  .toggle-button.active {
    background-color: #5c1414; /* Cor para o botão ativo */
    color: white;
  }

  .toggle-button:not(.active) {
    background-color: white;
    color: black;
  }
  .empresa-label {
    font-family: Arial, sans-serif;
    position: relative;
    bottom: 20px;
    margin-left: 20px;
  }
  .text1 {
    font-weight: bold;
    font-family: Arial, sans-serif;
  }
  .text2 {
    position: relative;
    bottom: 30px;
    font-family: Arial, sans-serif;
  }
</style>