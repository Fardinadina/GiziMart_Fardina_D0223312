<div align="center">
    <h2 style="margin:0; font-size:3em; color:#333;">GIZIMART</h2>
    <img src="/public/ths.jpg" alt="Logo Explore Mandar" style="display:block; margin:1em auto; max-width:80%; height:auto;" />
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
      <td rowspan="8">Seller</td>
      <td>Melihat dashboard seller (produk sendiri, pesanan masuk)</td>
    </tr>
    <tr><td>Menambahkan produk baru</td></tr>
    <tr><td>Edit/hapus produk sendiri</td></tr>
    <tr><td>Mengatur stok dan harga</td></tr>
    <tr><td>Upload gambar produk</td></tr>
    <tr><td>Melihat pesanan masuk untuk produk sendiri</td></tr>
    <tr><td>Mengubah status pesanan (diproses, dikirim)</td></tr>
    <tr><td>Melihat ulasan/review terhadap produk sendiri</td></tr>
    <tr>
      <td rowspan="9">Customer</td>
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
    <tr><td>Id</td><td>Int</td><td>Primary Key, Auto Increment</td></tr>
    <tr><td>Name</td><td>Varchar(220)</td><td>Nama Pengguna</td></tr>
    <tr><td>Email</td><td>Varchar(220)</td><td>Email unik</td></tr>
    <tr><td>Passwoard</td><td>Varchar(220)</td><td>Password terenkripsi</td></tr>
    <tr><td>Role</td><td>Enum (‘admin’,’seller’, ‘customer’)</td><td>Menyimpan peran pengguna</td></tr>
    <tr><td>Created_at</td><td>TIMESTAMP</td><td>Waktu pembuatan akun</td></tr>
    <tr><td>Updated_at</td><td>TIMESTAMP</td><td>Waktu pembaruan akun</td></tr>
  </tbody>
</table>

<h2>2. Tabel product</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Id</td><td>Int</td><td>Primary Key, Auto Increment</td></tr>
    <tr><td>Seller_id</td><td>Int</td><td>Foreign Key (users)</td></tr>
    <tr><td>Name</td><td>Varchar(220)</td><td>Nama produk</td></tr>
    <tr><td>Description</td><td>Text</td><td>Deskripsi produk</td></tr>
    <tr><td>Price</td><td>Decimal(10,2)</td><td>Harga produk</td></tr>
    <tr><td>Stok</td><td>Int</td><td>Jumlah stok produk</td></tr>
    <tr><td>Created_at</td><td>TIMESTAMP</td><td>Waktu pembuatan produk</td></tr>
    <tr><td>Updated_at</td><td>TIMESTAMP</td><td>Waktu pembaruan produk</td></tr>
  </tbody>
</table>

<h2>3. Tabel orders</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Id</td><td>Int</td><td>Primary Key, Auto Increment</td></tr>
    <tr><td>Customer_id</td><td>Int</td><td>Foreign Key (users)</td></tr>
    <tr><td>Total_harga</td><td>Decimal(10,2)</td><td>Total harga order</td></tr>
    <tr><td>Status</td><td>ENUM('pending', 'completed', 'cancelled')</td><td>Status pesanan</td></tr>
    <tr><td>Created_at</td><td>TIMESTAMP</td><td>Waktu pembuatan order</td></tr>
    <tr><td>Updated_at</td><td>TIMESTAMP</td><td>Waktu pembaruan order</td></tr>
  </tbody>
</table>

<h2>4. Tabel order_items</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Id</td><td>Int</td><td>Primary Key, Auto Increment</td></tr>
    <tr><td>Order_id</td><td>Int</td><td>Foreign Key (orders)</td></tr>
    <tr><td>Product_id</td><td>Int</td><td>Foreign Key (products)</td></tr>
    <tr><td>Quantity</td><td>Int</td><td>Jumlah produk dalam order</td></tr>
    <tr><td>Price</td><td>Decimal(10,2)</td><td>Harga per item</td></tr>
  </tbody>
</table>

