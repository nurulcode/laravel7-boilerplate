<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id('id');
            $table->string('no_rekam_medis')->unique();
            $table->dateTime('tanggal_registrasi');

            $table->string('jenis_identitas')->nullable();
            $table->string('nomor_identitas')->nullable();
            $table->string('nama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();

            $table->string('golongan_darah')->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->string('berat_badan')->nullable();

            $table->string('agama')->nullable();
            $table->unsignedBigInteger('kelurahan_id')->nullable();

            $table->unsignedBigInteger('suku_id')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();

            $table->string('alamat')->nullable();

            $table->string('telepon')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->string('nama_pasangan')->nullable();
            $table->string('alamat_keluarga')->nullable();
            $table->string('telepon_keluarga')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();


            $table->timestamps();

            $table->foreign('suku_id')
                ->references('id')
                ->on('sukus')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreign('kelurahan_id')
                ->references('id')
                ->on('kelurahans')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('set null');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
}
