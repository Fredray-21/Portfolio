FROM node:20

WORKDIR /app

# Exposer le port 5000 pour le serveur HTTP
EXPOSE 5000

# Lancer le serveur HTTP une fois la construction terminée
CMD ["npx", "http-server", "-p", "5000", "V3-glass"]