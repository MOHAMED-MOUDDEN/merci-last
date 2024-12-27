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
    Schema::table('appartements', function (Blueprint $table) {

        $table->string('prenom')->nullable()->after('nom');
    });
}
}
public function down(): void
{
    Schema::table('appartements', function (Blueprint $table) {
        $table->dropColumn('prenom');
    });
}

};
