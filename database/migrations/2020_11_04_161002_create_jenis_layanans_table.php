<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisLayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table jenis, kategory (RI, RJ, IGD)
        Schema::create('jenis_layanans', function (Blueprint $table) {
            $table->id();
            $table->enum('uraian', ['RJ', 'RI', 'IGD']);
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
        Schema::dropIfExists('jenis_layanans');
    }
}
