FROM node:22-alpine

WORKDIR /app

COPY package.json package-lock.json ./

RUN npm ci && npm install -g @angular/cli@20

EXPOSE 4200

CMD ["sh", "-c", "npm install && ng serve --host 0.0.0.0 --port 4200 --poll 1000"]
