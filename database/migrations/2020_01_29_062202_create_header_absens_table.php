<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderAbsensTable extends Migration
{
    public function up()
    {
        Schema::create('header_absens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_distribusi_mapel');
            $table->string('id_murid');
            $table->date('tanggal');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('header_absens');
    }
}
