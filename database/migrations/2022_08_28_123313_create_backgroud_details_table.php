<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backgroud_details', function (Blueprint $table) {
            $table->increments('backgroud_details')->comment('รหัสผู้ใช้');
            $table->string('image')->comment('รูปภาพ');
            $table->string('name')->comment('ชื่อผู้ใช้');
            $table->integer('users_id')->comment('รหัสผูใช้งาน');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('backgroud_details');
    }
};
