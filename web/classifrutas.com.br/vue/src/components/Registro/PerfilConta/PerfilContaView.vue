<script>
export default {
  name: "PerfilContaView"
}
</script>

<template>
  <section>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="text-title">
        <h4>selecione o perfil da sua conta</h4>
      </div>
      <div class="navegar">
        <div class="botao-margem">
          <button class="button-navegar" @click="handleClick">
            <img src="../../../assets/site-assets/perfil-icon.png" alt="Facebook" class="perfil-icon me-2" />
            <span class="sp ff">pessoa fisíca</span>
            <span class="sp tt">vendedores, compradores</span>
            <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
          </button>
        </div>
        <div class="botao-margem">
          <button class="button-navegar" @click="handleClick">
            <img src="../../../assets/site-assets/empresa-icon.png" alt="Facebook" class="perfil-icon me-2" />
            <span class="sp ff">empresa</span>
            <span class="sp tt">vendedores, compradores</span>
            <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
          </button>
        </div>
        <div class="botao-margem">
          <button class="button-navegar" @click="handleClick">
            <img src="../../../assets/site-assets/produtor-icon.png" alt="Facebook" class="perfil-icon me-2" />
            <span class="sp ff">produtor</span>
            <span class="sp tt">vendedores, compradores</span>
            <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
          </button>
        </div>
        <div class="botao-margem">
          <button class="button-navegar" @click="handleClick">
            <img src="../../../assets/site-assets/entreposto.png" alt="Facebook" class="perfil-icon me-2" />
            <span class="sp ff">entreposto</span>
            <span class="sp tt">vendedores, compradores</span>
            <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
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
.container {
  width: 350px;
  flex-wrap: wrap;
}
.button-navegar {
  position: relative;
  width: 348px;
  height: 104px;
  border-radius: 18px;
  background-color: white;
  color: black;
  border: none;
  padding-left: 100px; /* Move o texto para a esquerda */
  text-align: left; /* Alinha o texto à esquerda */
  display: flex;
  flex-direction: column; /* Empilha o texto */
  justify-content: center;
}
.perfil-icon {
  width: 60px;
  height: 60px;
  position: relative;
  right: 80px;
  top: 35px;
}
.botao-margem {
  border: 1px solid #8080808C;
  background-color: white;
  width: 350px;
  height: 108px;
  border-radius: 18px;
  margin: 30px;
}
.text-title {
  margin-top: 80px;
  margin-bottom: 20px;
}
.text-title h4 {
  font-family: Arial;
  font-size: 26px;
  font-weight: bold;
}
.sp {
  position: relative;
  bottom: 20px;
}
.ff {
  font-family: Arial;
  font-size: 18px;
  font-weight: bold;
}
.fx {
  width: 6px;
  height: 15px;
  position: relative;
  left: 220px;
  bottom: 50px;
}
.tt {
  font-family: Arial;
  font-size: 16px;
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
  right: 560px;
  bottom: 20px;
}
</style>
