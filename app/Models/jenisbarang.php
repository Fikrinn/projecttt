<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisbarang extends Model
{
    use HasFactory;

    protected $visible = ['id_jenis','nama_barang','tarif'];

    protected $fillable = ['id_jenis','nama_barang','tarif'];

    public $timetamps = true;


    public function books()
    {
        $this->hasMany('App\Models\transaksi', 'id_jenis');
    }
}
