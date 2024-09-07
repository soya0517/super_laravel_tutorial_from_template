## Dockerデーモンの起動
```
sudo service docker start
```

## コンテナを立ち上げる
```
UID_GID="$(id -u):$(id -g)" docker-compose up -d --build
```

## コンテナに入る
```
docker-compose exec app bash
```

## Laravelプロジェクト作成
```
composer create-project laravel/laravel app --prefer-dist
```
