<div align="center">
    <h2 style="margin:0; font-size:3em; color:#333;">GIZIMART</h2>
    <img src="/public/gizimart.jpg" alt="Logo GiziMart" style="display:block; margin:1em auto; max-width:50%; height:auto;" />
    <h2 style="margin:0; font-size:2em; color:#333;">FARDINA</h2>
    <h2 style="margin:0; font-size:2em; color:#333;">D0223312</h2>
    <h2 style="margin:0; font-size:2em; color:#333;">FRAMEWORK WEB BASED</h2>
    <h2 style="margin-top:0.5em; font-size:2em; color:#333;">2025</h2>
  </div>

<h2>Role</h2>
  <table border="1">
  <thead>
    <tr>
      <th>Role</th>
      <th>Fitur</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td rowspan="9">Admin</td>
      <td>Melihat dashboard admin (statistik user, produk, pesanan)</td>
    </tr>
    <tr><td>Mengelola pengguna (lihat, edit, nonaktifkan user)</td></tr>
    <tr><td>Mengelola role user (admin, seller, customer)</td></tr>
    <tr><td>Manajemen kategori produk</td></tr>
    <tr><td>Melihat semua produk dari semua seller</td></tr>
    <tr><td>Validasi/menonaktifkan produk yang tidak layak</td></tr>
    <tr><td>Melihat semua pesanan (dari semua customer)</td></tr>
    <tr><td>Melihat ulasan produk</td></tr>
    <tr><td>Laporan penjualan umum (global)</td></tr>
    <tr>
      <td rowspan="8">Penjual</td>
      <td>Melihat dashboard Penjual (produk sendiri, pesanan masuk)</td>
    </tr>
    <tr><td>Menambahkan produk baru</td></tr>
    <tr><td>Edit/hapus produk sendiri</td></tr>
    <tr><td>Mengatur stok dan harga</td></tr>
    <tr><td>Upload gambar produk</td></tr>
    <tr><td>Melihat pesanan masuk untuk produk sendiri</td></tr>
    <tr><td>Mengubah status pesanan (diproses, dikirim)</td></tr>
    <tr><td>Melihat ulasan/review terhadap produk sendiri</td></tr>
    <tr>
      <td rowspan="9">Pelanggan</td>
      <td>Registrasi & Login</td>
    </tr>
    <tr><td>Melihat dan mencari produk</td></tr>
    <tr><td>Filter berdasarkan kategori</td></tr>
    <tr><td>Melihat detail produk (gambar, deskripsi, harga)</td></tr>
    <tr><td>Checkout & buat pesanan</td></tr>
    <tr><td>Melihat riwayat pesanan</td></tr>
    <tr><td>Memberikan ulasan/review produk yang dibeli</td></tr>
    <tr><td>Mengatur profil & alamat pengiriman</td></tr>
    <tr><td>Mengisi dan melihat ulasan</td></tr>
  </tbody>
</table>
<h2>1. Tabel user</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>Int</td><td>Primary Key, Auto Increment</td></tr>
    <tr><td>name</td><td>Varchar(220)</td><td>Nama pengguna</td></tr>
    <tr><td>email</td><td>Varchar(220)</td><td>Email unik</td></tr>
    <tr><td>password</td><td>Varchar(220)</td><td>Password terenkripsi</td></tr>
    <tr><td>role</td><td>Enum('admin','penjual','pelanggan')</td><td>Peran pengguna</td></tr>
    <tr><td>created_at</td><td>Timestamp</td><td>Waktu pembuatan akun</td></tr>
    <tr><td>updated_at</td><td>Timestamp</td><td>Waktu update akun</td></tr>
  </tbody>
</table>
<h2>2. Tabel produk</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>Int</td><td>Primary Key</td></tr>
    <tr><td>penjual_id</td><td>Int</td><td>Foreign Key (users)</td></tr>
    <tr><td>nama</td><td>Varchar(220)</td><td>Nama produk</td></tr>
    <tr><td>deskripsi</td><td>Text</td><td>Deskripsi produk</td></tr>
    <tr><td>harga</td><td>Decimal(10,2)</td><td>Harga produk</td></tr>
    <tr><td>stok</td><td>Int</td><td>Stok tersedia</td></tr>
    <tr><td>created_at</td><td>Timestamp</td><td>Waktu pembuatan</td></tr>
    <tr><td>updated_at</td><td>Timestamp</td><td>Waktu pembaruan</td></tr>
  </tbody>
</table>
<h2>3. Tabel pesanan</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>Int</td><td>Primary Key</td></tr>
    <tr><td>pelanggan_id</td><td>Int</td><td>Foreign Key (users)</td></tr>
    <tr><td>total_harga</td><td>Decimal(10,2)</td><td>Total harga pesanan</td></tr>
    <tr><td>status</td><td>Enum('menunggu','selesai','dibatalkan')</td><td>Status pesanan</td></tr>
    <tr><td>created_at</td><td>Timestamp</td><td>Waktu pembuatan</td></tr>
    <tr><td>updated_at</td><td>Timestamp</td><td>Waktu pembaruan</td></tr>
  </tbody>
