<script>
export default {
  name: "ViewDados2"
}
</script>

<template>
  <section>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-div col-6">
          <h4>
            confirme seus dados para ter<br/>
            acesso completo ao<br/>
            classifrutas
          </h4>
        </div>
        <div class="campos-div col-6">
          <div class="campo" >
            <div class="outro-campo">
              <div class="perfil-usuario">
                <div class="row linha">
                  <div class="col-2">
                    <img
                        src="../../../assets/site-assets/email-validado-icon.png"
                        alt="Perfil de User"
                        class="email-image-icon"
                    />
                  </div>
                  <div class="col-10 ajustar">
                    <h4 class="campo-titulo">email</h4>
                    <p class="paragraph">validado</p>
                  </div>
                </div>
              </div>
              <div class="endereco">
                <div class="row linha">
                  <div class="col-2">
                    <img
                        src="../../../assets/site-assets/endereco-validado-icon.png"
                        alt="Perfil de User"
                        class="endereco-image-icon"
                    />
                  </div>
                  <div class="col-10 ajustar">
                    <h4 class="campo-titulo">email</h4>
                    <p class="paragraph">validado</p>
                  </div>
                </div>
              </div>
              <div class="dados-pessoais">
                <div class="row linha">
                  <div class="mudar col-2">
                    <img
                        src="../../../assets/site-assets/user-perfil-icon.png"
                        alt="Perfil de User"
                        class="perfil-image-icon"
                    />
                  </div>
                  <div class="col-10 ajustar">
                    <h4 class="campo-titulo">perfil do usuário</h4>
                    <p class="paragraph">pendente</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="navegar d-flex">
          <div class="voltar">
            <button class="button-voltar" @click="handleClick"> < voltar </button>
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
.endereco-image-icon {
  width: 32px;
  height: 32px;
  margin-top: 15px;
}
.campos-div {
}
.campo {
  margin-left: 200px;
}
.perfil-usuario, .dados-pessoais, .endereco {
  width: 450px;
  margin-bottom: 50px;
  border: 1px solid #8080808C;
  border-radius: 20px;
  padding: 20px;
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
  top: 150px;
}
.linha {
  width: 450px;
}
.ajustar {
  width: 190px;
}
.email-image-icon {
  width: 32px;
  height: 32px;
  margin-top: 15px;
}
.mudar {
  width: 200px;
  margin-top: 15px;
}
</style>