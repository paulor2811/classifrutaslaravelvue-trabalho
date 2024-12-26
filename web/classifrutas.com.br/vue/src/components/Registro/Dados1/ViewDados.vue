<script>
export default {
  name: "ViewDados"
}
</script>

<template>
  <section>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-div col-6">
          <h4>
            antes de começar vamos<br/>
            precisar confirmar algumas<br/>
            informações
          </h4>
        </div>
        <div class="campos-div col-6">
          <div class="campo" >
            <div class="outro-campo">
              <div class="perfil-usuario">
                <img
                    src="../../../assets/site-assets/user-perfil-icon.png"
                    alt="Perfil de User"
                    class="perfil-image-icon"
                />
                <h4 class="campo-titulo">perfil do usuário</h4>
                <p class="paragraph">vamos entender qual a sua usabilidade no classifrutas</p>
              </div>
              <div class="dados-pessoais">
                <img
                    src="../../../assets/site-assets/dados-pessoais-icon.png"
                    alt="Perfil de User"
                    class="dados-image-icon"
                />
                <h4 class="campo-titulo">dados pessoais</h4>
                <p class="paragraph">para poder validar um cadastro completo</p>
              </div>
              <div class="endereco">
                <img
                    src="../../../assets/site-assets/endereco-icon.png"
                    alt="Perfil de User"
                    class="endereco-image-icon"
                />
                <h4 class="campo-titulo">endereço</h4>
                <p class="paragraph">assim podemos mostrar as melhores oportunidades pra você</p>
              </div>
            </div>
          </div>
        </div>
        <div class="navegar d-flex">
          <div class="voltar">
            <button class="button-voltar" @click="handleClick"> < voltar </button>
          </div>
          <div class="cadastrar-dados">
            <button class="button-cadastrar"  @click="handleClick"> cadastrar dados </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.container {
  margin-top: 130px;
}
.row {
  width: 50%;
}
.text-div h4 {
  font-family: Arial;
  font-size: 26px;
  font-weight: bold;
}
.perfil-image-icon {
  width: 154px;
  height: 32px;
}
.dados-image-icon, .endereco-image-icon {
  width: 32px;
  height: 32px;
}
.campos-div {
}
.campo {
  margin-left: 200px;
}
.perfil-usuario, .dados-pessoais, .endereco {
  width: 450px;
  margin-bottom: 50px;
}
.paragraph {
  margin-bottom: 10px;
  font-size: 16px;
  font-family: Arial;
}
.campo-titulo {
  font-size: 18px;
  font-weight: bold;
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
}
.button-cadastrar {
  width: 348px;
  height: 40px;
  border-color: #EE2641;
  background-color: #EE2641;
  color: white;
  border-radius: 21px;
  border: 2px solid #EE2641;
  position: relative;
  left: 560px;
}
.navegar {
  position: relative;
  width: 1500px;
  position: relative;
  top: 210px;
}
</style>