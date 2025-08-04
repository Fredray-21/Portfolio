# Étape 1: build de l'app
FROM node:20 AS builder

WORKDIR /app
COPY . .
WORKDIR /app/V4_bento
RUN npm install
RUN npm run build

# Étape 2: preview avec vite
FROM node:20

WORKDIR /app
COPY --from=builder /app/V4_bento /app

# Installer uniquement les dépendances nécessaires pour le preview
RUN npm install --omit=dev

EXPOSE 5000

CMD ["npm", "run", "preview", "--", "--host", "--port", "5000"]
