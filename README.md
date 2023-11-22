# Project Laravel Uji Coba UKM RIPTEK UNNES

ini adalah project laravel uji coba yang dibuat untuk kegiatan materi di UKM RIPTEK Universitas Negeri Semarang

## Instalasi

1. Clone repository ini

```bash
git clone https://github.com/ricomuh/coba-laravel-unnes.git
```

2. Masuk ke folder project

```bash
cd coba-laravel-unnes
```

3. Install dependency

```bash
composer install
```

4. Copy file .env.example menjadi .env

```bash
cp .env.example .env
```

5. Generate key

```bash
php artisan key:generate
```

6. Buat database baru di MySQL

7. Ubah konfigurasi database di file .env

8. Migrate database

```bash
php artisan migrate
```

9. Jalankan server

```bash
php artisan serve
```
