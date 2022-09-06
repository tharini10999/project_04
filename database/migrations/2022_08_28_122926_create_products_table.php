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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('products_id')->comment('รหัสผู้ใช้');
            $table->string('name')->comment('ชื่อผู้ใช้');
            $table->string('image')->comment('รูปภาพ');
            $table->string('detail')->comment('รายละเอียด');
            $table->integer('pice')->comment('ราคาสินค้า');
            $table->integer('Id_type pro')->comment('รหัสสินค้า');
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
        Schema::dropIfExists('products');
    }
};
