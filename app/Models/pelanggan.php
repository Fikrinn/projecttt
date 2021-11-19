<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;

    protected $visible = ['id_pelanggan','nama_pelanggan','no_telp','alamat'];

    protected $fillable = ['id_pelanggan','nama_pelanggan','no_telp','alamat'];

    public $timetamps = true;


    public function books()
    {
        $this->hasMany('App\Models\transaksi', 'id_pelanggan');
    }
}
