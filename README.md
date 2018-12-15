# Informasi Kegiatan Mesjid
**Project Komputasi Bergerak dan Teknologi Web**

By Demby Pratama

## Frontend dan Backend
HTML, Javascript, Jquery, Bootstrap, PHP, MySQL dan Laravel


## Fungsi
Web aplikasi ini bertujuan untuk mengelola informasi kegiatan yang ada di masjid/mushola
Pengguna dapat:
1. memasukkan profil masjid/mushola, 
2. memasukkan informasi kegiatan yang akan dilaksanakan di masjid/mushola

## Fitur
1. Master:
   Data Pengguna
   Data Masjid/Mushola
2. Transaksi:
   Pendaftaran pengguna
   Pengisian profil masjid/mushola
   Pengisian deskripsi kegiatan
   Verifikasi Email
3. Personalisasi:
   Penggantian password pengguna
   Reset password melalui email
   
## Pra-Instalasi
* PHP terinstall dikomputer anda. [Installation Guide](http://php.net/manual/en/install.php).
* MySQL terinstall dikomputer anda. [Download MySQL](https://www.mysql.com/downloads/).
* Composer terinstall dikomputer anda. [Installation Guide](https://getcomposer.org/download/).
* Laravel terinstall dikomputer anda. [Installation Guide](https://laravel.com/docs/5.7/).

## Petunjuk Instalasi
### Setup
* Clone repo ini
* Jalankan `composer install`
* Jalankan `cp .env.example .env`
* Jalankan `php artisan key:generate`
* Buat database dengan nama `sikam`
* Konfigurasi file `.env` sesuai dengan mesin anda, sesuaikan bagian database dan mail.
* Jalankan `php artisan migrate`
* Jalankan `php artisan serve`
* Buka url berikut dengan browser http://localhost:8000

## Screenshot
![Awal](https://raw.githubusercontent.com/dembyp/infomasjid/master/images/sikam-01-halaman_depan.png)
![Login](https://raw.githubusercontent.com/dembyp/infomasjid/master/images/sikam-02-login.png)
![Daftar](https://raw.githubusercontent.com/dembyp/infomasjid/master/images/sikam-03-daftar.png)
![Reset Password](https://raw.githubusercontent.com/dembyp/infomasjid/master/images/sikam-04-resetpassword.png)
![List Masjid](https://raw.githubusercontent.com/dembyp/infomasjid/master/images/sikam-05-list-masjid.png)
![Tambah Masjid](https://raw.githubusercontent.com/dembyp/infomasjid/master/images/sikam-06-tambahmasjid.png)
![List Kegiatan](https://raw.githubusercontent.com/dembyp/infomasjid/master/images/sikam-07-list-kegiatan.png)
![Tambah Kegiatan](https://raw.githubusercontent.com/dembyp/infomasjid/master/images/sikam-08-tambahkegiatan.png)
![Ubah Password](https://raw.githubusercontent.com/dembyp/infomasjid/master/images/sikam-09-ubahpassword.png)