</table>
<h2>4. Tabel item_pesanan</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>Int</td><td>Primary Key</td></tr>
    <tr><td>pesanan_id</td><td>Int</td><td>Foreign Key (pesanan)</td></tr>
    <tr><td>produk_id</td><td>Int</td><td>Foreign Key (produk)</td></tr>
    <tr><td>jumlah</td><td>Int</td><td>Jumlah produk</td></tr>
    <tr><td>harga</td><td>Decimal(10,2)</td><td>Harga per item</td></tr>
  </tbody>
</table>
<h2>5. Tabel Pembayaran</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>Int</td><td>Primary Key</td></tr>
    <tr><td>pesanan_id</td><td>Int</td><td>Foreign Key (pesanan)</td></tr>
    <tr><td>metode_pembayaran</td><td>Enum('kartu_kredit','transfer_bank','paypal')</td><td>Jenis metode</td></tr>
    <tr><td>status_pembayaran</td><td>Enum('menunggu','selesai','gagal')</td><td>Status pembayaran</td></tr>
    <tr><td>jumlah</td><td>Decimal(10,2)</td><td>Jumlah dibayar</td></tr>
    <tr><td>dibayar_pada</td><td>Timestamp</td><td>Waktu pembayaran</td></tr>
  </tbody>
</table>
<h2>6. Tabel kategori</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>Int</td><td>Primary Key</td></tr>
    <tr><td>nama</td><td>Varchar(220)</td><td>Nama kategori</td></tr>
    <tr><td>created_at</td><td>Timestamp</td><td>Waktu dibuat</td></tr>
    <tr><td>updated_at</td><td>Timestamp</td><td>Waktu diperbarui</td></tr>
  </tbody>
</table>
<h2>7. Tabel kategori_produk</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>produk_id</td><td>Int</td><td>Foreign Key (produk)</td></tr>
    <tr><td>kategori_id</td><td>Int</td><td>Foreign Key (kategori)</td></tr>
  </tbody>
</table>
<h2>8. Tabel ulasan</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>id</td><td>BigInt</td><td>Primary Key</td></tr>
    <tr><td>pengguna_id</td><td>Int</td><td>Foreign Key (users)</td></tr>
    <tr><td>produk_id</td><td>Int</td><td>Foreign Key (produk)</td></tr>
    <tr><td>nilai</td><td>Tinyint</td><td>Rating 1–5</td></tr>
    <tr><td>komentar</td><td>Text</td><td>Isi ulasan</td></tr>
    <tr><td>created_at</td><td>Timestamp</td><td>Waktu dibuat</td></tr>
    <tr><td>updated_at</td><td>Timestamp</td><td>Waktu update</td></tr>
  </tbody>
</table>
<h2>Relasi</h2>
<table border="1">
  <thead>
    <tr>
      <th>Tabel 1</th>
      <th>Tabel 2</th>
      <th>Jenis Relasi</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>users</td>
      <td>produk</td>
      <td>One to Many</td>
      <td>Setiap user dengan role "penjual" bisa memiliki banyak produk</td>
    </tr>
    <tr>
      <td>users</td>
      <td>pesanan</td>
      <td>One to Many</td>
      <td>Setiap user dengan role "pelanggan" bisa membuat banyak pesanan</td>
    </tr>
    <tr>
      <td>pesanan</td>
      <td>item_pesanan</td>
      <td>One to Many</td>
      <td>Satu pesanan bisa memiliki banyak item produk</td>
    </tr>
    <tr>
      <td>produk</td>
      <td>item_pesanan</td>
      <td>One to Many</td>
      <td>Satu produk bisa muncul di banyak item pesanan</td>
    </tr>
    <tr>
      <td>pesanan</td>
      <td>pembayaran</td>
      <td>One to One</td>
      <td>Satu pesanan hanya memiliki satu pembayaran</td>
    </tr>
    <tr>
      <td>produk</td>
      <td>kategori_produk</td>
      <td>Many to Many</td>
      <td>Satu produk bisa berada di banyak kategori dan sebaliknya</td>
    </tr>
    <tr>
      <td>kategori</td>
      <td>kategori_produk</td>
      <td>Many to Many</td>
      <td>Satu kategori bisa memiliki banyak produk</td>
    </tr>
    <tr>
      <td>users</td>
      <td>ulasan</td>
      <td>One to Many</td>
      <td>Satu user bisa memberikan banyak ulasan</td>
    </tr>
    <tr>
      <td>produk</td>
      <td>ulasan</td>
      <td>One to Many</td>
      <td>Satu produk bisa memiliki banyak ulasan</td>
    </tr>
  </tbody>
</table>

