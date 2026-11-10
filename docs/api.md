# DOKUMENTASI API PATINA ARCHIVE

## 1. Informasi API

API Patina Archive digunakan untuk menyediakan data layanan pencucian sepatu dalam format JSON.

- Base URL: `http://127.0.0.1:8000`
- Format response: JSON
- Pengujian: Postman

## 2. Daftar Endpoint

| Method | Endpoint | Fungsi |
|---|---|---|
| GET | `/api/layanans` | Mengambil daftar layanan |

## 3. Detail Endpoint

### GET /api/layanans

Mengambil daftar layanan yang tersimpan pada tabel `layanans`.

**Request:**

```http
GET http://127.0.0.1:8000/api/layanans
Accept: application/json
```

**Query Parameter (opsional):**

| Parameter | Tipe | Keterangan |
|---|---|---|
| q | String | Mencari layanan berdasarkan nama |
| per_page | Integer | Mengatur jumlah data per halaman, minimum 1 dan maksimum 50 |

**Contoh pencarian:**

```http
GET /api/layanans?q=Deep
```

**Contoh pagination:**

```http
GET /api/layanans?per_page=2
```

## 4. Response Berhasil

HTTP Status: `200 OK`

Contoh response:

```json
{
    "data": [
        {
            "id": 2,
            "nama_layanan": "Deep Cleaning",
            "harga": 60000,
            "estimasi_waktu": 1440,
            "deskripsi": "Pembersihan menyeluruh bagian luar dan dalam."
        }
    ]
}
```

Data response mengikuti isi database. API Resource Laravel juga menyediakan informasi pagination ketika hasil dikembalikan dalam bentuk paginated collection.

## 5. Status Pengujian

| Status Code | Keterangan |
|---|---|
| 200 | Request berhasil |
| 404 | Endpoint tidak ditemukan |
| 405 | Method tidak didukung |

## 6. Tools Pengujian

Pengujian endpoint dilakukan menggunakan Postman dengan metode GET dan header `Accept: application/json`.

Hasil pengujian berhasil memperoleh response `200 OK` dan menampilkan data layanan dari database MySQL.
