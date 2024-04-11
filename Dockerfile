FROM node:20

WORKDIR /app

COPY . .

EXPOSE 5000

CMD ["npx", "http-server", "-p", "5000", "V3-glass"]