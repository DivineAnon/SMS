<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailAbsensTable extends Migration
{
    public function up()
    {
        Schema::create('detail_absens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_header_absen');
            $table->string('id_sekolah');
            $table->string('id_kelas');
            $table->string('id_murid');
            $table->string('absensi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_absens');
    }
}
