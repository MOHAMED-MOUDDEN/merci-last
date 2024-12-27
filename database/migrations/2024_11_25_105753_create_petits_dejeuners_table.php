<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetitsDejeunersTable extends Migration
{
    /**
     * قم بتشغيل الهجرة.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petits_dejeuners', function (Blueprint $table) {
            $table->id(); // سيقوم بإنشاء عمود "id" كمفتاح رئيسي
            $table->string('nom'); // اسم الـ Petit Dejeuner
            $table->text('description'); // وصف الـ Petit Dejeuner
            $table->string('image'); // مسار الصورة
            $table->timestamps(); // لإنشاء أعمدة created_at و updated_at
        });
    }

    /**
     * الرجوع عن الهجرة.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petits_dejeuners');
    }
}
