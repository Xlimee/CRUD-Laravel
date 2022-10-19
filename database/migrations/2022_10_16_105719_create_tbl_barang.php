<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_barang', function (Blueprint $table) {
            $table->id();
            $table->string('id_barang');
            $table->string('barang_kode');
            $table->string('barang_nama');
            $table->string('id_jenis');
            $table->string('id_supplier');
            $table->integer('harga_jual');
            $table->string('barang_status');
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
        Schema::dropIfExists('tbl_barang');
    }
}
