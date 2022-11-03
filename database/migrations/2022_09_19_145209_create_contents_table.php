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
        Schema::create('content', function (Blueprint $table) {
            $table->increments('content')->comment('รหัสผู้ใช้');
            $table->string('name')->comment('ชื่อสินค้า');
            $table->integer('price')->comment('ราคาสินค้า');
            $table->text('detai')->comment('รายละเอียดสินค้า');
            $table->string('image')->comment('รูปภาพ');
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
        Schema::dropIfExists('contents');
    }
};
