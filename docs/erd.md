
erDiagram
    USERS {
        bigint id PK
        string name
        string email UK
        string password
        string role
        timestamp created_at
        timestamp updated_at
    }

    LAYANANS {
        bigint id PK
        string nama_layanan
        decimal harga
        integer estimasi_waktu
        text deskripsi
        timestamp created_at
        timestamp updated_at
    }

    ANTREANS {
        bigint id PK
        string kode_antrean UK
        string nama_pelanggan
        string no_hp
        string merek_sepatu
        text catatan
        bigint layanan_id FK
        bigint user_id FK
        bigint pelanggan_id FK
        string status
        timestamp tanggal_masuk
        timestamp tanggal_selesai
        timestamp created_at
        timestamp updated_at
    }

    LAYANANS ||--o{ ANTREANS : "memiliki"
    USERS o|--o{ ANTREANS : "menangani"
    USERS o|--o{ ANTREANS : "sebagai pelanggan"
Penjelasan relasi
Relasi	Jenis	Penjelasan
Layanan — Antrean	One to Many	Satu layanan dapat digunakan oleh banyak antrean.
User — Antrean (user_id)	One to Many	Satu operator dapat menangani banyak antrean.
User — Antrean (pelanggan_id)	One to Many	Satu akun pelanggan dapat memiliki banyak antrean jika fitur akun pelanggan digunakan.
