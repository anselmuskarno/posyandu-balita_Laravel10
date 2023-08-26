<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru');
            $table->string('nip_guru');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir_guru');
            $table->string('jabatan');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('nomor_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('kelas_yang_diajar');
            $table->string('alamat');
            $table->string('foto')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('gurus');
    }
};
