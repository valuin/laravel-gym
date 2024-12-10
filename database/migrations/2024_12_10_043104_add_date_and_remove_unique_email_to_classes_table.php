<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateAndRemoveUniqueEmailToClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classes', function (Blueprint $table) {
            // Add the 'date' column after the 'session' column
            $table->date('date')->nullable()->after('session');

            // Remove the unique constraint from the 'email' column
            $table->dropUnique(['email']); // Using the column name array
            // Alternatively, specify the index name if necessary:
            // $table->dropUnique('classes_email_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classes', function (Blueprint $table) {
            // Remove the 'date' column
            $table->dropColumn('date');

            // Re-add the unique constraint to the 'email' column
            $table->unique('email');
        });
    }
}