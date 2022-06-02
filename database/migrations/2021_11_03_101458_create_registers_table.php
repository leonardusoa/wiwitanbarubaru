<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('golongan_darah');
            $table->text('alamat');
            $table->string('pendidikan_terakhir');
            $table->string('jurusan_pendidikan');
            $table->string('nomor_telp');
            $table->string('email');
            $table->string('konfirmasi');
            $table->string('scan_ijazah')->nullable();
            $table->string('essay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}
