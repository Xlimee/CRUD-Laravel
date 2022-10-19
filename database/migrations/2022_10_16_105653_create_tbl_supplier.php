<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_supplier', function (Blueprint $table) {
            $table->id();
            $table->string('id_supplier');
            $table->string('supplier_nama');
            $table->string('supplier_alamat');
            $table->string('supplier_phone');
            $table->string('supplier_status');
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
        Schema::dropIfExists('tbl_supplier');
    }
}
