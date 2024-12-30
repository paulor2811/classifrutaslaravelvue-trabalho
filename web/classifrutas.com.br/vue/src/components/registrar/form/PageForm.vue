<template>
  <Cabecalho />
  <AuthButtons />
  <section>
    <div class="container d-flex flex-column justify-content-center">
      <!-- Campo Nome -->
      <div class="field name-field">
        <label for="id-name" class="label">nome completo</label>
        <div class="input-wrapper">
          <input
              type="text"
              id="id-name"
              v-model="formData.nome"
              class="text-input"
          />
        </div>
      </div>

      <!-- Campo Celular -->
      <div class="field phone-field">
        <label for="id-phone" class="label">celular</label>
        <div class="input-wrapper">
          <input
              type="text"
              id="id-phone"
              v-model="formData.celular"
              class="text-input"
              placeholder="de preferência o WhatsApp"
          />
          <img
              src="../../../assets/site-assets/whatsapp-icon.png"
              alt="WhatsApp Icon"
              class="input-icon"
          />
        </div>
      </div>

      <!-- Campo Email -->
      <div class="field email-field">
        <label for="id-email" class="label">email</label>
        <div class="input-wrapper">
          <input
              type="text"
              id="id-email"
              v-model="formData.email"
              class="text-input"
          />
        </div>
      </div>

      <!-- Campo Senha -->
      <div class="field pwd-field">
        <label for="id-pwd" class="label">senha</label>
        <div class="input-wrapper">
          <input
              type="password"
              id="id-pwd"
              v-model="formData.password"
              class="text-input"
              placeholder="no mínimo 8 caracteres"
          />
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container d-flex flex-column justify-content-center">
      <!-- Campo Receber Novidades -->
      <div class="field checkbox-field">
        <label class="checkbox-label">
          <input type="checkbox" v-model="conectado" class="checkbox-input" />
          aceito receber novidade do classifrutas
        </label>
      </div>

      <!-- Campo Aceitar Termos -->
      <div class="field checkbox-field">
        <label class="checkbox-label">
          <input type="checkbox" v-model="conectado" class="checkbox-input" />
          Estou de acordo com os termos de serviço  e a<br/>
          política de privacidade do Classifrutas
        </label>
      </div>

      <div class="signup-button">
        <button class="button" @click="submitForm">
          criar conta
        </button>
      </div>
      <a class="link-signup-text" href="http://classifrutas.local:88/login">já tenho uma conta</a>
    </div>
  </section>
</template>

<script>
import Cabecalho from '../../GeralComponents/Cabecalho.vue';
import AuthButtons from '../../GeralComponents/AuthButtons.vue';
export default {
  name: "PageForm",
  components: {
    Cabecalho,
    AuthButtons,
  },
  data() {
    return {
      formData: {
        tipo_usuario_id: 1, // Exemplo: valor fixo ou dinâmico
        tipo_anunciante_id: 2, // Campo opcional
        uuid: this.generateUUID(), // Gere um UUID
        nome: "", // Input do nome completo
        nome_fantasia: "nome",
        email: "", // Input do email
        password: "", // Input da senha
        grupo_usuario_id: 1, // Exemplo: valor fixo ou dinâmico
        grupo_nome: "Default Group", // Nome do grupo
        is_adm: true, // Defina o valor padrão
      },
    };
  },
  methods: {
    generateUUID() {
      return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
        const r = (Math.random() * 16) | 0,
            v = c === 'x' ? r : (r & 0x3) | 0x8;
        return v.toString(16);
      });
    },
    async submitForm() {
      try {
        const response = await fetch("http://api.classifrutas.local:88/api/register-user", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(this.formData),
        });

        // Log da resposta para ver o conteúdo
        const responseText = await response.text();  // Obtém a resposta como texto
        console.log("Resposta do servidor:", responseText);

        // Se a resposta não for OK, apenas mostre o erro
        if (!response.ok) {
          console.error("Erro ao enviar o formulário:", responseText);
          return;
        }

        // Se for uma resposta válida JSON, faça o parse
        let data;
        try {
          data = JSON.parse(responseText);  // Tentando parse manual
        } catch (error) {
          console.error("Erro ao parsear JSON:", error);
          return;
        }

        // Processar dados se o JSON for válido
        if (data) {
          console.log("Resposta do servidor (JSON):", data);
        }
      } catch (error) {
        console.error("Erro ao enviar o formulário:", error.message);
      }
    }

  },
};
</script>

