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
    { if (!Schema::hasTable('appartements')) { // التأكد من عدم وجود الجدول مسبقاً
        Schema::table('appartements', function (Blueprint $table) {
            $table->string('ville', 255); // إضافة عمود "ville"
        });
    }}

    public function down()
    {
        Schema::table('appartements', function (Blueprint $table) {
            $table->dropColumn('ville'); // حذف العمود في حالة التراجع
        });
    }

};
