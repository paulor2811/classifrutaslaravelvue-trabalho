import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: '/',
        name: 'Home',
        component: () => import('../view/Home.vue'), // Página inicial
    },
    {
        path: '/registrar',
        name: 'Registro',
        component: () => import('../view/Registro.vue'), // Página inicial
    },
    {
        path: '/registrar/1',
        name: 'RegistroDados1',
        component: () => import('../view/PerfilUsuario.vue'), // Página inicial
    },
    {
        path: '/registrar/2',
        name: 'RegistroDados2',
        component: () => import('../view/PerfilConta.vue'), // Página inicial
    },
    {
        path: '/registrar/3',
        name: 'PerfilConta2',
        component: () => import('../view/PerfilConta2.vue')
    },
    {
        path: '/registrar/4',
        name: 'ConfirmarEndereco',
        component: () => import('../view/ConfirmarEndereco.vue')
    },
    {
        path:   '/registrar/5',
        name: 'ConfirmarDadosProdutor',
        component: () => import('../view/ConfirmarDadosProdutor.vue')
    },
    {
        path: '/registrar/6',
        name: 'DadosEmpresa',
        component: () => import('../view/DadosEmpresa.vue')
    },
    {
        path: '/registrar/7',
        name: 'DadosResEnterposto',
        component: () => import('../view/RegisterDataEnterposto.vue')
    },
    {
        path: '/login',
        name: 'Login',
        component: () => import('../view/Login.vue'), // Página inicial
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL), // Use `import.meta.env.BASE_URL` no Vue 3
    routes,
});

export default router;
