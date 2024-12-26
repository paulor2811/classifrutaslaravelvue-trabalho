<template>
  <section>
    <div class="container-fluid d-flex justify-content-center align-items-center">
      <div class="d-flex justify-content-start container-botao-voltar">
        <!-- Botão invisível, mas funcional -->
        <button class="back-button" @click="handleClick">
          <img src="../../assets/site-assets/botao-voltar.png" class="imagem-botao-voltar img-fluid" alt="Botão voltar">
        </button>
      </div>
      <div class="container-imagem">
        <img src="../../assets/site-assets/logo.png" class="imagem-logo img-fluid" alt="Logo">
      </div>
    </div>
  </section>
</template>

<script>
export default {
  methods: {
    handleClick() {
      // Ação do botão de voltar
      window.history.back(); // Exemplo de navegação para a página anterior
    }
  }
};
</script>

<style scoped>
.container-fluid {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%; /* Garante que o contêiner ocupe toda a largura */
  border-bottom: 1px solid #E2E0E2; /* Linha na parte inferior do container */
  margin-left: -40px;
}

.container-botao-voltar {
  position: relative;
  right: 200px;
}

.imagem-botao-voltar {
  margin-top: 30px;
  width: 20px; /* Ajuste o tamanho da imagem se necessário */
}

.imagem-logo {
  height: auto;
  width: 200px;
  margin-top: 20px;
  margin-bottom: 20px;
}

/* Estilo para o botão invisível */
.back-button {
  background: none; /* Remove o fundo do botão */
  border: none; /* Remove a borda do botão */
  padding: 0; /* Remove o padding */
  cursor: pointer; /* Muda o cursor para indicar que é clicável */
  width: 60px;
}

.back-button img {
  width: 20px; /* Ajuste o tamanho da imagem conforme necessário */
  height: auto; /* Mantém a proporção da imagem */
}
@media (max-width: 768px) {
  .back-button {
    display: none;

  }
  .container-botao-voltar {
    display: none;
    right: auto;
  }
  .container-fluid {
    margin-left: auto;
  }
}
</style>
