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
            $tabel->string('nama_ortu');
            $tabel->string('dob')->nullable();
            $tabel->string('pob')->nullable();
            $tabel->text('alamat')->nullable();
            $tabel->string('email')->unique();
            $tabel->string('id_sekolah');
            $tabel->string('id_kelas');
            $tabel->string('id_murid');
            $tabel->string('id_role');
            $tabel->string('password');
            $tabel->string('status');
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
