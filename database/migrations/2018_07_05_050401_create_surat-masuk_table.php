<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat-masuk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_surat');
            $table->date('tgl_surat');
            $table->string('pengirim');
            $table->string('perihal');
            $table->unsignedInteger('id_disposisi');
            $table->foreign('id_disposisi')->references('id')->on('disposisi')->onDelete('CASCADE');
            $table->string('file');
            $table->string('keterangan');
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
        Schema::dropIfExists('surat-masuk');
    }
}
