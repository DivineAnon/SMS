<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderProgramsTable extends Migration
{
    public function up()
    {
        Schema::create('header_programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_program');
            $table->string('target');
            $table->string('id_skl');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('header_programs');
    }
}
