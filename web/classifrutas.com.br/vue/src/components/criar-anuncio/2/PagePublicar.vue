<script>
import Cabecalho from "../../inicial/Cabecalho.vue";
export default {
  name: "PagePublicar",
  components: {
    Cabecalho,
  },
  data() {
    return {
      isOn: false, // Estado inicial (desligado)
    };
  },
  computed: {
    thumbPosition() {
      // Retorna a posição da bolinha com base no estado
      return this.isOn ? '25px' : '0px'; // 60px é a distância que a bolinha percorre
    },
  },
  methods: {
    toggleState() {
      // Alterna o estado entre ligado/desligado
      this.isOn = !this.isOn;
    },
  },
}
</script>

<template>
  <Cabecalho />

  <div class="container d-flex justify-content-center">
    <div class="conteudo">
      <div class="row">
        <div class="fotos col-6">
          <div class="d-title">
            <h4 class="title">Agora informe algumas<br/>características do produto</h4>
          </div>
          <div class="imagens">
            <div class="row g-0">
              <div class="col-6 d-imagem-grande">
                <button class="btn-ft-grande">
                  <img src="../../../assets/site-assets/anunciar/imagem-grande-icon.png" class="g-imagem"/>
                </button>
                <div class="card card-ft-grande">
                  <h4 class="card-ft-grande-titulo">você sabia?</h4>
                  <p class="card-ft-grande-paragraph">anúncios com 4 ou mais fotos<br/>dobram sua chances de venda.</p>
                </div>
              </div>
              <div class="col-6 d-imagem-pequena">
                <div class="img-superior row">
                  <div class="col-3">
                    <button class="btn-ft-pequeno">
                      <img src="../../../assets/site-assets/anunciar/imagem-pequena-icon.png" class="p-imagem"/>
                    </button>
                  </div>
                  <div class="col-3">
                    <button class="btn-ft-pequeno">
                      <img src="../../../assets/site-assets/anunciar/imagem-pequena-icon.png" class="p-imagem"/>
                    </button>                  </div>
                </div>
                <div class="img-inferior row">
                  <div class="col-3">
                    <button class="btn-ft-pequeno">
                      <img src="../../../assets/site-assets/anunciar/imagem-pequena-icon.png" class="p-imagem"/>
                    </button>                  </div>
                  <div class="col-3">
                    <button class="btn-ft-pequeno">
                      <img src="../../../assets/site-assets/anunciar/imagem-pequena-icon.png" class="p-imagem"/>
                    </button>                  </div>
                </div>
                <div class="card card-ft-pequena">
                  <div class="row">
                    <h4 class="card-ft-pequena-titulo">preço Volume</h4>
                    <div id="toggle-switch" @click="toggleState">
                      <div class="track">
                        <!-- Imagem de fundo -->
                        <img src="../../../assets/site-assets/state/state1-img.png" alt="Track" class="track-img" />
                        <!-- Bolinha -->
                        <img
                            src="../../../assets/site-assets/state/state2-img.png"
                            alt="Thumb"
                            class="thumb"
                            :style="{ left: thumbPosition }"
                        />
                      </div>
                    </div>
                  </div>
                  <p class="card-ft-pequena-paragraph">sinaliza que é possível ajustar preço<br/>
                  confome o volume de compra,<br/>
                  aumentando suas chances de<br/>
                  negociação.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="formulario col-6">
          <div class="card card-p row">
            <img src="../../../assets/site-assets/anunciar/exclama-icon.png" class="img-exclama">
            <p class="card-para">Os itens com (*) são obrigatórios</p>
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
            <div class="valores row">
              <div class="unidade">
                <label for="id-fruta" class="label">Variedade *</label>
                <div class="in-wr-u">
                  <select id="f" name="fruta">
                    <option value="opcao1">Opção 1</option>
                    <option value="opcao2">Opção 2</option>
                    <option value="opcao3">Opção 3</option>
                  </select>
                </div>
              </div>
              <div class="fator">
                <label for="id-fruta" class="label">Variedade *</label>
                <div class="in-wr-f">
                  <select id="xf" name="fruta">
                    <option value="opcao1">Opção 1</option>
                    <option value="opcao2">Opção 2</option>
                    <option value="opcao3">Opção 3</option>
                  </select>
                </div>
              </div>
              <div class="preco">
                <label for="id-fruta" class="label">celular</label>
                <div class="in-wr-p">
                  <input
                      type="text"
                      id="id-phone"
                      v-model="celular"
                      class="text-input"
                      placeholder="de preferência o WhatsApp"
                  />
                </div>
              </div>
              <div class="preco">
                <label for="id-fruta" class="label">celular</label>
                <div class="in-wr-p">
                  <input
                      type="text"
                      id="id-phone"
                      v-model="celular"
                      class="text-input"
                      placeholder="de preferência o WhatsApp"
                  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="qtd-min">
                <label for="id-fruta" class="label">celular</label>
                <div class="in-wr-p">
                  <input
                      type="text"
                      id="id-phone"
                      v-model="celular"
                      class="text-input"
                      placeholder="de preferência o WhatsApp"
                  />
                </div>
              </div>
              <div class="qtd-dis">
                <label for="id-fruta" class="label">celular</label>
                <div class="in-wr-p">
                  <input
                      type="text"
                      id="id-phone"
                      v-model="celular"
                      class="text-input"
                      placeholder="de preferência o WhatsApp"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="navegarb d-flex">
    <div class="cadastrar-dados">
      <button class="button-cadastrar"  @click="enviarDados"> cadastrar dados </button>
    </div>
  </div>

