module.exports = {
    devServer: {
        proxy: {
            '/api': {
                target: 'http://api.classifrutas.local:88', // URL do seu backend
                changeOrigin: true, // Muda a origem para o backend
                secure: false, // Desativa a verificação SSL (caso não tenha certificado SSL)
                logLevel: 'debug', // Habilita logs para depuração
            },
        },
    },
};
