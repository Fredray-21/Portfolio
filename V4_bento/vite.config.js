import { defineConfig } from 'vite';

export default defineConfig({
    root: '.',
    server: {
        host: true,
        port: 5000
    },
    preview: {
        host: true,
        port: 5000
    },
    build: {
        outDir: 'dist',
        emptyOutDir: true
    }
});
