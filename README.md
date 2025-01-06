# Webhook Developer

## Deskripsi

Proyek ini adalah aplikasi webhook yang menggunakan Express.js dan MySQL untuk menangani log webhook dan integrasi dengan Telegram API. Aplikasi ini dapat menerima data dari webhook, menyimpan informasi log ke database, dan mengirimkan notifikasi melalui Telegram. Selain itu, aplikasi ini juga mendukung upload file Excel untuk memperbarui data karyawan di database.

## Fitur

- **Menerima Data Webhook**: Menerima data webhook melalui endpoint `/store` dan menyimpannya ke database.
- **Notifikasi Telegram**: Mengirimkan notifikasi ke Telegram setiap kali ada log baru.
- **Upload File Excel**: Mendukung upload file Excel untuk menambah atau memperbarui data karyawan.
- **Fetch Logs**: Mengambil data log dari database melalui endpoint `/log`.

## Prasyarat

- [Node.js](https://nodejs.org/) versi 14 atau lebih baru.
- [MySQL](https://www.mysql.com/) versi 5.7 atau lebih baru.
- Token Bot Telegram (untuk notifikasi).

## Instalasi

1. **Kloning Repositori**

   ```bash
   git clone https://github.com/Mojjitt0o/Webhook_Developer.git

2. **Masuk ke Direktori Proyek**
   cd repository
   
3. **Instal Dependensi**
   npm install
   
4. **Konfigurasi Database**
   const db = mysql.createConnection({
    host: '',
    user: '',
    password: '',
    database: ''
});

5. **Jalankan Aplikasi**
   npm start



## Kontak
Jika Anda memiliki pertanyaan atau masalah, Anda dapat menghubungi kami
