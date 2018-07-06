<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat-keluar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no-surat');
            $table->string('tgl-surat');
            $table->string('pengirim');
            $table->string('perihal');
            $table->string('tertuju');
            $table->string('alamat');
            $table->unsignedInteger('id-disposisi');
            $table->foreign('id-disposisi')->references('id')->on('disposisi')->onDelete('CASCADE');
            $table->string('ket-disposisi');
            $table->string('file');
            
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
        Schema::dropIfExists('surat-keluar');
    }
}
