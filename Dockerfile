FROM node:20

WORKDIR /app

COPY . .

# on va dans le dossier V4_bento et on installe les deps
WORKDIR /app/V4_bento
RUN npm install

EXPOSE 5000

CMD ["npx", "http-server", "-p", "5000", "."]
