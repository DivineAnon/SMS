<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistribusiMapelsTable extends Migration
{
    public function up()
    {
        Schema::create('distribusi_mapels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_mapel');
            $table->string('id_guru');
            $table->string('id_kelas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('distribusi_mapels');
    }
}