<style scoped>
.container {
  height: auto;
  width: 100%; /* Alterado para 100% para a largura se ajustar ao dispositivo */
  max-width: 383px; /* Mantém a largura máxima do formulário */
  margin: 0 auto; /* Centraliza o formulário */
  padding: 0 15px; /* Adiciona um pequeno espaçamento interno para telas menores */
}

.field {
  margin-bottom: 15px; /* Adiciona um espaço entre os campos */
}

.label {
  display: block; /* Garante que o label fique acima do input */
  font-size: 14px;
  font-weight: bold;
  color: #333;
}

.input-wrapper {
  display: flex;
  height: 48px;
  align-items: center;
  border: 1px solid #E2E0E2;
  border-radius: 20px;
  padding: 2px 2px;
  background-color: #fff;
}

.text-input {
  flex: 1;
  border: none;
  height: 40px;
  font-size: 16px;
  outline: none;
  border-radius: 20px;
}

.input-icon {
  height: 30px; /* Reduz a altura do ícone para melhorar a responsividade */
  width: 30px; /* Ajusta a largura do ícone */
  margin-right: 10px; /* Espaço entre o input e o ícone */
}

.text-input::placeholder {
  color: #999;
  font-size: 14px;
}

/* Responsividade para dispositivos móveis */
@media (max-width: 768px) {
  .label {
    font-size: 12px; /* Ajusta o tamanho da fonte para telas menores */
  }

  .text-input {
    font-size: 14px; /* Ajusta o tamanho da fonte no campo de texto */
  }

  .input-wrapper {
    padding: 5px; /* Ajuste o padding para telas menores */
  }

  .input-icon {
    height: 30px; /* Ajusta o tamanho do ícone em telas pequenas */
    width: 30px;
  }

  .container {
    padding: 0 10px; /* Menos padding para telas muito pequenas */
  }

  .field {
    margin-bottom: 10px; /* Ajusta o espaço entre os campos */
  }
}

@media (max-width: 480px) {
  .label {
    font-size: 14px; /* Tamanho menor do texto do label em telas menores */
  }

  .text-input {
    font-size: 12px; /* Ajuste do tamanho da fonte no input */
  }

  .input-wrapper {
    padding: 5px; /* Ajusta o padding ainda mais para telas menores */
  }

  .input-icon {
    height: 30px; /* Ajusta o tamanho do ícone em telas muito pequenas */
    width: 30px;
  }

  .container {
    width: 100%; /* Faz o container ocupar 100% da tela em dispositivos muito pequenos */
  }
}

.button {
  width: 100%; /* Ajusta o botão para 100% da largura do formulário */
  height: 48px;
  border-radius: 20px;
  border: none;
  background-color: #EE2641;
  font-family: Arial;
  font-size: 15px;
  font-weight: bold;
  color: white;
  margin-top: 20px; /* Espaço superior do botão */
}
a.link-signup-text {
  display: block; /* Garante que o link ocupe o espaço do contêiner */
  width: 100%; /* Faz o link ocupar toda a largura disponível */
  text-align: center; /* Centraliza o texto do link */
  color: black;
  font-weight: bold;
  font-size: 15px;
  font-family: Arial;
}
/* Responsividade para dispositivos móveis */
@media (max-width: 768px) {
  .checkbox-label {
    font-size: 14px; /* Ajusta o tamanho da fonte para telas menores */
  }

  .button {
    font-size: 14px; /* Ajusta o tamanho da fonte do botão */
    height: 60px; /* Ajusta a altura do botão */
  }

  .container {
    padding: 0 10px; /* Menos padding para telas menores */
  }
}

@media (max-width: 480px) {
  .checkbox-label {
    font-size: 14px; /* Reduz o tamanho da fonte em telas muito pequenas */
  }

  .button {
    font-size: 13px; /* Ajusta o tamanho da fonte em telas muito pequenas */
    height: 50px; /* Ajusta a altura do botão */
  }

  .container {
    width: 100%; /* Faz o container ocupar 100% da largura em telas pequenas */
  }
}
</style>
