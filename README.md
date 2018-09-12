Как проверять?
1) composer install
2) copy .env.example .env (Windows)
3) php artisan key:generate
4) Прописать настройки MYSQL БД в .env
5) php artisan migrate
6) php artisan db:seed
7) php artisan serve

Запуск сервера
php artisan serve

Произведет настройки и наполнение БД:
php artisan migrate:refresh --seed

CORS
Access-Control-Allow-Origin установлен в *, хоть это и не правильно.

API
Сделана по топовым инструкциям.. но как по мне сыровато


