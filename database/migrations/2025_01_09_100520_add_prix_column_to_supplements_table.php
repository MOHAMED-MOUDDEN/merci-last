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
        {
            // إضافة العمود 'prix' إذا لم يكن موجودًا في جدول 'petits_dejeuners'
            if (!Schema::hasColumn('petits_dejeuners', 'prix')) {
                Schema::table('petits_dejeuners', function (Blueprint $table) {
                    $table->decimal('prix', 8, 2)->nullable()->after('description');
                });
            }

            // إضافة العمود 'prix' إذا لم يكن موجودًا في جدول 'supplements'
            if (!Schema::hasColumn('supplements', 'prix')) {
                Schema::table('supplements', function (Blueprint $table) {
                    $table->decimal('prix', 8, 2)->nullable()->after('description');
                });
            }
        }



        /**
         * Reverse the migrations.
         */
        public function down()
        {
            // حذف العمود "prix" من جدول "petits_dejeuners"
            Schema::table('petits_dejeuners', function (Blueprint $table) {
                if (Schema::hasColumn('petits_dejeuners', 'prix')) {
                    $table->dropColumn('prix');
                }
            });

            // حذف العمود "prix" من جدول "supplements"
            Schema::table('supplements', function (Blueprint $table) {
                if (Schema::hasColumn('supplements', 'prix')) {
                    $table->dropColumn('prix');
                }
            });
        }
    };

