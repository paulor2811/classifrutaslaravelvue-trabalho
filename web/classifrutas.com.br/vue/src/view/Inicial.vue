<template>
  <CompBarraSuperior />
  <CompCabecalho />
  <CompVideoSection />
  <CompMenuBusca />
  <CompCategorias />
  <CompAnuncio />
  <CompMaisBuscados />
  <CompDiretoRoca />
  <CompTemporadaPessego />
  <CompMercadoFlores />
  <CompInsumos />
  <CompParceiros />
  <CompRodaPe />
</template>

<script>
import CompBarraSuperior from '../components/inicial/BarraSuperior.vue';
import CompCabecalho from '../components/inicial/Cabecalho.vue';
import CompVideoSection from '../components/inicial/VideoSection.vue';
import CompMenuBusca from '../components/inicial/MenuBusca.vue';
import CompCategorias from '../components/inicial/Categorias.vue';
import CompAnuncio from '../components/inicial/Anuncios.vue';
import CompMaisBuscados from '../components/inicial/MaisBuscados.vue';
import CompDiretoRoca from '../components/inicial/DiretoRoca.vue';
import CompTemporadaPessego from '../components/inicial/TemporadaPessego.vue';
import CompMercadoFlores from '../components/inicial/MercadoFlores.vue';
import CompInsumos from '../components/inicial/Insumos.vue';
import CompParceiros from '../components/inicial/Parceiros.vue';
import CompRodaPe from '../components/GeralComponents/RodaPe.vue'

export default {
  name: "Home",
  components: {
    CompBarraSuperior,
    CompCabecalho,
    CompVideoSection,
    CompMenuBusca,
    CompCategorias,
    CompAnuncio,
    CompMaisBuscados,
    CompDiretoRoca,
    CompTemporadaPessego,
    CompMercadoFlores,
    CompInsumos,
    CompParceiros,
    CompRodaPe,
  },
};
</script>

<style src="../GlobalStyles/Home.css">
</style>
