<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi');
            $table->string('id_admin');
            $table->date('transaksi_tanggal');
            $table->string('transaksi_nonota');
            $table->string('transaksi_status');
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
        Schema::dropIfExists('tbl_transaksi');
    }
}
