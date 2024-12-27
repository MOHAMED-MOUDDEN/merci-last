<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('comnds', function (Blueprint $table) {
            // $table->dropPrimary('id');
            // $table->dropColumn('id');
            // $table->unsignedInteger('id');
            // $table->primary('oid'); // Add the primary key on the 'oid' column

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comnds', function (Blueprint $table) {
            // $table->dropPrimary('oid'); // Drop the primary key from the 'oid' column
            // $table->primary('id'); // Re-add the primary key

        });
    }
};
