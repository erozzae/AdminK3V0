

## Setup
- buka direktori project di terminal anda.
- ketikan command : cp .env.example .env (copy paste file .env.example)
- buat database dengan nama laravel_sb_admin_2 (bebas)
- buka file .env dengan teks editor , edit bagian DB_DATABASE= menjadi DB_DATABASE=laravel_sb_admin_2 
(sesuaikan dengan nama database yang anda buat)

Lalu ketik command dibawah ini : 

- composer install
- php artisan optimize:clear 
- php artisan key:generate (generate app key)
- php artisan migrate (migrasi database)
- php artisan db:seed --class=UserClass (mengisi data table users) atau bisa juga php artisan db:seed (semua tabel)

## Login
- Email : admin@gmail.com
- Password : password

## Fitur
- Autentikasi dengan Laravel Auth
- Autorisasi dengan Laravel Gate
- Yajra DataTable Serverside
- jquery ajax crud dengan datatable serverside example

