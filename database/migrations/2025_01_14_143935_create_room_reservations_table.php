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
        Schema::create('room_reservations', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // اسم الشخص
            $table->string('email'); // البريد الإلكتروني
            $table->date('date'); // تاريخ الحجز
            $table->time('heure'); // وقت الحجز
            $table->integer('gens'); // عدد الأشخاص
            $table->string('phone'); // رقم الهاتف
            $table->timestamps(); // توقيت الإنشاء والتحديث
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_reservations');
    }
};
