<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_trans');
            $table->date('tanggal');
            $table->bigInteger('id_karyawan')->unsigned();
            $table->bigInteger('id_pelanggan')->unsigned();
            $table->integer('berat');
            $table->bigInteger('id_jenis')->unsigned();
            $table->integer('tarif');
            $table->string('total');
            $table->string('note');
            // f  k author_id
            $table->foreign("id_karyawan")->references('id')
                ->on('karyawans')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign("id_pelanggan")->references('id')
                ->on('pelanggans')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign("id_jenis")->references('id')
               ->on('jenisbarangs')->onUpdate('cascade')
               ->onDelete('cascade');
               $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
