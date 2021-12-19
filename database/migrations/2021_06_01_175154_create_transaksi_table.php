<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('product_id');
            $table->string('payment');
            $table->string('total');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('nomor_hp');
            $table->string('status');
            $table->string('catatan');
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
        Schema::dropIfExists('transaksi');
    }
}
