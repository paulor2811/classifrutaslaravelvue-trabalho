<script>
import Cabecalho from '../../inicial/Cabecalho.vue';
export default {
  name: "PageTipo",
  components: {
    Cabecalho,
  },
  data() {
    return {
      showDialog: false, // Controle para exibir ou ocultar o diálogo
    };
  },
}
</script>

<template>

  <Cabecalho />


  <section>
    <div id="app">
      <!-- Diálogo -->
      <div v-if="showDialog" class="dialog-overlay">
        <div class="dialog-box">
          <div class="col-12">
            <div class="div-tittle d-flex row">
                <h4 class="h4-tittle">Categoria</h4>
              <div class="cl-sair">
                <button class="btn-sair d-flex" @click="showDialog = false">
                  <img src="../../../assets/site-assets/anunciar/x.png" alt="Facebook" class="xx me-2" />
                </button>
              </div>
            </div>
            <div class="btn-categoria">
              <div class="cat-margem">
                <button class="cat-navegar" @click="handleClick">
                  <span class="cat-sp cat-ff">Frutas</span>
                  <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
                </button>
              </div>
              <div class="cat-margem">
                <button class="cat-navegar" @click="handleClick">
                  <span class="cat-sp cat-ff">Verduras</span>
                  <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
                </button>
              </div>
              <div class="cat-margem">
                <button class="cat-navegar" @click="handleClick">
                  <span class="cat-sp cat-ff">Legumes</span>
                  <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
                </button>
              </div>
              <div class="cat-margem">
                <button class="cat-navegar" @click="handleClick">
                  <span class="cat-sp cat-ff">diversos</span>
                  <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container d-flex justify-content-center align-items-center">

      <div class="row">
        <div class="title">
          <h4 class="h4-title">
            Oi, o que vamos anunciar?
          </h4>
        </div>
        <div class="div-tipo1 col-6">
          <div class="botao-margem">
            <button class="button-navegar" @click="showDialog = true">
              <img src="../../../assets/site-assets/anunciar/hortifrutigranjeiro-icon.png" alt="Facebook" class="perfil-icon me-2" />
              <span class="sp ff">hortifrutigranjeiro</span>
              <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
            </button>
          </div>
          <div class="botao-margem">
            <button class="button-navegar" onclick="window.location.href='http://classifrutas.local:88/registrar/dados/endereco'" @click="handleClick">
              <img src="../../../assets/site-assets/anunciar/pescados-icon.png" alt="Facebook" class="perfil-icon me-2" />
              <span class="sp ff">pescados</span>
              <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
            </button>
          </div>
          <div class="botao-margem">
            <button class="button-navegar" onclick="window.location.href='http://classifrutas.local:88/registrar/dados/endereco'" @click="handleClick">
              <img src="../../../assets/site-assets/anunciar/fretes-icon.png" alt="Facebook" class="perfil-icon me-2" />
              <span class="sp ff">fretes</span>
              <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
            </button>
          </div>
          <div class="botao-margem">
            <button class="button-navegar" onclick="window.location.href='http://classifrutas.local:88/registrar/dados/endereco'" @click="handleClick">
              <img src="../../../assets/site-assets/anunciar/outros-icon.png" alt="Facebook" class="perfil-icon me-2" />
              <span class="sp ff">outros</span>
              <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
            </button>
          </div>
        </div>
        <div class="div-tipo2 col-6">
          <div class="botao-margem">
            <button class="button-navegar" onclick="window.location.href='http://classifrutas.local:88/registrar/dados/endereco'" @click="handleClick">
              <img src="../../../assets/site-assets/anunciar/flores-icon.png" alt="Facebook" class="perfil-icon me-2" />
              <span class="sp ff">flores</span>
              <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
            </button>
          </div>
          <div class="botao-margem">
            <button class="button-navegar" onclick="window.location.href='http://classifrutas.local:88/registrar/dados/endereco'" @click="handleClick">
              <img src="../../../assets/site-assets/anunciar/insumos-icon.png" alt="Facebook" class="perfil-icon me-2" />
              <span class="sp ff">insumos</span>
              <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
            </button>
          </div>
          <div class="botao-margem">
            <button class="button-navegar" onclick="window.location.href='http://classifrutas.local:88/registrar/dados/endereco'" @click="handleClick">
              <img src="../../../assets/site-assets/anunciar/servicos-icon.png" alt="Facebook" class="perfil-icon me-2" />
              <span class="sp ff">serviços</span>
              <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
            </button>
          </div>
          <div class="botao-margem">
            <button class="button-navegar" onclick="window.location.href='http://classifrutas.local:88/registrar/dados/endereco'" @click="handleClick">
              <img src="../../../assets/site-assets/anunciar/publicidade-icon.png" alt="Facebook" class="perfil-icon me-2" />
              <span class="sp ff">publicidade</span>
              <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
            </button>
          </div>
        </div>
    </div>
    </div>
  </section>
