<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id(); // Kolom id (auto increment)
            $table->string('city'); // Kolom untuk kota
            $table->string('class'); // Kolom untuk jenis kelas (Yoga, Pilates, Body Combat)
            $table->string('session'); // Kolom untuk sesi (Morning, Evening, Night)
            $table->string('name'); // Kolom untuk nama peserta
            $table->string('wa_number'); // Kolom untuk nomor WhatsApp
            $table->string('email')->unique(); // Kolom untuk email (unik)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
