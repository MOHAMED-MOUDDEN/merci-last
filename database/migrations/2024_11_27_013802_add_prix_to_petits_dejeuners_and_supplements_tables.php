<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrixToPetitsDejeunersAndSupplementsTables extends Migration
{
    public function up()
    {
        // إضافة عمود السعر إلى جدول petits_dejeuners
        Schema::table('petits_dejeuners', function (Blueprint $table) {
            $table->decimal('prix', 8, 2)->after('description')->nullable();
        });

        // إضافة عمود السعر إلى جدول supplements
        Schema::table('supplements', function (Blueprint $table) {
            $table->decimal('prix', 8, 2)->after('description')->nullable();
        });
    }

    public function down()
    {
        // إزالة العمود عند التراجع
        Schema::table('petits_dejeuners', function (Blueprint $table) {
            $table->dropColumn('prix');
        });

        Schema::table('supplements', function (Blueprint $table) {
            $table->dropColumn('prix');
        });
    }
}
