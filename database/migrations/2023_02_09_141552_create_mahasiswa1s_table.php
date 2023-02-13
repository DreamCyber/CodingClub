<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswa1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa1', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nim', 15);
            $table->string('kelas', 20);
            $table->integer('nohp', 15);
            $table->string('sma', 100);
            $table->date('tglhr');
            $table->string('mtv', 200);
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
        Schema::dropIfExists('mahasiswa1s');
    }
}
