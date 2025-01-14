<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveViewFromRoomsTable extends Migration
{
    public function up()
    {
        if (Schema::hasColumn('rooms', 'view')) {
            Schema::table('rooms', function (Blueprint $table) {
                $table->dropColumn('view');
            });
        }
    }

    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->string('view')->nullable();
        });
    }


}
