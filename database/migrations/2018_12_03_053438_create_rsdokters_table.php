<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsdoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsdokters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('spesialis', ['Kardiovaskular', 'THT', 'Kesehatan Gigi dan Mulut', 'Ginekologi', 'Tulang', 'Anak', 'Psikiater', 'Saraf', 'Kulit & Kelamin']);
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('no_induk');
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
        Schema::dropIfExists('rsdokters');
    }
}
