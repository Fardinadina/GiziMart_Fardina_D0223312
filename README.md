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

<h>4. Tabel order_items</h>
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

<h>5. Tabel payment</h>
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

<h>6. Tabel categories</h>
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

<h>7. Tabel product_categories</h>
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
