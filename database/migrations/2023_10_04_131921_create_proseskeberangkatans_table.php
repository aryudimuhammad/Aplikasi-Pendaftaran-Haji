<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProseskeberangkatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proseskeberangkatans', function (Blueprint $table) {
            $table->id();
            $table->string('olahraga')->nullable();
            $table->text('olahragaisi')->nullable();
            $table->string('vaksinasi')->nullable();
            $table->text('vaksinasiisi')->nullable();
            $table->string('kesehatan')->nullable();
            $table->text('kesehatanisi')->nullable();
            $table->string('istirahat')->nullable();
            $table->text('istirahatisi')->nullable();
            $table->string('obat')->nullable();
            $table->text('obatisi')->nullable();
            $table->string('perjalanan')->nullable();
            $table->text('perjalananisi')->nullable();
            $table->string('perlengkapan')->nullable();
            $table->text('perlengkapanisi')->nullable();
            $table->string('keuangan')->nullable();
            $table->text('keuanganisi')->nullable();
            $table->string('imantaqwa')->nullable();
            $table->text('imantaqwaisi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proseskeberangkatans');
    }
}
