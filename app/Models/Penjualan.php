<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Penjualan extends Model
{
    use HasFactory;
    protected $connection = 'psql';
    protected $table = 'penjualan';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = ['id_transaksi', 'produk', 'jumlah', 'total', 'tgl'];

}
