# Quiz 3

## Buat Branch

Buatlah branch dengan nama sesuai dengan username Gitlab kalian!

## 0. Setup (5 poin)

Repositori ini dibangun dengan Laravel versi 6.0 ke atas. Setelah melakukan clone dari repositori ini, lakukanlah langkah-langkah di bawah ini untuk menjalankan project.

-   masuk ke direktori quiz-3-23-sabtu

```bash
cd quiz-3-23-sabtu
```

-   jalankan perintah composer install untuk mendownload direktori vendor . Note : jika terjadi error coba perintah `composer update` untuk menggantikan perintah composer install

```bash
composer install
```

-   buat file .env lalu isi file tersebut dengan seluruh isi dari file .env.example (copy isi dari .env.example lalu paste di file .env)

-   jalankan perintah php artisan key generate

```bash
php artisan key:generate
```

-   Tambahan: Untuk pengerjaan di laptop/PC masing-masing, sesuaikan nama database, username dan password nya di file .env dengan database kalian. (database tidak perlu dikirim)

-   menjalankan server laravel

```bash
php artisan serve
```

-   jangan lupa buat branch dan checkout branchnya

Setelah itu kalian sudah bisa lanjut mengerjakan soal berikutnya.

## 1. Membuat ERD (20 poin)

Seorang klien ingin dibuatkan sebuah aplikasi web untuk toko buku. Harapannya aplikasi web ini dapat digunakan internal perusahaan toko buku tersebut dalam mendaftar koleksi buku yang dimiliki.

berikut deskripsi singkat mengenai requirement web tersebut (tabel-tabel beserta hubungan di antara tabel):

### Require

-   table "buku" terdapat data : id(int), judul (VARCHAR), jumlah_halaman(INT), tahun_terbit(VARCHAR), description(TEXT)
-   table "kategori" terdapat data : id(int), nama(VARCHAR)
-   table "penulis" terdapat data : id(int), nama(VARCHAR), alamat(VARCHAR)

### Description

-   setiap buku memiliki banyak genre
-   seorang penulis dapat menulis banyak buku. sebuah buku dapat ditulis oleh banyak penulis
-   seorang penulis memiliki satu buku yang merupakan best seller

Buatlah ERD untuk keperluan web tersebut lalu export ke dalam format gambar (PNG). Kamu bisa gunakan mysql workbench atau aplikasi online https://app.diagrams.net/.

Simpan file PNG tersebut di dalam folder images dan simpan folder images tersebut di folder public di project ini.

## 2. Membuat Migrations (15 poin)

Buatlah Migration yang diimplementasi dari ERD yang dibuat di soal sebelumnya.

## 3. Membuat Controller (10 poin)

Buatlah controller untuk mengatur fitur CRUD "buku".

## 4. Memasangkan Template & Routing(25 poin)

-   Pada project ini kamu diminta untuk memasangkan template dari SB-Admin-2 https://startbootstrap.com/themes/sb-admin-2/. Kami sudah memasangkan asset-asset yang sudah didownload dari halaman SB-Admin-2 di folder public. Tugas kamu adalah memperbaiki template master blade yang terdapat di folder resources/views/layouts/master.blade.php dan hubungkan dengan asset-asset yang diperlukan. (5 poin)
-   Web memiliki route sebagai berikut: (10 poin)

| url                      | method   | keterangan                                                                                                    |
| ------------------------ | -------- | ------------------------------------------------------------------------------------------------------------- |
| `'/'`                    | `GET`    | menampilkan gambar PNG/JPG/JPEG desain ERD yang sudah dibuat di soal no. 1                                    |
| `'/buku' `               | `GET`    | menampilkan tabel berisi data buku-buku yang tersedia                                                         |
| `'/buku/create'`         | `GET`    | menampilkan form untuk membuat data buku baru, di dalam form tersebut terdapat input pengisian data-data buku |
| `'/buku'`                | `POST`   | menyimpan data buku baru                                                                                      |
| `'/buku/{buku_id}'`      | `GET`    | menampilkan detail dari sebuah buku                                                                           |
| `'/buku/{buku_id}/edit'` | `GET`    | Soal no #6                                                                                                    |
| `'/buku/{buku_id}'`      | `PUT`    | menyimpan data buku yang sudah diedit melalui form edit buku                                                  |
| `'/buku/{buku_id}'`      | `DELETE` | menghapus data buku dengan id tertentu                                                                        |

-   pasangkanlah script berikut ini ke HANYA ke halaman blade untuk menampilkan data pada tabel buku (pada url `'/buku'`). (10 poin)
    Keterangan : `Swal` merupakan function dari file swal.min.js yang terdapat di folder public/sbadmin2/swal.min.js

```html
<script>
    Swal.fire({
        title: "Berhasil!",
        text: "Memasangkan script sweet alert",
        icon: "success",
        confirmButtonText: "Cool",
    });
</script>
```

-   Jika pemasangan script pada poin sebelumnya berhasil maka akan menampilkan alert seperti ini di halaman courses tersebut:

![swal-example.gif](swal-example.gif?raw=true)

## 5. Alur CRUD (10 poin)

Pastikan alur CRUD buku berjalan seperti alur CRUD biasanya. Gambarannya adalah seperti berikut:

-   halaman index buku (`'/buku'`) menampilkan tabel kumpulan buku lengkap beserta tombol-tombol actionnya. terdapat pula tombol menuju form pembuatan buku.
-   halaman create buku menampilkan form untuk membuat buku baru, sesudah submit lalu halaman kembali ke index buku.
-   halaman edit untuk menampilkan form edit buku, sesudah submit update lalu kembali ke index buku
-   menghapus data buku berdasarkan id ketika tombol hapus diklik

## 6. Menampilkan genre-genre di Halaman Show buku (15 poin)

-   untuk genre silahkan insert manual di phpmyadmin/mysql untuk datanya
-   Tampilkanlah detail buku pada route `'/buku/{id}'` seperti berikut :

### output

![show-buku.PNG](show-buku.PNG?raw=true)
