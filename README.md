# sistem-kasir-restoran-php
Aplikasi kasir restoran sederhana untuk menghitung total pembayaran pesanan, termasuk biaya layanan dan potongan harga. Dibangun dengan PHP dan CSS sebagai bagian dari studi kasus Pemrograman Web Dasar.

---

## 📜 Deskripsi Proyek
Proyek ini adalah simulasi sistem pemesanan di restoran. Pengguna dapat memilih jenis pesanan (makanan, minuman, atau cemilan), jenis layanan (dine-in atau takeaway), dan jumlah pesanan. Sistem kemudian akan menghitung total pembayaran setelah memperhitungkan harga satuan, potongan harga, dan biaya layanan.

---

## ✨ Fitur
* **Formulir Pemesanan**: Memungkinkan input jenis pesanan, layanan, dan kuantitas.
* **Kalkulasi Harga Otomatis**: Menghitung total harga berdasarkan jenis dan jumlah pesanan.
* **Potongan Harga**: Memberikan diskon yang berbeda untuk setiap jenis pesanan:
    * [cite_start]Makanan: Diskon 17% [cite: 105]
    * [cite_start]Minuman: Diskon 7% [cite: 114]
    * [cite_start]Cemilan: Diskon 4% [cite: 123]
* **Biaya Layanan**: Menambahkan biaya tambahan berdasarkan jenis layanan:
    * [cite_start]Dine-in: Rp 20.000 [cite: 56]
    * [cite_start]Takeaway: Rp 25.000 [cite: 129]
* **Struk Pembayaran**: Menampilkan rincian lengkap dari transaksi.

---

## 🚀 Teknologi yang Digunakan
* **Backend**: PHP
* **Frontend**: HTML, CSS

---

## Detail Tabel Output

Tabel berikut menunjukkan contoh hasil perhitungan berdasarkan input pada gambar.

| Deskripsi                               | Harga          |
| --------------------------------------- | -------------- |
| Harga Pesanan (3 x 15.000)              | Rp. 45.000     |
| Potongan Harga (17%)                    | Rp. 7.650      |
| Biaya Layanan Restoran                  | Rp. 20.000     |
| **Total Pembayaran** | **Rp. 57.350** |

---

**luqmanaru**
