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
        Schema::table('appartements', function (Blueprint $table) {
            $table->decimal('prix', 8, 2)->nullable()->default(0)->change(); // اجعل الحقل اختياريًا أو ذو قيمة افتراضية
        });
    }

    public function down()
    {
        Schema::table('appartements', function (Blueprint $table) {
            $table->decimal('prix', 8, 2)->nullable(false)->change(); // يمكنك تعديل القيمة عند التراجع
        });
    }
    };
