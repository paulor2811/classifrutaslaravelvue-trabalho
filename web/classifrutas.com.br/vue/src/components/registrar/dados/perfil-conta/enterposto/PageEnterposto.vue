<script>
import Cabecalho from "../../../../GeralComponents/Cabecalho.vue";
export default {
  name: "DataEnterposto",
  components: {
    Cabecalho,
  }
}
</script>

<template>

  <Cabecalho />

  <section>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="formulario">
        <div class="col-6 form1">
          <img src="../../../../../assets/site-assets/entreposto.png" alt="produtor" class="enterposto-icon me-2" />
          <h4 class="title">
            confirme aqui os<br/>
            dados para o resposável<br/>
            do seu enterposto
          </h4>
          <div class="estado">
            <label for="id-cnpj" class="label">estado</label>
            <div class="input-wrapper">
              <select id="opcoes" name="opcoes">
                <option value="opcao1">Selecione o Estado</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
            </div>
          </div>
          <div class="cidade">
            <label for="id-cnpj" class="label">cidade</label>
            <div class="input-wrapper">
              <select id="opcoes" name="opcoes">
                <option value="opcao1">Selecione a Cidade</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
            </div>
          </div>
          <div class="ceasa">
            <label for="id-cnpj" class="label">ceasa</label>
            <div class="input-wrapper">
              <select id="opcoes" name="opcoes">
                <option value="opcao1">Selecione a CEASA</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
            </div>
          </div>
          <div class="nomeresponsavel">
            <label for="id-cnpj" class="label">nome do responsável</label>
            <div class="input-wrapper">
              <select id="opcoes" name="opcoes">
                <option value="opcao1">nome..</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
              </select>
            </div>
          </div>
          <div class="telefone de contato">
            <label for="id-telefone" class="label">telefone de contato</label>
            <div class="input-wrapper-telefone">
              <input
                  type="text"
                  id="id-telefone"
                  v-model="telefone"
                  class="text-input"
              />
            </div>
          </div>
        </div>
        <div class="col-6 form2">
          <div class="informacoes">
            <label for="id-informacoes" class="label-info">informações</label>
            <div class="campo">
              <div class="input-wrapper">
                <input
                    type="text"
                    id="id-endereco"
                    v-model="endereco"
                    class="text-input"
                />
              </div>
            </div>
            <div class="endereco">
              <label for="id-endereco" class="label">Endereço:</label>
              <div class="input-wrapper">
                <input
                    type="text"
                    id="id-endereco"
                    v-model="endereco"
                    class="text-input"
                />
              </div>
            </div>
            <div class="row">
              <div class="cep">
                <label for="id-cep" class="label">CEP:</label>
                <div class="input-wrapper-cep">
                  <input
                      type="text"
                      id="id-cep"
                      class="text-input-cep"
                  />
                </div>
              </div>
              <div class="telefone">
                <label for="id-telefone" class="label">Telefone:</label>
                <div class="input-wrapper-tel">
                  <input
                      type="text"
                      id="id-telefone"
                      class="text-input-tel"
                  />
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="navegarb d-flex">
        <div class="voltar">
          <button class="button-voltar" @click="handleClick"> < voltar </button>
        </div>
        <div class="cadastrar-dados" v-if="!vCadastrar" :key="$route.fullPath">
          <button class="button-cadastrar"  @click="handleClick"> cadastrar dados </button>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
/* Estilo para o contêiner principal */
.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between; /* Espaçamento entre colunas */
  padding: 20px;
}

/* Formulário geral */
.formulario {
  display: flex;
  flex-wrap: wrap; /* Permite que as colunas quebrem em telas menores */
  gap: 20px; /* Espaçamento entre os itens */
  margin-top: 30px;
  justify-content: center; /* Centralizado nos limites */
}

/* Coluna 1 (lado esquerdo) */
.form1 {
  width: 100%;
  max-width: 400px;
}

.form1 img {
  width: 64px;
  height: 64px;
  margin-bottom: 20px;
}

.title {
  font-size: 24px;
  font-family: Arial, sans-serif;
  font-weight: bold;
  text-align: left;
  line-height: 1.5;
  margin-bottom: 20px;
}

/* Coluna 2 (lado direito) */
.form2 {
  width: 100%;
  max-width: 600px;
  background: rgba(249, 232, 48, 0.1); /* Transparência */
  border-radius: 10px;
  padding: 20px;
}

.informacoes {
  margin-bottom: 20px;
}

.label-info {
  color: #772122;
  font-family: Arial, sans-serif;
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 10px;
}

/* Campo com inputs e seletores */
.input-wrapper,
.input-wrapper-tel,
.input-wrapper-cep {
  display: flex;
  align-items: center; /* Centraliza o conteúdo */
  height: 45px;
  border: 1px solid #E2E0E2;
  border-radius: 12px;
  padding: 0 10px;
  background-color: #fff;
  margin-bottom: 20px;
  width: 100%; /* Torna os campos fluidos */
}

.input-wrapper-cep {
  max-width: 48%;
}

.input-wrapper-tel {
  max-width: 48%;
}

/* Inputs de texto */
.text-input,
.text-input-cep,
.text-input-tel {
  flex: 1;
  border: none;
  height: 100%;
  font-size: 14px;
  outline: none;
  background: transparent; /* Define a altura de acordo com a div wrapper */
}

/* Select (dropdown) */
#opcoes {
  width: 100%;
  height: 100%;
  border: none;
  outline: none;
  background: white;
  border-radius: 12px;
  padding-left: 10px;
  font-size: 14px;
}

/* Labels */
.label,
.label-info {
  display: block;
  margin-bottom: 5px;
  font-size: 14px;
  font-weight: bold;
}

/* Linha com CEP e telefone */
.row {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap; /* Permite quebra de linha em telas menores */
  gap: 10px;
}

/* Responsividade */

/* Para telas menores (até 768px) */
@media screen and (max-width: 768px) {
  /* Ajuste do container */
  .container {
    padding: 15px;
  }

  /* Quebra as colunas em linhas */
  .formulario {
    flex-direction: column;
    gap: 10px;
  }

  /* Reduz a largura das colunas para se adaptarem à tela */
  .form1,
  .form2 {
    max-width: 100%;
  }

  .form2 {
    background: none; /* Remove cor de fundo em telas menores */
    padding: 10px;
  }

  .title {
    font-size: 20px;
    text-align: center; /* Centraliza para melhorar a visualização */
    margin-bottom: 15px;
  }

  /* Inputs */
  .text-input,
  .text-input-cep,
  .text-input-tel {
    font-size: 12px; /* Texto ligeiramente menor */
  }

  /* Inputs e Select */
  #opcoes {
    padding-left: 8px;
    font-size: 12px;
  }

  /* CEP e Telefone em linha única */
  .input-wrapper-cep,
  .input-wrapper-tel {
    max-width: 100%;
  }
  .enterposto-icon {
    width: 40px;
  }
}

/* Para telas grandes (acima de 1024px) */
@media screen and (min-width: 1024px) {
  .container {
    justify-content: space-around;
  }

  .formulario {
    padding: 20px;
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