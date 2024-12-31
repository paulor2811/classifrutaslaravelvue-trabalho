<script>
import Cabecalho from "../inicial/Cabecalho.vue";
export default {
  name: "PagePublicar",
  components: {
    Cabecalho,
  }
}
</script>

<template>
  <Cabecalho />

  <div class="container d-flex justify-content-center">
    <div class="conteudo">
      <div class="row">
        <div class="fotos col-6">

        </div>
        <div class="formulario col-6">
          <div class="card">
            <p>Os intens com (*) são obrigatórios </p>
          </div>
          <div class="d-fruta">
            <label for="id-fruta" class="label">Fruta *</label>
            <div class="input-wrapper">
              <select id="f" name="fruta">
                <option value="opcao1">Opção 1</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
            </div>
          </div>
          <div class="d-variedade">
            <label for="id-fruta" class="label">Variedade *</label>
            <div class="input-wrapper">
              <select id="f" name="fruta">
                <option value="opcao1">Opção 1</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
            </div>
          </div>
          <div class="d-t-calibre">
            <label for="id-fruta" class="label">Tamanho/calibre</label>
            <div class="input-wrapper">
              <input
                  type="text"
                  id="id-name"
                  v-model="nome"
                  class="text-input-cnpj"
              />
            </div>
            <div class="valores">
              <label for="id-fruta" class="label">Variedade *</label>
              <div class="input-wrapper">
                <select id="f" name="fruta">
                  <option value="opcao1">Opção 1</option>
                  <option value="opcao2">Opção 2</option>
                  <option value="opcao3">Opção 3</option>
                </select>
              </div>
              <label for="id-fruta" class="label">Variedade *</label>
              <div class="in-wr">
                <select id="xf" name="fruta">
                  <option value="opcao1">Opção 1</option>
                  <option value="opcao2">Opção 2</option>
                  <option value="opcao3">Opção 3</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>

<style scoped>
.conteudo {
  width: 100%;
}
.input-wrapper {
  display: flex;
  height: 48px;
  width: 100%;
  max-width: 100%;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 12px;
  padding: 2px 2px;
  background-color: #fff;
  margin-bottom: 25px;
}
.in-wr {
  display: flex;
  height: 48px;
  width: 90px;
  max-width: 100%;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 12px;
  padding: 2px 2px;
  background-color: #fff;
  margin-bottom: 25px;
}
.label {
  display: block;
  font-size: 14px;
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
}
.valores .label {
  display: block;
  font-size: 14px;
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
  width: 200px;
}
.valores .input-wrapper {
  display: flex;
  height: 48px;
  width: 200px;
  max-width: 100%;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 12px;
  padding: 2px 2px;
  background-color: #fff;
  margin-bottom: 25px;
}
#f {
  width: calc(100% - 20px);
  max-width: 100%;
  height: 45px;
  background-color: white;
  border-radius: 12px;
  border: none;
  padding: 0 10px;
}
#xf {
  width: calc(100% - 20px);
  max-width: 90px;
  height: 45px;
  background-color: white;
  border-radius: 12px;
  border: none;
  padding: 0 10px;
}
.valores #f {
  width: calc(100% - 20px);
  max-width: 100%;
  height: 45px;
  background-color: white;
  border-radius: 12px;
  border: none;
  padding: 0 10px;
}
.text-input-cnpj {
  width: 100%;
  border: none;
  outline: none;
  background: none;
  font-size: 16px;
  height: 100%;
}
.card {
  width: 100%;
  margin-top: 100px;
}
</style>