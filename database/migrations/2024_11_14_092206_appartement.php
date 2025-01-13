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
        if (!Schema::hasTable('appartements')) {
            Schema::create('appartements', function (Blueprint $table) {
                $table->id(); // id automatically created as primary key
                $table->string('nom');
                $table->string('prenom')->nullable(); // Added prenom column as it's in your database table
                $table->text('description')->nullable();
                $table->string('image');
                $table->float('prix');
                $table->integer('etoiles')->default(3);
                $table->string('extra_info')->nullable();
                $table->timestamps(); // created_at and updated_at
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartements');
    }
};
