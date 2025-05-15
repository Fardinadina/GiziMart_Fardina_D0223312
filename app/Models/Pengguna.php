<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $guarded = [];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'penjual_id');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'pelanggan_id');
    }


    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'pengguna_id');
    }

}
