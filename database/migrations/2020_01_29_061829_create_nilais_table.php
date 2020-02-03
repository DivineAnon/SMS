<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaisTable extends Migration
{
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_mapel');
            $table->string('id_guru');
            $table->string('id_kelas');
            $table->string('id_murid');
            $table->string('nilai');
            $table->string('tahun_ajaran');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nilais');
    }
}
