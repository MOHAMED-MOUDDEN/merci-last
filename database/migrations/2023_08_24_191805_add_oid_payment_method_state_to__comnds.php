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
            $table->string('oid');
            $table->string('Pmethod');
            $table->string('state')->default('Non Payée');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comnds', function (Blueprint $table) {
            //
        });
    }
};
