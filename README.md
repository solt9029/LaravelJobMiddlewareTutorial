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
