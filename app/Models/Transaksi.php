<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
        'id',
        'nm_barang',
        'invoice',
        'keluhan',
        'atas_nm',
        'kelengkapan',
        'keterangan',
        'status',
        'tgl_masuk',
        'tgl_selesai',
        'biaya',
        'pengambil'

    ];
}
