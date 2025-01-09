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
        Schema::create('supplements', function (Blueprint $table) {
            $table->bigIncrements('id');  // أو يمكن استخدام bigint(20) unsigned إذا كان لديك إصدار MySQL أعلى
            $table->string('nom');
            $table->text('description');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('supplements');
    }
};
