# WEBSITE PT RAJA TEKNIK SOLUSI
### Deskripsi proyek
- Tugas studi independen mandiri kampus berdampak 2025 di PT RAJA TEKNIK SOLUSI
<br>

> ### PREREQUISITE❗
> - install Git
> - install PHP 8.2 
> - install composer
> - install nodejs
<br>

### Cara menjalankannya
#### 1. Clone atau download source code
```sh
git clone https://github.com/auizadi/website-rts-studpen.git
```
#### 2. Masuk ke direktori proyek
```sh
cd website-rts-studpen
```
#### 3. install dependencies
```sh
composer install
```
```sh
npm install
```
#### 4. Copy .env
```sh
cp .env.example .env
```
#### 5. Generate key
```sh
php artisan key:generate
```
#### 6. Setup database pada .env
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```
#### 7. Migrasi database
```sh
php artisan migrate --seed
```
#### 8. Generate asset front end
```sh
npm run dev
``` 
#### 9. Jalankan aplikasi 
```sh
php artisan serve
``` 

> Langkah 8 dan 9 dijalankan pada terminal terpisah❗
> Kredensial login admin [Email : admin@mail.com | Kata Sandi : admin1234]  ada di /database/seeders/RoleSeeder.php

<br>
<br>


### 1. Tampilan Home
![tampilan home](/assets/home.png "tampilan home")
<br>

### 2. Tampilan About Us
![tampilan About Us](/assets/about.png "tampilan About Us")
<br>

### 3. Tampilan Portfolio
![tampilan Portfolio](/assets/portofolio.png "tampilan Portfolio")
<br>

### 4. Tampilan Articles 
![tampilan Articles](/assets/articles.png "tampilan Articles")
<br>

### 5. Tampilan Carrers
![tampilan Carrers](/assets/carrers.png "tampilan Carrers")
<br>

### 6. Tampilan Services
![tampilan services](/assets/services.png "tampilan services")
<br>

### 7. Tampilan contact
![tampilan contact](/assets/contact.png "tampilan contact")
<br>

### 8. Tampilan Login
![tampilan login](/assets/login.png "tampilan login")
<br>

### 9. Tampilan Dashboard
![tampilan dashboard](/assets/dashboard.png "tampilan dashboard")
<br>

### 10. Tampilan Pesan
![tampilan pesan](/assets/pesan.png "tampilan pesan")
<br>
