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
    Schema::table('Brunches', function (Blueprint $table) {
        $table->decimal('prix', 8, 2);  // إضافة العمود prix
    });
}

public function down()
{
    Schema::table('Brunches', function (Blueprint $table) {
        $table->dropColumn('prix');
    });
}

};
