<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();;
            $table->string('email')->nullable();;
            $table->string('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('jeniskelamin')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kk')->nullable();
            $table->string('akte')->nullable();
            $table->string('foto')->nullable();
            $table->string('noporsi')->nullable();
            $table->string('pembayaran')->nullable();
            $table->string('bukti')->nullable();
            $table->string('jadwal_berangkat')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('pendaftarans');
    }
}
