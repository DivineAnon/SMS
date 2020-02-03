<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrangTuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orang_tuas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik')->unique();
            $table->string('nama_ortu');
            $table->string('dob')->nullable();
            $table->string('pob')->nullable();
            $table->text('alamat')->nullable();
            $table->string('email')->unique();
            $table->string('id_sekolah');
            $table->string('id_kelas');
            $table->string('id_murid');
            $table->string('id_role');
            $table->string('password');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orang_tuas');
    }
}
