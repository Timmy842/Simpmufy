# Simpmufy

Monorepo con Laravel (API) y Next.js (Frontend) usando Docker y Nginx.

## Apps

- `apps/backend`: Laravel 12 (PHP 8.3)
- `apps/frontend`: Next.js 15
- `docker/nginx`: Configuración NGINX como proxy reverso

## Uso

```bash
docker compose up --build
