<script>
import Cabecalho from "../inicial/Cabecalho.vue";
export default {
  name: "condicoes",
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
      return this.isOn ? '53px' : '0px'; // 60px é a distância que a bolinha percorre
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

  <section>
    <div class="container d-flex justify-content-center row">
      <div class="titulo-pagina">
        <h4>Escolha a opção que melhor te atende!</h4>
      </div>
      <div class="mensalidade row">
        <p class="p-mensal">Mensal</p>
        <div id="toggle-switch" @click="toggleState">
          <div class="track">
            <!-- Imagem de fundo -->
            <img src="../../assets/site-assets/state/state1-img.png" alt="Track" class="track-img" />
            <!-- Bolinha -->
            <img
                src="../../assets/site-assets/state/state2-img.png"
                alt="Thumb"
                class="thumb"
                :style="{ left: thumbPosition }"
            />
          </div>
        </div>
        <p class="p-anual">Anual</p>
        <p  class="p-desconto">desconto 20%</p>
      </div>
      <div class="planos row">
        <div class="economico"></div>
        <div class="performance"></div>
        <div class="profissional"></div>
      </div>
    </div>
  </section>
</template>


<style scoped>
#toggle-switch {
  width: 120px; /* Largura do switch */
  height: 60px; /* Altura do switch */
  position: relative;
  cursor: pointer;
}

.track {
  width: 100%; /* Largura da trilha */
  height: 100%; /* Altura da trilha */
  position: relative;
}

.track-img {
  width: 100%; /* Ajusta a largura da trilha */
  height: auto; /* Mantém a proporção da imagem */
  display: block; /* Remove espaços indesejados */
}

.thumb {
  width: 43px; /* Ajuste o tamanho da bolinha */
  height: 43px; /* Ajuste o tamanho da bolinha */
  position: absolute;
  top: 0; /* Centraliza verticalmente */
  transition: left 0.3s ease; /* Suaviza o movimento */
}
.p-mensal {
  width: 80px;
}
.p-anual {
  width: 80px;
}
.p-desconto {
  width: 130px;
}
.mensalidade {
  width: 500px;
}
.titulo-pagina {
  margin-top: 100px;
  margin-bottom: 10px;
  text-align: center;
}
.mensalidade {
  align-items: center;
}
</style>