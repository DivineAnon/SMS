<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nisn')->unique();
            $tabel->string('nis')->unique();
            $tabel->string('nama_murid');
            $tabel->string('dob')->nullable();
            $tabel->string('pob')->nullable();
            $tabel->text('alamat')->nullable();
            $tabel->string('email')->unique();
            $tabel->string('id_kelas');
            $tabel->string('id_sekolah');
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
        Schema::dropIfExists('murids');
    }
}
