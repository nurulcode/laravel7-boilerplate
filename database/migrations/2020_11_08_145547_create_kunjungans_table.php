<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->constrained('paiens')->onDelete('cascade')->OnUpdate('cascade');
            $table->unsignedBigInteger('jenis_jaminan')->nullable();
            $table->string('no_kartu')->nullable()->default('-');
            $table->string('no_kunjungan')->nullable();
            $table->tinyInteger('jenis_layanan'); // jenis, kategori (1)
            $table->foreignId('penyakit_id');
            $table->foreignId('jenis_rujukan_id')->constrained('jenis_rujukans')->onDelete('set null')->OnUpdate('cascade');
            $table->string('no_rujukan')->nullable();
            $table->date('tgl_rujukan')->nullable();
            $table->string('rujukan')->nullable();
            $table->string('pj_nama')->nullable();
            $table->string('pj_telepon')->nullable();
            $table->string('keluarga_nama')->nullable();
            $table->string('keluarga_alamat')->nullable();
            $table->date('tgl_kunjungan')->nullable();
            $table->time('waktu_kunjungan')->nullable();
            $table->date('tgl_keluar')->nullable();
            $table->time('waktu_keluar')->nullable();
            $table->foreignId('jenis_kasus_id')->constrained('jenis_kasuses')->onDelete('set null')->OnUpdate('cascade');
            $table->foreignId('jenis_kegiatan_id')->constrained('jenis_kegiatans')->onDelete('set null')->OnUpdate('cascade');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('kunjungans');
    }
}