<h2>5. Tabel payment</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Id</td><td>Int</td><td>Primary Key, Auto Increment</td></tr>
    <tr><td>Order_id</td><td>Int</td><td>Foreign Key (orders)</td></tr>
    <tr><td>Payment_method</td><td>ENUM('credit_card', 'bank_transfer', 'paypal')</td><td>Metode pembayaran</td></tr>
    <tr><td>Payment_status</td><td>ENUM('pending', 'completed', 'failed')</td><td>Status pembayaran</td></tr>
    <tr><td>Amount</td><td>Decimal(10,2)</td><td>Jumlah yang dibayar</td></tr>
    <tr><td>Paid_at</td><td>TIMESTAMP</td><td>Waktu pembayaran</td></tr>
  </tbody>
</table>

<h2>6. Tabel categories</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Id</td><td>Int</td><td>Primary Key, Auto Increment</td></tr>
    <tr><td>Nama</td><td>Varchar(220)</td><td>Nama kategori</td></tr>
    <tr><td>Created_at</td><td>TIMESTAMP</td><td>Waktu pembuatan kategori</td></tr>
    <tr><td>Updaated_at</td><td>TIMESTAMP</td><td>Waktu pembaruan kategori</td></tr>
  </tbody>
</table>

<h2>7. Tabel product_categories</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Product_id</td><td>Int</td><td>Foreign Key (products)</td></tr>
    <tr><td>Category_id</td><td>Int</td><td>Foreign Key (categories)</td></tr>
  </tbody>
</table>

<h2>8.Tabel reviews</h2>
<table>
  <thead>
    <tr>
      <th>Nama Field</th>
      <th>Tipe Data</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Id</td><td>BigInt</td><td>Primary Key, Auto Increment</td></tr>
    <tr><td>User_id</td><td>ForeignId</td><td>Relasi ke users.id</td></tr>
    <tr><td>Product_id</td><td>ForeignId</td><td>Relasi ke products.id</td></tr>
    <tr><td>Rating</td><td>Tinyint</td><td>Skala penilaian (1–5)</td></tr>
    <tr><td>Comment</td><td>Text</td><td>Isi komentar ulasan</td></tr>
    <tr><td>Created_at</td><td>TIMESTAMP</td><td>Waktu pembuatan ulasan</td></tr>
    <tr><td>Updaated_at</td><td>TIMESTAMP</td><td>Waktu pembaruan ulasan</td></tr>
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
      <td>products</td>
      <td>One to Many</td>
      <td>Setiap user dengan role "seller" bisa memiliki banyak produk</td>
    </tr>
    <tr>
      <td>users</td>
      <td>orders</td>
      <td>One to Many</td>
      <td>Setiap user dengan role "customer" bisa membuat banyak order</td>
    </tr>
    <tr>
      <td>orders</td>
      <td>order_items</td>
      <td>One to Many</td>
      <td>Satu order bisa memiliki banyak item produk</td>
    </tr>
    <tr>
      <td>products</td>
      <td>order_items</td>
      <td>One to Many</td>
      <td>Satu produk bisa muncul di banyak order item berbeda</td>
    </tr>
    <tr>
      <td>orders</td>
      <td>payments</td>
      <td>One to One</td>
      <td>Satu order hanya memiliki satu pembayaran</td>
    </tr>
    <tr>
      <td>products</td>
      <td>product_categories</td>
      <td>Many to Many</td>
      <td>Satu produk bisa berada di banyak kategori dan sebaliknya</td>
    </tr>
    <tr>
      <td>categories</td>
      <td>product_categories</td>
      <td>Many to Many</td>
      <td>Satu kategori bisa memiliki banyak produk</td>
    </tr>
    <tr>
      <td>users</td>
      <td>reviews</td>
      <td>One to Many</td>
      <td>Satu user bisa memberikan banyak review</td>
    </tr>
    <tr>
      <td>products</td>
      <td>reviews</td>
      <td>One to Many</td>
      <td>Satu produk bisa memiliki banyak review</td>
    </tr>
  </tbody>
</table>

