# Laravel Dockerize Project - Redis | Postgresql | Elasticsearch | RabbitMQ



## Build

```sh
docker-compose up --build -d 
```
## Start / Stop

```sh
docker-compose up -d & docker-compose down
```

## Migrate

```sh
docker-compose exec -d app php artisan migrate
```

## Queue for rabbitMQ

```sh
docker-compose exec -d app php artisan queue:work
```


