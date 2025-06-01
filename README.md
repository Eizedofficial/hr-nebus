## Installation

> ***Note:*** You should fill UID and GID in the docker .env file.

> ***Note:*** Remove horizon and scheduler from docker-compose.override.yaml if you don't need it

1. `cp docker-compose.override.yaml.example docker-compose.override.yaml`
2. `cp .env.example .env`
3. `cp src/.env.example src/.env`
4. `docker volume create nebus_psql_db_volume`
5. `docker-compose up -d`
6. `docker-compose exec php composer i`
7. `docker-compose exec php app artisan key:generate`

## Laravel Ide Helper

```
php artisan ide-helper:generate
php artisan ide-helper:meta
php artisan ide-helper:models --write-mixin --nowrite
```

## Testing

```shell
composer test
```