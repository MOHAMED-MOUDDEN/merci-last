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
        if (!Schema::hasTable('appartement')) {
            Schema::create('appartement', function (Blueprint $table) {
                $table->id();
                $table->string('nom');
                $table->string('prenom');
                $table->string('email');
                $table->string('adresse')->nullable();
                $table->string('ville');
                $table->string('codePostal');
                $table->string('telephone');

                $table->unsignedBigInteger('room_id');
                $table->foreign('room_id')->references('id')->on('create_appartements')->onDelete('cascade');

                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartement');
    }
};
