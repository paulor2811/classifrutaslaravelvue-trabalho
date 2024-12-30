import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: '/',
        name: 'Home',
        component: () => import('../view/Inicial.vue'), // Página inicial
    },
    {
        path: '/registrar',
        name: 'Registro',
        component: () => import('../view/Registrar.vue'),
        children: [
            {
                path: 'form', // caminho relativo
                name: 'Form',
                component: () => import('../components/registrar/form/PageForm.vue'),
            },
            {
                path: 'etapas', // caminho relativo
                name: 'EtapasRegistro',
                component: () => import('../components/registrar/etapas/PageEtapas.vue'),
            },
            {
                path: 'dados', // caminho relativo
                name: 'Dados',
                component: () => import('../components/registrar/dados/PageDados.vue'),
                children: [
                    {
                        path: 'perfil-conta', // caminho relativo
                        name: 'PerfilConta',
                        component: () => import('../components/registrar/dados/perfil-conta/PagePerfilConta.vue'),
                        children: [
                            {
                                path: 'pessoa-fisica', // caminho relativo
                                name: 'PessoaFisica',
                                component: () => import('../components/registrar/dados/perfil-conta/pessoa-fisica/PagePessoaFisica.vue'),
                            },
                            {
                                path: 'empresa', // caminho relativo
                                name: 'Emrpesa',
                                component: () => import('../components/registrar/dados/perfil-conta/empresa/PageEmpresa.vue'),
                            },
                            {
                                path: 'enterposto', // caminho relativo
                                name: 'Enterposto',
                                component: () => import('../components/registrar/dados/perfil-conta/enterposto/PageEnterposto.vue'),
                            },
                            {
                                path: 'produtor', // caminho relativo
                                name: 'Produtor',
                                component: () => import('../components/registrar/dados/perfil-conta/produtor/PageProdutor.vue'),
                            },
                        ]
                    },
                    {
                        path: 'endereco', // caminho relativo
                        name: 'Endereco',
                        component: () => import('../components/registrar/dados/endereco/PageEndereco.vue'),
                    },
                ]
            },

        ]
    },
    {
        path: '/login',
        name: 'Login',
        component: () => import('../view/Login.vue'),
    },
    {
        path: '/bem-vindo',
        name: 'BemVindo',
        component: () => import('../components/bem-vindo/PageBemVindo.vue'),
    },
    {
        path: '/loading',
        name: 'Loading',
        component: () => import('../components/GeralComponents/Loading.vue'),
    }
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;
