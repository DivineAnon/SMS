<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_sekolah');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->string('video');
            $table->dateTime('date_time_post');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
