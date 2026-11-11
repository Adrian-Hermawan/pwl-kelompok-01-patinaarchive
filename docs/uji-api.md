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
| 2 | Mencari layanan | Response JSON berhasil diterima dengan HTTP 200 OK | Berhasil |
| 3 | Pagination | Response JSON berhasil diterima dengan HTTP 200 OK | Berhasil |

## 5. Bukti Pengujian

<img width="959" height="502" alt="Screenshot 2026-11-10 013357" src="https://github.com/user-attachments/assets/9cbe5403-43b0-4747-83ff-834aa9fd8c07" />

<img width="958" height="502" alt="Screenshot 2026-11-11 215513" src="https://github.com/user-attachments/assets/fcd8d3a3-0986-4306-979b-4ad9dfd88269" />

<img width="959" height="502" alt="Screenshot 2026-11-11 215533" src="https://github.com/user-attachments/assets/5d03ec6a-4386-41d0-b669-47b87f5fa719" />


## 6. Kesimpulan

Berdasarkan pengujian awal menggunakan Postman, endpoint GET `/api/layanans`, GET `/api/layanans?q=Deep`, dan GET `/api/layanans?per_page=2` berhasil dijalankan. API dapat mengambil data layanan dari database MySQL dan menampilkannya dalam format JSON dengan HTTP status 200 OK.
