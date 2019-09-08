# Laravel6で新規追加されたJobMiddlewareを使ってみる

## 検証環境
- php: 7.3.9
- laravel/installer: 2.1.0
- composer: 1.9.0

## 動作確認
```sh
touch database/database.sqlite
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve & php artisan queue:work
```

- [http://localhost:8000/delay-log-job](http://localhost:8000/delay-log-job)にアクセスする
- storage/logs/laravel-XXXX-XX-XX.logに以下のようなログが残っていることを確認する

```log
[2019-09-08 02:43:09] local.INFO: DelayLogJobMiddleware handled  
[2019-09-08 02:43:09] local.INFO: DelayLogJob handled  
```
