# WEB GALLERY

## Tentang Website

Simpelnya ini hanyalah Web yang saya buat dengan mengikuti style instagram, facebook dan twitter namun versi low budget yang sangat minim. meskipun tidak terlalu mirip, tapi fungsi yang ditonjolkan dari web ini adalah mampu memuat gallery dan user lain bisa melihat gambar apa yang kita posting.

## Fitur

Untuk Fitur masih minim:
- sign up
- log in
- log out
- multiuser
- add poto
- add album
- edit profile
- add comment
- edit comment
- delete comment
- like
- dll

## Tampilan Website

![Screenshot (1)](https://github.com/kakazakki/ukk_kakafinal/assets/105642339/552d10ba-50ac-484d-885f-ed5ace42c277)
![Screenshot (2)](https://github.com/kakazakki/ukk_kakafinal/assets/105642339/bc356041-d29f-48d5-aa28-9a0965b8a05a)
![Screenshot (3)](https://github.com/kakazakki/ukk_kakafinal/assets/105642339/afc8d80b-cb9c-4830-ac9d-756f2bd7a7b6)

## ERD, Relasi dan UML Use Case

- ERD

![ERD UKK-GALLERY](https://github.com/kakazakki/ukk_kakafinal/assets/105845443/6e5a911b-5842-40a4-9687-00ae5d0abf37)

- Relasi

![Screenshot 2024-04-21 193432](https://github.com/kakazakki/ukk_kakafinal/assets/105845443/4d66e307-0230-4646-ac62-1de2d6a548b0)

- UML

![UML GALLERY drawio](https://github.com/Kuro192/kakazakki/ukk_kakafinal/105845443/871c2ea4-c579-42e9-944d-47cf0e83c5ff)


## Prasyaratan

- PHP 8.2.8 & Web Server (Apache, Lighttpd, atau Nginx)
- Database (MariaDB dengan v11.0.3 atau PostgreSQL)
- Web Browser (Firefox, Safari, Opera, Microsoft Edge dll)

## Instalasi
1. Clone Repository
```
https://github.com/Kuro192/UKK_Gallery.git
```

2. Install Composer
```
composer install
```
atau
```
composer update
```

3. Copy .Env
```
copy .env.example .env
```

4. Setting database di .env
```
DB_PORT=3306
DB_DATABASE=laravel_gallery
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate key
```
php artisan key:generate
```

6. Jalankan migrate dan seeder
```
php artisan migrate --seed
```

7. Buat Storage Link
```
php artisan storage:link
```

8. jangan lupa menginstall NPM
```
npm install
```
lalu jalankan
```
npm run dev
```

8. Jalankan Serve
```
php artisan serve
```
