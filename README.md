# Sistem Pendaftaran Murid Baru (SPMB) - Khoiru Ummah

## Deskripsi Proyek
Proyek ini merupakan sistem berbasis web yang dirancang untuk mengelola proses seleksi penerimaan murid baru (SPMB) di institusi pendidikan Khoiru Ummah. Sistem ini mencakup berbagai jenjang pendidikan mulai dari Taman Kanak-kanak (TK), Sekolah Dasar (SD), Sekolah Menengah Pertama (SMP), hingga Sekolah Menengah Atas (SMA). Aplikasi ini bertujuan untuk memudahkan calon pendaftar dalam melakukan registrasi serta membantu pihak administrasi dalam mengelola data pendaftar secara terstruktur dan efisien.

## Fitur Utama
Sistem ini memiliki berbagai fitur fungsional, antara lain:
1. Pendaftaran Multi-Jenjang: Mendukung registrasi untuk jenjang TK, SD, SMP, dan SMA dengan formulir yang disesuaikan untuk masing-masing tingkat.
2. Manajemen Data Pendaftar: Memungkinkan administrator untuk melihat, memvalidasi, dan mengelola informasi calon murid.
3. Dasbor Administrasi: Menyediakan ringkasan data statistik pendaftaran dan status proses seleksi.
4. Sistem Otentikasi: Keamanan akses bagi pengguna dan administrator melalui modul login yang terintegrasi.
5. Manajemen Berkas: Fitur untuk mengunggah dokumen pendukung seperti bukti transfer pembayaran pendaftaran.

## Arsitektur Teknologi
Aplikasi ini dibangun menggunakan arsitektur Model-View-Controller (MVC) dengan tumpukan teknologi berikut:
1. Framework Backend: CodeIgniter 3 (PHP)
2. Framework Frontend: Bootstrap dan AdminLTE
3. Basis Data: MySQL
4. Library JavaScript: jQuery, OwlCarousel, Wow.js, dan lain-lain.
5. Manajemen Dependensi: Composer

## Struktur Direktori Utama
1. application: Berisi logika inti aplikasi (Controller, Model, View, dan Konfigurasi).
2. assets: Menyimpan berkas statis seperti CSS, JavaScript, gambar, dan plugin pihak ketiga.
3. system: Berisi core framework CodeIgniter.
4. vendor: Lokasi library yang diinstal melalui Composer.

## Instalasi dan Konfigurasi
Untuk menjalankan proyek ini di lingkungan lokal, ikuti langkah-langkah berikut:
1. Pastikan server web (seperti Apache) dan PHP (minimal versi 5.3.7) telah terpasang.
2. Salin seluruh direktori proyek ke dalam folder web root (misalnya htdocs).
3. Buat basis data baru di MySQL dan impor berkas daftar_ku.sql yang tersedia di root proyek.
4. Sesuaikan konfigurasi basis data pada file application/config/database.php.
5. Pastikan konfigurasi base_url pada application/config/config.php sudah sesuai dengan alamat lokal Anda.
6. Akses aplikasi melalui peramban web.

## Penutup
Sistem ini terus dikembangkan untuk memenuhi kebutuhan operasional pendidikan di Khoiru Ummah dengan mengutamakan kemudahan penggunaan dan integritas data.
