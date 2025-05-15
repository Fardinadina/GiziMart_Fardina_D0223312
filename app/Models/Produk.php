<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $guarded = [];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'penjual_id');
    }

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'kategori_produk', 'produk_id', 'kategori_id');
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'produk_id');
    }

    public function itemPesanan()
    {
        return $this->hasMany(ItemPesanan::class, 'produk_id');
    }
}
