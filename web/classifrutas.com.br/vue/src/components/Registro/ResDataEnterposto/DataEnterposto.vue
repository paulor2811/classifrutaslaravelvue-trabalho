<script>
export default {
  name: "DataEnterposto"
}
</script>

<template>
  <section>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="formulario">
        <div class="col-6 form1">
          <img src="../../../assets/site-assets/entreposto.png" alt="produtor" class="enterposto-icon me-2" />
          <h4 class="title">
            confirme aqui os<br/>
            dados para o resposável<br/>
            do seu enterposto
          </h4>
          <div class="estado">
            <label for="id-cnpj" class="label">estado</label>
            <div class="input-wrapper">
              <select id="opcoes" name="opcoes">
                <option value="opcao1">Selecione o Estado</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
            </div>
          </div>
          <div class="cidade">
            <label for="id-cnpj" class="label">cidade</label>
            <div class="input-wrapper">
              <select id="opcoes" name="opcoes">
                <option value="opcao1">Selecione a Cidade</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
            </div>
          </div>
          <div class="ceasa">
            <label for="id-cnpj" class="label">ceasa</label>
            <div class="input-wrapper">
              <select id="opcoes" name="opcoes">
                <option value="opcao1">Selecione a CEASA</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
            </div>
          </div>
          <div class="nomeresponsavel">
            <label for="id-cnpj" class="label">nome do responsável</label>
            <div class="input-wrapper">
              <select id="opcoes" name="opcoes">
                <option value="opcao1">nome..</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
            </div>
          </div>
          <div class="telefone de contato">
            <label for="id-telefone" class="label">telefone de contato</label>
            <div class="input-wrapper-telefone">
              <input
                  type="text"
                  id="id-telefone"
                  v-model="telefone"
                  class="text-input"
              />
            </div>
          </div>
        </div>
        <div class="col-6 form2">
          <div class="informacoes">
            <label for="id-informacoes" class="label-info">informações</label>
            <div class="campo">
              <div class="input-wrapper">
                <input
                    type="text"
                    id="id-endereco"
                    v-model="endereco"
                    class="text-input"
                />
              </div>
            </div>
            <div class="endereco">
              <label for="id-endereco" class="label">Endereço:</label>
              <div class="input-wrapper">
                <input
                    type="text"
                    id="id-endereco"
                    v-model="endereco"
                    class="text-input"
                />
              </div>
            </div>
            <div class="row">
              <div class="cep">
                <label for="id-cep" class="label">CEP:</label>
                <div class="input-wrapper-cep">
                  <input
                      type="text"
                      id="id-name"
                      v-model="nome"
                      class="text-input-cep"
                  />
                </div>
              </div>
              <div class="telefone">
                <label for="id-telefone" class="label">Telefone:</label>
                <div class="input-wrapper-tel">
                  <input
                      type="text"
                      id="id-telefone"
                      v-model="telefone"
                      class="text-input-tel"
                  />
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.formulario {
  display: flex;
  justify-content: space-between; /* Garante que os elementos sejam espaçados */
  align-items: center; /* Centraliza verticalmente */
  margin-top: 50px;
}

.form1 {
  margin-left: auto; /* Empurra o conteúdo para a direita */
  width: 376px;
}
.form2 {
  margin-right: auto; /* Empurra o conteúdo para a direita */
  width: 615px;
  height: 472px;
  margin-left:50px;
  background-color: #F9E8301A;

}
.input-wrapper {
  display: flex;
  height: 54px;
  width: 376px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 12px;
  padding: 2px 2px;
  background-color: #fff;
  margin-bottom: 25px;
}
.input-wrapper-tel {
  display: flex;
  height: 54px;
  width: 346px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 12px;
  padding: 2px 2px;
  background-color: #fff;
  margin-bottom: 25px;
}
.input-wrapper-cep {
  display: flex;
  height: 54px;
  width: 194px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 12px;
  padding: 2px 2px;
  background-color: #fff;
  margin-bottom: 25px;
}
#opcoes {
  width: 376px;
  height: 45px;
  background-color: white;
  border-radius: 12px;
  border: none;
}
.text-input {
  flex: 1;
  border: none;
  height: 54px;
  width: 155px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.text-input-cep {
  flex: 1;
  border: none;
  height: 50px;
  width: 190px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.text-input-tel {
  flex: 1;
  border: none;
  height: 50px;
  width: 346px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.enterposto-icon {
  width: 55px;
  height: 55px;
  margin-bottom: 30px;
}
.title {
  font-size: 32px;
  font-family: Arial, sans-serif;
  font-weight: bold;
  margin-bottom: 30px;
}
.label {
  margin-bottom: 10px;
  font-weight: bold;
  font-size: 13px;
}
.informacoes {
  width: 615px;
  height: 471px;
}
.text-input {
  flex: 1;
  border: none;
  height: 50px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.input-wrapper {
  display: flex;
  height: 54px;
  width: 376px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 12px;
  padding: 2px 2px;
  background-color: #fff;
  margin-bottom: 25px;
}
.label-info {
  color: #772122;
  font-family: Arial, sans-serif;
  font-weight: bold;
}
.cep {
  width: 194px;
  margin-right: 10px;
}
.telefone {
  width: 346px;
  margin-left: 10px;
}
</style>