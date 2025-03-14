<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('brunches', function (Blueprint $table) {
            $table->bigIncrements('id');  // أو يمكن استخدام bigint(20) unsigned إذا كان لديك إصدار MySQL أعلى
            $table->string('nom');       // اسم الطبق
            $table->text('description'); // وصف الطبق
            $table->string('image');     // رابط الصورة
            $table->timestamps();       // أعمدة timestamps (created_at, updated_at)
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brunches');
    }
};
