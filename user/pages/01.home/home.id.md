---
title: Awal
body_classes: home
---

# Grav Menjalankan!
## Anda telah menginstal **Grav** berhasil

_Selamat! Anda telah menginstal **Paket Basis Grav** yang menyediakan **halaman sederhana** dan default **antimateri** tema untuk mendapatkan Anda started._

>>>>> Jika Anda ingin basis **fitur lengkap lebih** menginstal, Anda harus memeriksa [**Skeleton** paket yang tersedia di download](http://getgrav.org/downloads).

### Cari tahu semua tentang Grav

* Pelajari tentang **Grav** dengan memeriksa kami didedikasikan [Pelajari Grav] (http://learn.getgrav.org) situs.
* Ambil **plugin**, **tema**, serta lainnya Grav **kerangka** paket dari halaman [Grav Download](http://getgrav.org/downloads).
* Periksa kami [Grav Pengembangan Blog](http://getgrav.org/blog) untuk mengetahui kejadian terbaru di dalam Grav-ayat.

### Mengedit Halaman ini

Untuk mengedit halaman ini, hanya arahkan ke folder Anda menginstal **Grav** ke dalam, dan kemudian browse ke `user / halaman / 01.home` folder dan membuka file` default.md` di [editor pilihan Anda](http://learn.getgrav.org/basics/requirements). Anda akan melihat isi halaman ini di [Format penurunan harga](http://learn.getgrav.org/content/markdown).

### Buat Halaman Baru

Membuat halaman baru adalah hal yang sederhana di **Grav**. Cukup ikuti langkah-langkah sederhana:

1. Arahkan ke halaman Anda folder: `user / halaman /` dan membuat folder baru. Dalam contoh ini, kita akan menggunakan [eksplisit bawaan memesan](http://learn.getgrav.org/content/content-pages) dan memanggil folder `02.mypage`.
2. Luncurkan editor teks Anda dan paste di kode contoh berikut:

        ---
        title: Halaman Baru Saya
        ---
        # My New Page!

        This is the body of **my new page** and I can easily use _Markdown_ syntax here.

3. Simpan file ini di user / halaman / 02.mypage / `folder` sebagai `default.md`. Ini akan memberitahu **Grav** untuk membuat halaman dengan menggunakan **bawaan** Template.
4. Bahwa itu! Reload browser Anda untuk melihat halaman baru di menu.

>>> CATATAN: Halaman ini akan secara otomatis muncul di Menu setelah "rumah" item menu. Jika Anda ingin mengubah nama yang muncul di Menu, add sederhana: `menu: Page` My antara strip di konten halaman. Ini disebut materi depan YAML, dan itu adalah di mana Anda mengkonfigurasi opsi khusus halaman.