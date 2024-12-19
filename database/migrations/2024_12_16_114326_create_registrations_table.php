<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id('id_registrasi');
            $table->foreignId('id')->constrained('users');
            $table->foreignId('id_event')->constrained('events');
            $table->string('nama_event');
            $table->string('nama');
            $table->string('alamat');
            $table->string('status');
            $table->string('lokasi_event');
            $table->decimal('harga_tiket', 10, 2);
            $table->text('deskripsi');
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
        Schema::dropIfExists('registrations');
    }
}
