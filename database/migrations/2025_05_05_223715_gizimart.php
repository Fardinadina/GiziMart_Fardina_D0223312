<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
            Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
             $table->enum('role', ['admin', 'penjual', 'pelanggan']);
            $table->rememberToken();
            $table->timestamps();
        });
  
        // Tabel Produk
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penjual_id')->constrained('users')->onDelete('cascade');
            $table->string('nama', 220);
            $table->text('deskripsi');
            $table->decimal('harga', 10, 2);
            $table->integer('stok');
            $table->timestamps();
        });

        // Tabel Pesanan
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelanggan_id')->constrained('users')->onDelete('cascade');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status', ['menunggu', 'selesai', 'dibatalkan']);
            $table->timestamps();
        });

        // Tabel Item Pesanan
        Schema::create('item_pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id')->constrained('pesanan')->onDelete('cascade');
            $table->foreignId('produk_id')->constrained('produk')->onDelete('cascade');
            $table->integer('jumlah');
            $table->decimal('harga', 10, 2);
        });

        // Tabel Pembayaran
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id')->constrained('pesanan')->onDelete('cascade');
            $table->enum('metode_pembayaran', ['kartu_kredit', 'transfer_bank', 'paypal']);
            $table->enum('status_pembayaran', ['menunggu', 'selesai', 'gagal']);
            $table->decimal('jumlah', 10, 2);
            $table->timestamp('dibayar_pada')->nullable();
        });

        // Tabel Kategori
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 220);
            $table->timestamps();
        });

        // Tabel Kategori Produk (Pivot)
        Schema::create('kategori_produk', function (Blueprint $table) {
            $table->foreignId('produk_id')->constrained('produk')->onDelete('cascade');
            $table->foreignId('kategori_id')->constrained('kategori')->onDelete('cascade');
            $table->primary(['produk_id', 'kategori_id']);
        });

        // Tabel Ulasan
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengguna_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('produk_id')->constrained('produk')->onDelete('cascade');
            $table->tinyInteger('nilai');
            $table->text('komentar');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('ulasan');
        Schema::dropIfExists('kategori_produk');
        Schema::dropIfExists('kategori');
        Schema::dropIfExists('pembayaran');
        Schema::dropIfExists('item_pesanan');
        Schema::dropIfExists('pesanan');
        Schema::dropIfExists('produk');
        Schema::dropIfExists('users');
    }
};
