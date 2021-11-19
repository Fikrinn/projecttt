<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;

    protected $visible = ['id_karyawan','nama_karyawan','no_telp'];

    protected $fillable = ['id_karyawan','nama_karyawan','no_telp'];

    public $timetamps = true;


    public function books()
    {
        $this->hasMany('App\Models\transaksi', 'id_karyawan');
    }
}
