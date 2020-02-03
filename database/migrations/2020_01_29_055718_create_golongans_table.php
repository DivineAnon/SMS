<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGolongansTable extends Migration
{
    public function up()
    {
        Schema::create('golongans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_golongan')->unique();
            $table->string('golongan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('golongans');
    }
}
