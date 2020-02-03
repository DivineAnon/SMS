<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSklsTable extends Migration
{
    public function up()
    {
        Schema::create('skls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_skl');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skls');
    }
}
