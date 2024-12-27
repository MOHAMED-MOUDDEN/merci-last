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
    { if (!Schema::hasTable('appartements')) { // التأكد من عدم وجود الجدول مسبقاً
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->float('prix');
            $table->integer('etoiles')->default(3);
            $table->string('extra_info')->nullable();
            $table->timestamps();

        });
    }}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartements');
    }
};
