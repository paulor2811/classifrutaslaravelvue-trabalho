# Classifrutas Starter Project

[🇺🇸 Read in English](#english) | [🇧🇷 Leia em Português](#portuguese)

## 🇺🇸 <a id="english"></a>
Welcome to the **Classifrutas Starter Project**, a starter structure for projects using **Laravel**, **Vue.js**, **PostgreSQL**, and **Nginx**, fully configured with **Docker**.

---

## 📦 Project Structure

```plaintext
project/
├── etc/                    # Service configurations
│   ├── nginx/              # Nginx configurations
│   ├── php/                # PHP configuration
│   └── node/               # Node.js configuration
├── web/                    # Source code
│   ├── classifrutas.com.br/
│   │   ├── laravel/        # Backend in Laravel
│   │   ├── vue/            # Frontend in Vue.js
│   │   └── README.md       # Project documentation
└── docker-compose.yml      # Docker configuration
```

---

## 🚀 Technologies Used

- **Backend:** Laravel
- **Frontend:** Vue.js
- **Database:** PostgreSQL
- **Web Server:** Nginx
- **Container Management:** Docker Compose
- **CSS Framework:** Bootstrap 5

---

## ⚙️ Initial Setup

### **Requirements**

Make sure you have installed:

- Docker
- Docker Compose

### **Installation**

1. Clone the repository:

   ```bash
   git clone https://github.com/jvbhidalgo/LaravelVue.git classifrutas.com.br
   cd classifrutas.com.br
   ```

2. Set environment variables in the `.env` file (example):

   ```dotenv
   APP_ENV=local
   APP_DEBUG=true
   DB_CONNECTION=pgsql
   DB_HOST=db
   DB_PORT=5432
   DB_DATABASE=classifrutas_db
   DB_USERNAME=postgres
   DB_PASSWORD=postgres
   ```

3. Start the project with Docker Compose:

   ```bash
   docker compose up --build
   ```

   Docker, Nginx, and other files are compressed in the .zip archive.

---

## 🔧 How to Use

### Local Access

- **Frontend Vue.js:** [http://classifrutas.local:88](http://classifrutas.local:88)
- **API Laravel:** [http://api.classifrutas.local:88](http://api.classifrutas.local:88)

### Useful Commands

```bash
# Start containers
docker compose up --build

# Stop containers
docker compose down

# View service logs
docker compose logs nginx
```

---

## 📂 Folder Structure and Services

| Service    | Path                              | Description          |
| ---------- | --------------------------------- | -------------------- |
| Laravel    | `web/classifrutas.com.br/laravel` | Backend API          |
| Vue.js     | `web/classifrutas.com.br/vue`     | Frontend Web         |
| Nginx      | `etc/nginx`                       | Nginx configurations |
| PHP-FPM    | `etc/php`                         | PHP configurations   |
| PostgreSQL | Configured via Docker Compose     | Database Service     |

---

### 🔷 App.vue

This file contains the main Vue.js application. It is already configured to connect and interact with the Laravel API, demonstrating that the API is working as expected.

It includes an example API call showing successful communication between the frontend and backend.

---

## 🇧🇷 <a id="portuguese"></a>

Bem-vindo ao **Classifrutas Starter Project**, uma estrutura inicial para projetos usando **Laravel**, **Vue.js**, **PostgreSQL** e **Nginx**, totalmente configurada com **Docker**.

---

## 📦 Estrutura do Projeto

```plaintext
projeto/
├── etc/                    # Configurações de serviços
│   ├── nginx/              # Configurações do Nginx
│   ├── php/                # Configuração do PHP
│   └── node/               # Configuração do Node.js
├── web/                    # Código-fonte
│   ├── classifrutas.com.br/
│   │   ├── laravel/        # Backend em Laravel
│   │   ├── vue/            # Frontend em Vue.js
│   │   └── README.md       # Documentação do Projeto
└── docker-compose.yml      # Configuração do Docker
```

---

## 🚀 Tecnologias Utilizadas

- **Backend:** Laravel
- **Frontend:** Vue.js
- **Banco de Dados:** PostgreSQL
- **Servidor Web:** Nginx
- **Gerenciamento de Contêineres:** Docker Compose
- **Framework CSS:** Bootstrap 5

---

## ⚙️ Configuração Inicial

### **Requisitos**

Certifique-se de ter instalado:

- Docker
- Docker Compose

### **Instalação**

1. Clone o repositório:

   ```bash
   git clone https://github.com/jvbhidalgo/LaravelVue.git classifrutas.com.br
   cd classifrutas.com.br
   ```

2. Configure as variáveis de ambiente no arquivo `.env` (exemplo):

   ```dotenv
   APP_ENV=local
   APP_DEBUG=true
   DB_CONNECTION=pgsql
   DB_HOST=db
   DB_PORT=5432
   DB_DATABASE=classifrutas_db
   DB_USERNAME=postgres
   DB_PASSWORD=postgres
   ```

3. Inicie o projeto com Docker Compose:

   ```bash
   docker compose up --build
   ```

   Os arquivos Docker, Nginx e outros estão compactados no arquivo .zip.

---

## 🔧 Como Usar

### Acessos Locais

- **Frontend Vue.js:** [http://classifrutas.local:88](http://classifrutas.local:88)
- **API Laravel:** [http://api.classifrutas.local:88](http://api.classifrutas.local:88)

### Comandos Úteis

```bash
# Iniciar contêineres
docker compose up --build

# Parar contêineres
docker compose down

# Ver logs dos serviços
docker compose logs nginx
```

---

## 📂 Estrutura de Pastas e Serviços

| Serviço    | Caminho                          | Descrição             |
| -----------| --------------------------------- | --------------------- |
| Laravel    | `web/classifrutas.com.br/laravel` | API Backend           |
| Vue.js     | `web/classifrutas.com.br/vue`     | Frontend Web          |
| Nginx      | `etc/nginx`                       | Configurações do Nginx|
| PHP-FPM    | `etc/php`                         | Configurações do PHP  |
| PostgreSQL | Configurado via Docker Compose    | Serviço de Banco      |

---

### 🔷 App.vue

Este arquivo contém a aplicação principal em Vue.js, já configurada para se conectar e interagir com a API do Laravel, demonstrando que a API está funcionando corretamente.

Ele inclui um exemplo de chamada à API, mostrando comunicação bem-sucedida entre o frontend e o backend.

