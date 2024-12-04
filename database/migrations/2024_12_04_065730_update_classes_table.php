<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateClassesTable extends Migration
{
    public function up()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->string('city')->nullable();      // Kolom city
            $table->string('class')->nullable();     // Kolom class
            $table->string('session')->nullable();   // Kolom session
            $table->string('name')->nullable();      // Kolom name
            $table->string('whatsapp')->nullable();  // Kolom WA Number
            $table->string('email')->nullable();     // Kolom email
        });
    }

    public function down()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->dropColumn(['city', 'class', 'session', 'name', 'whatsapp', 'email']);
        });
    }
}