</template>

<style scoped>
.row {
  text-align: center;
}
.h4-title {
  margin-top: 100px;
  margin-bottom: 50px;
}
.botao-margem {
  width: 100%;
  max-width: 350px; /* Mantém largura máxima do botão */
  height: 108px;
  border: 1px solid #8080808C;
  border-radius: 18px;
  background-color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 15px auto; /* Espaçamento responsivo */
}
.button-navegar {
  position: relative;
  width: 100%;
  max-width: 348px; /* Mantém o design do botão */
  height: 104px;
  border-radius: 18px;
  background-color: white;
  color: black;
  border: none;
  text-align: left; /* Alinha o texto à esquerda */
  display: flex;
  flex-direction: column; /* Texto alinhado verticalmente */
  justify-content: center;
  margin: 15px; /* Ajusta espaçamento entre botões */
}
.perfil-icon {
  width: 60px;
  height: 60px;
  margin-bottom: 20px;
}
.sp {
   position: relative;
   bottom: 10px;
 }
.ff {
  font-family: Arial;
  font-size: 14px;
  font-weight: 400;
}
.tt {
  font-family: Arial;
  font-size: 16px;
}
.fx {
  width: 6px;
  height: 15px;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 0px;
}
/* Estilos para o diálogo */
.dialog-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  z-index: 9999; /* Garante que fique acima de todos os elementos */
  display: flex;
  justify-content: center;
  align-items: center;
}

.dialog-box {
  background: white;
  padding: 30px;
  border-radius: 15px;
  max-width: 596px;
  width: 100%;
  height: 480px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  text-align: center;
}


.cat-margem {
  width: 100%;
  max-width: 435px; /* Mantém largura máxima do botão */
  height: 44px;
  background-color: #F8F7F5;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 15px auto; /* Espaçamento responsivo */
  margin-bottom: 44px;
}
.cat-navegar {
  position: relative;
  width: 435px;
  height: 44px;
  background-color: #F8F7F5;
  color: black;
  border: none;
  text-align: left; /* Alinha o texto à esquerda */
  display: flex;
  flex-direction: column; /* Texto alinhado verticalmente */
  justify-content: center;
  margin: 15px; /* Ajusta espaçamento entre botões */
}
.cat-ff {
  font-family: Arial;
  font-size: 14px;
  font-weight: 400;
}
.div-tittle {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 50px;
  text-align: left;
  margin-left: 10px;
}
.xc {
  width: 24px;
  height:24px;
}
.h4-tittle {
  width: 150px;
}
.btn-sair {
  width: 24px;
  height: 24px;
  background-color: white;
  border: none;
}
.xx {
  width: 24px;
  height: 24px;
}
.cl-sair {
  width: 30px;
  height: 30px;
  margin-right: 5%;
}

@media (max-width: 480px) {
  .div-tittle {
    flex-direction: row;
  }
}
</style>