</template>

<style scoped>
.conteudo {
  width: 100%;
  margin-top: 100px;
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
.in-wr-u {
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
.in-wr-p {
  display: flex;
  height: 48px;
  width: 124px;
  max-width: 100%;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 12px;
  padding: 2px 2px;
  background-color: #fff;
  margin-bottom: 25px;
}
.in-wr-f {
  display: flex;
  height: 48px;
  width: 91px;
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
  width: 100px;
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
.unidade {
  width: 200px;
  height: 74px;
}
.fator {
  width: 91px;
  height: 74px;
}
.preco {
  width: 139px;
  height: 74px;
}
.text-input {
  flex: 1;
  border: none;
  height: 40px;
  width: 95px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}
.qtd-min {
  width: 160px;
  height: 58px;
}
.qtd-dis {
  width: 160px;
  height: 58px;
}
.g-imagem {
  width: 287px;
  height: 287px;
}
.p-imagem {
  width: 132.76px;
  height: 132.76px;
}
.col-3 {
  width: 132.76px;
  height: 132.76px;
  margin: 11px;
}
.d-imagem-grande {
  width: 287.04px;
  height: 287.04px;
  margin: 11px;
}
.card-ft-grande {
  width: 287.04px;
  height: 150px;
  margin-top: 40px;
}
.card-ft-pequena {
  width: 287.04px;
  height: 150px;
  margin-top: 29px;
}
.card-ft-grande-titulo {
  width: 185px;
  font-size: 14px;
  font-weight: 700;
  font-family: Arial;
  margin-top: 20px;
  margin-left: 10px;
}
.card-ft-grande-paragraph {
  font-size: 14px;
  font-weight: 400;
  font-family: Arial;
  width: 100%;
  margin-left: 10px;
}
.card-ft-pequena-titulo {
  width: 185px;
  font-size: 14px;
  font-weight: 700;
  font-family: Arial;
  margin-top: 20px;
  margin-left: 10px;
}
.card-ft-pequena-paragraph {
  font-size: 14px;
  font-weight: 400;
  font-family: Arial;
  width: 100%;
  margin-left: 10px;
}
#toggle-switch {
  width: 70px; /* Largura do switch */
  height: 26px; /* Altura do switch */
  position: relative;
  cursor: pointer;
  margin-top: 20px;
}

.track {
  width: 47px; /* Largura da trilha */
  height: 100%; /* Altura da trilha */
  position: relative;
}

.track-img {
  width: 100%; /* Ajusta a largura da trilha */
  height: auto; /* Mantém a proporção da imagem */
  display: block; /* Remove espaços indesejados */
}

.thumb {
  width: 21px; /* Ajuste o tamanho da bolinha */
  height: 21px; /* Ajuste o tamanho da bolinha */
  position: absolute;
  top: 0; /* Centraliza verticalmente */
  transition: left 0.3s ease; /* Suaviza o movimento */
}
.card.card-p.row {
  background-color: #F8F9F9;
  width: 100%;
  max-width: 636px;
  height: 58px;
  margin-left: 0px;
  margin-bottom: 20px;
}
.img-exclama {
  width: 52px;
  height: 30px;
}
.card-para {
  margin-top: 15px;
}
.img-exclama {
  margin-top: 13px;
}
.d-fruta {
  margin-bottom: 25px;
}
.d-variedade {
  margin-bottom: 25px;
}
.d-t-calibre {
  margin-bottom: 25px;
}
.valores {
  margin-bottom: 25px;
}
.navegarb {
  display: flex;
  justify-content: space-between; /* Botões ficam alinhados nos extremos */
  align-items: center;
  margin: 50px; /* Margens padrão para espaços em telas maiores */
  gap: 20px; /* Adiciona espaçamento entre os botões */
}
.button-cadastrar {
  width: 348px;
  height: 48px;
  border-color: #EE2641;
  background-color: #EE2641;
  color: white;
  border-radius: 21px;
  border: 2px solid #EE2641;
  position: relative;
}
.btn-ft-grande {
  border: none;
  background-color: white;
}
.btn-ft-pequeno {
  border: none;
  background-color: white;
}
@media (max-width: 768px) {
  .conteudo {
    flex-direction: column;
  }
  .row {
    flex-direction: column;
  }
  .img-superior.row {
    flex-direction: row;
  }
}
</style>