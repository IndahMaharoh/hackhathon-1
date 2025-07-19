<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Produk extends Model
{
    protected $connection = 'psql';
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = ['id_produk', 'produk', 'harga'];

    public function Penjualan()
    {
        return $this->hasManyTo('App\Models\Penjualan', 'id_produk');
    }

}
