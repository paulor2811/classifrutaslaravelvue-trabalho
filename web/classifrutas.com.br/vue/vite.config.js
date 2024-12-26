import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  plugins: [vue()],
  server: {
    proxy: {
      '/api': {
        target: 'http://api.classifrutas.local:88', // URL do backend
        changeOrigin: true, // Muda a origem para o backend
        secure: false, // Se o servidor não usar HTTPS, pode ser necessário desabilitar o SSL
        logLevel: 'debug', // Log para debug
      },
    },
  },
});
