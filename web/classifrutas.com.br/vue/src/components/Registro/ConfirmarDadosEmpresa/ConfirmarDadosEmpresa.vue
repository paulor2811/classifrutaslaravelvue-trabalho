<script>
export default {
  name: "ConfirmarDadosEmpresa",
  data() {
    return {
      selected: "autonomo", // Estado inicial (opção padrão)
    };
  },
  methods: {
    selectOption(option) {
      this.selected = option; // Atualiza a seleção
    },
    teste(option) {
      this.selected = option;
    }
  },
}
</script>

<template>
  <section>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="formulario">
        <img src="../../../assets/site-assets/empresa-icon.png" alt="produtor" class="produtor me-2" />
        <h4>confirme aqui<br/>os dados da empresa</h4>
        <div class="toggle-container">
          <!-- Botões de Alternância -->
          <div class="toggle-buttons">
            <button
                :class="['toggle-button', { active: selected === 'autonomo' }]"
                @click="selectOption('autonomo')"
            >
              atacado
            </button>
            <button
                :class="['toggle-button', { active: selected === 'representante' }]"
                @click="selectOption('representante')"
            >
              varejo
            </button>
            <button
                :class="['toggle-button', { active: selected === 'teste' }]"
                @click="selectOption('teste')"
            >
              transporte
            </button>
          </div>
        </div>
        <div class="cnpj">
          <label for="id-cnpj" class="label">CNPJ</label>
          <div class="input-wrapper">
            <input
                type="text"
                id="id-cnpj"
                v-model="cnpj"
                class="text-input"
            />
          </div>
        </div>
        <div class="razao">
          <label for="id-razao" class="label">razão social</label>
          <div class="input-wrapper">
            <input
                type="text"
                id="id-razao"
                v-model="razao"
                class="text-input"
            />
          </div>
        </div>
        <div class="nomef">
          <label for="id-nomef" class="label">CNPJ</label>
          <div class="input-wrapper">
            <input
                type="text"
                id="id-nomef"
                v-model="nomef"
                class="text-input"
            />
          </div>
        </div>
        <div class="seguimento">
          <label for="id-seguimento" class="label">seguimento</label>
          <div class="input-wrapper">
            <select id="opcoes" name="opcoes">
              <option value="opcao1">Opção 1</option>
              <option value="opcao2">Opção 2</option>
              <option value="opcao3">Opção 3</option>
            </select>
          </div>
        </div>
        <div class="permissionario">
          <label for="id-cnpj" class="label">permissionário do CEASA</label>
          <div class="input-wrapper">
            <select id="opcoes" name="opcoes">
              <option value="opcao1">Opção 1</option>
              <option value="opcao2">Opção 2</option>
              <option value="opcao3">Opção 3</option>
            </select>
          </div>
        </div>
        <div class="razao">

        </div>
        <div class="nome fantasia">

        </div>
        <div class="seguimento">

        </div>
        <div class="permissionário do CEASA">

        </div>
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
        <div class="field checkbox-field">
          <label class="checkbox-label">
            <input type="checkbox" v-model="conectado" class="checkbox-input" />
            parceiro iCEASA ?
          </label>
          <img src="../../../assets/site-assets/iceasa-logo.png" alt="produtor" class="iceasa-logo me-2" />
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

.text-input {
  flex: 1;
  border: none;
  height: 40px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
img {
  margin-bottom: 40px;
}
h4 {
  margin-bottom: 40px;
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

.text1 {
  font-weight: bold;
  font-family: Arial, sans-serif;
}
.text2 {
  position: relative;
  bottom: 30px;
  font-family: Arial, sans-serif;
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
  width: 124px;
}

.toggle-button.active {
  background-color: #5c1414; /* Cor para o botão ativo */
  color: white;
}

.toggle-button:not(.active) {
  background-color: white;
  color: black;
}

.field {
  width: 374px;
  height: 58px;
  background-color: #FFFAE8;
  border-radius: 14px;
  margin-top: 20px;
}
/* -------- Estilo do checkbox -------- */
.checkbox-field {
  display: flex;
  align-items: center;
}

.checkbox-label {
  font-size: 14px;
  line-height: 1.5;
  font-family: Arial, sans-serif;
  display: flex;
  align-items: center; /* Centraliza verticalmente o texto com o checkbox */
}

.checkbox-input {
  appearance: none;
  width: 20px;
  height: 20px;
  border: 2px solid black;
  border-radius: 3px;
  margin-right: 8px; /* Espaço entre o checkbox e o texto */
  position: relative;
  cursor: pointer;
  margin-left: 20px;
}

.checkbox-input:checked {
  background-color: #EE2641;
  border-color: #EE2641;
}

.checkbox-input:checked::after {
  content: '';
  display: block;
  position: absolute;
  top: 2px;
  left: 5px;
  width: 6px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  transform: rotate(45deg);
}
.iceasa-logo {
  width: 125px;
  height: 38px;
  position: relative;
  left: 60px;
  top: 15px;
}
#opcoes {
  width: 376px;
  height: 45px;
  background-color: white;
  border-radius: 12px;
  border: none;
}
</style>