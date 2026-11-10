# HASIL PENGUJIAN API PATINA ARCHIVE

## 1. Tujuan Pengujian

Pengujian dilakukan untuk memastikan endpoint API Patina Archive dapat mengambil data layanan dari database MySQL dan mengembalikannya dalam format JSON.

## 2. Lingkungan Pengujian

| Komponen | Keterangan |
|---|---|
| Aplikasi | Patina Archive |
| Framework | Laravel 12 |
| Database | MySQL |
| API Testing Tool | Postman |
| HTTP Method | GET |
| Endpoint | `/api/layanans` |

## 3. Skenario Pengujian

| No. | Skenario | Request | Hasil yang Diharapkan |
|---|---|---|---|
| 1 | Mengambil seluruh layanan | GET `/api/layanans` | Data layanan ditampilkan dalam JSON |
| 2 | Mencari layanan | GET `/api/layanans?q=Deep` | Menampilkan layanan yang sesuai |
| 3 | Mengatur pagination | GET `/api/layanans?per_page=2` | Maksimal dua data per halaman |

## 4. Hasil Pengujian

| No. | Skenario | Hasil Aktual | Status |
|---|---|---|---|
| 1 | Mengambil seluruh layanan | Response JSON berhasil diterima dengan HTTP 200 OK | Berhasil |
| 2 | Mencari layanan | Perlu pengujian dan dokumentasi hasil aktual | Belum diverifikasi |
| 3 | Pagination | Perlu pengujian dan dokumentasi hasil aktual | Belum diverifikasi |

## 5. Bukti Pengujian

Masukkan screenshot Postman pada bagian ini.

Screenshot harus memperlihatkan:
- Method GET.
- URL `http://127.0.0.1:8000/api/layanans`.
- HTTP status `200 OK`.
- Response JSON yang menampilkan data layanan.

## 6. Kesimpulan

Berdasarkan pengujian awal menggunakan Postman, endpoint GET `/api/layanans` berhasil dijalankan. API dapat mengambil data layanan dari database MySQL dan menampilkannya dalam format JSON dengan HTTP status 200 OK.
