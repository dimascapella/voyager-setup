## Laravel + Voyager CMS + Tailwind

### Setup

1. Clone Project
```go
git clone https://github.com/dimascapella/voyager-setup.git
```

2. Install Dependencies
    #### composer (laravel)
```go
composer install
```

#### npm (tailwind)
```go
npm install
    ```

3. install PHP-GD (*jika sudah install lanjutkan ke step selanjutnya*)
#### linux user
```go
sudo apt-get install php-gd
// Restart Apache
sudo service apache2 restart
```

#### Windows user
buka file ``php.ini`` (*untuk default directory ``xampp/php/php.ini``) dan cari extension ``;extension=gd`` selanjutnya hapus ``;`` dan restart terakhir restart xampp

4. Install Voyager
#### Get Voyager Package
```go
composer require tcg/voyager
```

#### Install Voyager Beserta Dummy Data
```go
php artisan voyager:install --with-dummy
```

*note: data default akun admin*
```go
email: admin@admin.com
password: password
```

5. Install Tailwind
untuk langkah-langkah install tailwind ada di link berikut:
[Laravel Tailwind](https://tailwindcss.com/docs/guides/laravel)