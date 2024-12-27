<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.**/
     public function up()
{
    Schema::table('appartements', function (Blueprint $table) {
        $table->decimal('prix', 8, 2)->default(0)->nullable()->change(); // تغيير العمود لتحديد القيمة الافتراضية
    });
}

public function down()
{
    Schema::table('appartements', function (Blueprint $table) {
        $table->decimal('prix', 8, 2)->nullable(false)->change(); // التراجع عن التغيير
    });
}

};
