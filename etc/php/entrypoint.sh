#!/usr/bin/env bash
set -e

echo "Aguardando o PostgreSQL..."
until pg_isready -h "$DB_HOST" -p "$DB_PORT" -U "$DB_USERNAME" > /dev/null 2>&1; do
  sleep 2
done

echo "PostgreSQL disponível!"

echo "Instalando dependências do Laravel..."
composer install --no-interaction --prefer-dist --optimize-autoloader

echo "Gerando chave da aplicação..."
php artisan key:generate --force

echo "Rodando migrações..."
php artisan migrate --force

exec "$@"
