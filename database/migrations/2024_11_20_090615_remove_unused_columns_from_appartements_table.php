<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUnusedColumnsFromAppartementsTable extends Migration
{
   
    public function up(): void
    {
        Schema::table('appartements', function (Blueprint $table) {
            // حذف الأعمدة التي توجد بالفعل
            if (Schema::hasColumn('appartements', 'adresse')) {
                $table->dropColumn('adresse');
            }
            if (Schema::hasColumn('appartements', 'ville')) {
                $table->dropColumn('ville');
            }
            if (Schema::hasColumn('appartements', 'codePostal')) {
                $table->dropColumn('codePostal');
            }
            if (Schema::hasColumn('appartements', 'telephone')) {
                $table->dropColumn('telephone');
            }
        });
    }
}
