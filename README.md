# Patina Archive - Sistem Antrian Cuci Sepatu
Proyek Pemrograman Web Lanjut - Kelompok 01 - 2026/2027

## Anggota & Peran
| Nama     | Peran                  | Akun GitHub                 |
|----------|------------------------|-----------------------------|
| Adrian   | Backend  | hermawanadrian686@gmail.com |
| Fauzy    | Koordinator & FrontEnd | jiodisini@gmail.com |
| Nathania | Database               | nathaniaokkef@gmail.com     |
| Aghiva   | Dokumentasi            | aghivasilvia@gmail.com      |

# PATINA ARCHIVE

Aplikasi web layanan pencucian dan perawatan sepatu dengan sistem pendaftaran antrean online, pengelolaan layanan, dan pemantauan status pengerjaan.

## Deskripsi Project

Patina Archive merupakan aplikasi berbasis web yang dirancang untuk membantu proses operasional layanan laundry sepatu. Pelanggan dapat mendaftarkan sepatu tanpa harus membuat akun, memperoleh nomor antrean otomatis, dan memeriksa status pengerjaan menggunakan nomor antrean.

Admin dan operator dapat masuk ke sistem untuk mengelola proses operasional sesuai hak akses masing-masing.

## Fitur Utama

### Pelanggan
- Pendaftaran antrean tanpa akun.
- Pemilihan layanan yang tersedia.
- Pembuatan nomor antrean otomatis dan unik.
- Struk pendaftaran.
- Pengecekan status antrean berdasarkan nomor antrean.

### Admin
- Login dan logout.
- Pengelolaan layanan (Create, Read, Update, Delete).
- Melihat daftar antrean.
- Memperbarui status antrean.
- Melihat informasi dan statistik antrean.

### Operator
- Login dan logout.
- Melihat informasi antrean sesuai hak akses.
- Membantu proses pengelolaan status pengerjaan sesuai izin sistem.

### API
- GET `/api/layanans` untuk mengambil daftar layanan dalam format JSON.

## Teknologi yang Digunakan

- Laravel 12
- PHP
- MySQL
- HTML
- CSS
- JavaScript
- Tailwind CSS
- Postman untuk pengujian API

## Persyaratan Sistem

- PHP 8.2 atau lebih baru
- Composer
- MySQL atau MariaDB
- Web browser
- Git

## Instalasi Project

### 1. Clone repository

```bash
git clone https://github.com/Adrian-Hermawan/pwl-kelompok-01-patinaarchive.git
```

Masuk ke direktori project:

```bash
cd pwl-kelompok-01-patinaarchive
```

### 2. Instal dependency

```bash
composer install
```

### 3. Buat file environment

Salin `.env.example` menjadi `.env`, kemudian sesuaikan konfigurasi database.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=patina_archive
DB_USERNAME=root
DB_PASSWORD=
```

Sesuaikan username dan password database dengan konfigurasi lokal.

### 4. Buat application key

```bash
php artisan key:generate
```

### 5. Buat database

Buat database dengan nama:

`patina_archive`

### 6. Jalankan migration dan seeder

Untuk instalasi database baru:

```bash
php artisan migrate --seed
```

Perintah ini membuat tabel dan mengisi data awal aplikasi, termasuk akun demo dan data layanan.

**Catatan:** Jangan menjalankan `migrate:fresh --seed` pada database yang sudah berisi data penting karena perintah tersebut menghapus tabel terlebih dahulu.

### 7. Jalankan aplikasi

```bash
php artisan serve
```

Buka browser:

`http://127.0.0.1:8000`

## Akun Demo

Gunakan akun berikut untuk mencoba aplikasi:

| Role | Email | Password |
|---|---|---|
| Admin | admin@patinaarchive.com | admin12345 |
| Operator | operator@patinaarchive.com | operator12345 |

Akun tersebut merupakan akun demo yang dibuat melalui Database Seeder.

## API Endpoint

| Method | Endpoint | Keterangan |
|---|---|---|
| GET | `/api/layanans` | Mengambil daftar layanan |

Contoh URL:

`http://127.0.0.1:8000/api/layanans`

Pengujian API dilakukan menggunakan Postman.

Dokumentasi API dan hasil pengujian dapat dilihat pada folder `docs`.

## Struktur Dokumentasi

```text
docs/
├── erd.md
├── api.md
├── uji-api.md
```
