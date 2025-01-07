# Chat App - Simulasi WhatsApp

Chat App adalah aplikasi chatting yang mensimulasikan pengalaman menggunakan WhatsApp. Aplikasi ini memungkinkan pengguna untuk mengirim pesan, membuat grup, dan berinteraksi dengan pengguna lain dalam antarmuka yang sederhana dan intuitif.

## Fitur

- **Pengiriman Pesan**: Kirim pesan teks secara real-time.
- **Antarmuka User-Friendly**: Desain kemudahan penggunaan.

## Kekurangan

- **Satu Database**: Aplikasi ini saat ini menggunakan satu database untuk menyimpan semua data pengguna dan pesan, yang dapat menjadi bottleneck saat skala aplikasi meningkat.
- **Belum Ada Migrasi**: Fitur migrasi database belum diimplementasikan, sehingga mengharuskan pengguna untuk memulai dari awal jika ada perubahan struktur database atau saat berpindah ke server lain.

## Teknologi yang Digunakan

- **Bahasa Pemrograman**: JavaScript
- **Framework**: Node.js, Express
- **Database**: phpmyadmin
- **Frontend**: React

## Cara Instalasi

1. **Clone Repository**:
   ```bash
   git clone https://github.com/username/chat-app.git
   cd chat-app
