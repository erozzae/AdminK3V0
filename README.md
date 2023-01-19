

## Setup Web Service
- Download Web Servicenya di https://github.com/erozzae/K3V0 
- buka direktori project di terminal anda
- ketikan command : cp .env.example .env (copy paste file .env.example)
- buka file .env (sesuaikan dengan nama database yang anda buat)

Lalu ketik command dibawah ini : 

- composer install
- php artisan optimize:clear 
- php artisan key:generate (generate app key)
- php artisan migrate (migrasi database)
- php artisan db:seed
- php artisan serve

## Setup Admin K3VO
ketik command dibawah ini :
- Composer install
- cp .env.example .env
- php artisan key:generate
- php artisan config:cache
- php artisan serve –port=8180

## Login
- Email : admin@gmail.com
- Password : password

## Tampilan Halaman
- Halaman Login
<img width="960" alt="image" src="https://user-images.githubusercontent.com/96459492/213464967-fa55aa42-74e3-4e0f-8a71-638e9e37c51a.png">
- Halaman Beranda
<img width="960" alt="image" src="https://user-images.githubusercontent.com/96459492/213465964-cbb24883-191a-4042-aaea-931e4a22cea7.png">
- Halaman Profil 
<img width="960" alt="image" src="https://user-images.githubusercontent.com/96459492/213466190-6e9e90fb-c520-45c6-8819-847d1c39d61e.png">
- Halaman Dashboard
<img width="960" alt="image" src="https://user-images.githubusercontent.com/96459492/213468137-1432ed5e-3fc5-4ac5-a324-5b4cc0204848.png">
- Halaman Tentang Aplikasi
<img width="960" alt="image" src="https://user-images.githubusercontent.com/96459492/213468341-584ce262-4171-4dbf-a81a-d8cdcabd1836.png">
- Halaman Tentang Lab
<img width="960" alt="image" src="https://user-images.githubusercontent.com/96459492/213468464-4410db25-aba8-45a1-9e7b-35246d8aa6f4.png">
- Halaman Materi
<img width="960" alt="image" src="https://user-images.githubusercontent.com/96459492/213468573-30c39a7d-ba85-4702-86ea-35a8d64bdd1b.png">
- Halaman Quiz
<img width="959" alt="image" src="https://user-images.githubusercontent.com/96459492/213468666-87bf400f-7a5a-4a38-afde-3df617b7bb38.png">
