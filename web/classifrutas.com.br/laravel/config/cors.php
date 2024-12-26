<?php
return [
    'paths' => ['*'],               // Permite que o CORS seja aplicado a todas as rotas da aplicação.
    'allowed_methods' => ['*'],      // Permite todos os métodos HTTP (GET, POST, PUT, DELETE, etc.).
    'allowed_origins' => ['*'],      // Permite todas as origens (qualquer domínio pode fazer requisições).
    'allowed_origins_patterns' => [],// Padrões de origem vazios, ou seja, sem restrições.
    'allowed_headers' => ['*'],      // Permite todos os cabeçalhos HTTP.
    'exposed_headers' => [],         // Não expõe cabeçalhos específicos, mas permite todos por padrão.
    'max_age' => 0,                  // Não faz cache das respostas CORS.
    'supports_credentials' => false, // Não permite credenciais, como cookies ou cabeçalhos de autenticação.
];

