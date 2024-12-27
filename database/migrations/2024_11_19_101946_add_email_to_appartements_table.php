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
        $table->string('email')->after('prenom');
    });
}

public function down(): void
{ if (!Schema::hasTable('appartements')) { // التأكد من عدم وجود الجدول مسبقاً
    Schema::table('appartements', function (Blueprint $table) {
        // تحقق إذا كان العمود موجودًا قبل محاولات حذفه
        if (Schema::hasColumn('appartements', 'email')) {
            $table->dropColumn('email');
        }
    });
}}

};
