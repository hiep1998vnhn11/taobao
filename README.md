# taobao
* SETUP MÔI TRƯỜNG:

cài đạt xampp, composer và install framework laravel
dùng db MySQL

Tạo db tên taobao

setup file .env 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=taobao
DB_USERNAME="user name trên mysql"
DB_PASSWORD="passowrd trên mysql tương ứng"

chạy php artisan migrate để migrate db

* Generate fake data in database
1. composer dumpautoload
2. php artisan migrate:fresh
3. php artisan db:seed --class DatabaseSeeder
