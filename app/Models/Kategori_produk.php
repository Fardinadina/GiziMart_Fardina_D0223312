<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class KategoriProduk extends Pivot
{
    protected $table = 'kategori_produk';

    public $incrementing = false;

    protected $guarded = [];
}
