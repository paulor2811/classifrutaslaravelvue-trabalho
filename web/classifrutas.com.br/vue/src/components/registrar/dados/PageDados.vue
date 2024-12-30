<script>
import Cabecalho from "../../GeralComponents/Cabecalho.vue";
import Loading from "../../GeralComponents/Loading.vue";
export default {
  name: "PageDados",
  components: {
    Cabecalho,
    Loading,
  },
  data() {
    return {
      currentRoute: this.$route.path,
      isLoading: false, // Estado para controlar se a animação é exibida
      teste: true,
    };
  },
  computed: {
    isDadosRoute() {
      return this.$route.path === "/registrar/dados" || this.$route.path === "/registrar/dados/";
    },
  },
  watch: {
    $route(newRoute) {
      this.currentRoute = newRoute.path;
    },
  },
  methods: {
    async enviarDados() {
      this.isLoading = true;
      this.teste = false;
      try {
        await new Promise((resolve) => setTimeout(resolve, 2000));
      } finally {
        this.isLoading = false;
        this.$router.push('/bem-vindo'); // Redireciona para a rota Home
      }
    },
  }
}
</script>

<template>

  <router-view></router-view>


  <Loading v-if="isLoading" />

  <div v-if="teste">
    <Cabecalho v-if="isDadosRoute" :key="$route.fullPath"/>

    <section v-if="isDadosRoute" :key="$route.fullPath">
      <div class="container d-flex justify-content-center align-items-center">
        <div class="text-title">
          <h4>selecione o perfil da sua conta</h4>
        </div>
        <div class="navegar">
          <div class="botao-margem">
            <button class="button-navegar" @click="handleClick">
              <img src="../../../assets/site-assets/email-validado-icon.png" alt="Facebook" class="perfil-icon me-2" />
              <span class="sp ff">email</span>
              <span class="sp tt">validado</span>
              <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
            </button>
          </div>
          <div class="botao-margem">
            <button class="button-navegar" onclick="window.location.href='http://classifrutas.local:88/registrar/dados/endereco'" @click="handleClick">
              <img src="../../../assets/site-assets/endereco-validado-icon.png" alt="Facebook" class="perfil-icon me-2" />
              <span class="sp ff">endereço</span>
              <span class="sp tt">cadastrado</span>
              <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
            </button>
          </div>
          <div class="botao-margem">
            <button class="button-navegar" onclick="window.location.href='http://classifrutas.local:88/registrar/dados/perfil-conta'" @click="handleClick">
              <img src="../../../assets/site-assets/user-perfil-icon.png" alt="Facebook" class="edit me-2" />
              <span class="sp ff ed">perfil de usuário</span>
              <span class="sp tt ed">pendente</span>
              <img src="../../../assets/site-assets/fx.png" alt="Facebook" class="fx me-2" />
            </button>
          </div>
        </div>
        <div class="navegarb d-flex">
          <div class="voltar">
            <button class="button-voltar" @click="handleClick"> < voltar </button>
          </div>
          <div class="cadastrar-dados" v-if="!vCadastrar" :key="$route.fullPath">
            <button class="button-cadastrar"  @click="enviarDados"> cadastrar dados </button>
          </div>
        </div>
      </div>
    </section>
  </div>


</template>

<style scoped>
/* Container principal */
.container {
  max-width: 100%;
  width: 90%;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin: 0 auto; /* Centraliza */
  flex-direction: column;
}

/* Botões para navegação */
.button-navegar {
  position: relative;
  width: 100%;
  max-width: 348px; /* Mantém o design do botão */
  height: 104px;
  border-radius: 18px;
  background-color: white;
  color: black;
  border: none;
  padding-left: 100px; /* Mantém espaçamento do texto */
  text-align: left; /* Alinha o texto à esquerda */
  display: flex;
  flex-direction: column; /* Texto alinhado verticalmente */
  justify-content: center;
  margin: 15px; /* Ajusta espaçamento entre botões */
}

/* Ícones dentro dos botões */
.perfil-icon {
  width: 60px;
  height: 60px;
  position: absolute; /* Alinha com precisão */
  left: 20px;
  top: 50%;
  transform: translateY(-50%); /* Centraliza verticalmente */
}
.edit {
  width: 60px;
  height: 20px;
  position: absolute; /* Alinha com precisão */
  left: 20px;
  top: 50%;
  transform: translateY(-50%); /* Centraliza verticalmente */
}

/* Estilo de cada box com botão */
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

/* Título principal */
.text-title {
  margin-top: 40px;
  margin-bottom: 20px;
  text-align: center; /* Título será centralizado */
}
.text-title h4 {
  font-family: Arial;
  font-size: 24px;
  font-weight: bold;
}

/* Texto dentro dos botões */
.sp {
  position: relative;
  bottom: 10px;
}
.ff {
  font-family: Arial;
  font-size: 18px;
  font-weight: bold;
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

/* Responsividade */

/* Telas pequenas (até 768px) */
@media (max-width: 768px) {
  .text-title h4 {
    font-size: 20px;
    margin-bottom: 15px;
  }

  .container {
    width: 100%;
  }

  .button-navegar {
    width: 100%; /* Botões ocupam toda a largura */
  }

  .botao-margem {
    height: auto;
    margin: 15px 0;
  }

  .perfil-icon {
    width: 30px; /* Ícones reduzidos */
    height: 30px;
  }

  .sp {
    bottom: 5px;
  }
  .tt {
    font-size: 14px; /* Texto menor */
  }
  .ff {
    font-size: 16px;
  }
  .navegar {
    width: 100%;
  }
  .edit {
    width: 60px;
    height: 20px;
    position: absolute; /* Alinha com precisão */
    left: 20px;
    top: 50%;
    transform: translateY(-50%); /* Centraliza verticalmente */
  }
  .ed {
    width: 70px;
  }
}

/* Telas maiores (acima de 1024px) */
@media (min-width: 1024px) {
  .container {
    max-width: 80%;
  }

  .text-title {
    margin-top: 60px;
  }

  .botao-margem {
    margin: 20px;
  }
}


/* Estilo base */
.button-voltar {
  width: 198px;
  height: 48px;
  border-color: #EE2641;
  background-color: #FFFFFF;
  color: #EE2641;
  border-radius: 21px;
  border: 2px solid #EE2641;
  position: relative;
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

.navegarb {
  display: flex;
  justify-content: space-between; /* Botões ficam alinhados nos extremos */
  align-items: center;
  margin: 50px; /* Margens padrão para espaços em telas maiores */
  gap: 20px; /* Adiciona espaçamento entre os botões */
}

/* Responsividade para telas menores */
@media (max-width: 768px) {
  .navegarb {
    flex-direction: column; /* Empilha os botões verticalmente */
    margin: 20px; /* Reduz margens em telas menores */
    gap: 15px; /* Diminuir o espaço entre os botões */
  }

  .button-voltar,
  .button-cadastrar {
    width: 250px;
  }
}

@media (max-width: 480px) {
  .button-voltar,
  .button-cadastrar {
    height: 40px; /* Diminui a altura dos botões */
    font-size: 14px; /* Reduz o tamanho do texto */
  }

  .navegarb {
    margin: 10px; /* Margens ainda menores para telas muito estreitas */
  }
}
</style>