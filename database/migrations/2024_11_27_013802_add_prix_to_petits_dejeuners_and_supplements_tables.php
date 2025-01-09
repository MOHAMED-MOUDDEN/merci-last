<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrixToPetitsDejeunersAndSupplementsTables extends Migration
{
    public function up()
    {
        // تحقق إذا كان العمود غير موجود في جدول petits_dejeuners
        if (!Schema::hasColumn('petits_dejeuners', 'prix')) {
            Schema::table('petits_dejeuners', function (Blueprint $table) {
                $table->decimal('prix', 8, 2)->nullable()->after('description');
            });
        }

        // تحقق إذا كان العمود غير موجود في جدول supplements
        if (!Schema::hasColumn('supplements', 'prix')) {
            Schema::table('supplements', function (Blueprint $table) {
                $table->decimal('prix', 8, 2)->nullable()->after('description');
            });
        }
    }

    public function down()
    {
        // إذا أردت الرجوع عن هذه التعديلات، قم بحذف العمود
        Schema::table('petits_dejeuners', function (Blueprint $table) {
            $table->dropColumn('prix');
        });

        Schema::table('supplements', function (Blueprint $table) {
            $table->dropColumn('prix');
        });
    }
}
