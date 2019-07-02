<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('item_id');
            $table->integer('subItem_id')->nullable();
            $table->string('title')->nullable();
            $table->text('hints')->nullable();
            $table->text('name')->nullable();
            $table->text('designation')->nullable();
            $table->string('mobile_one')->nullable();
            $table->string('mobile_two')->nullable();
            $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();
            $table->string('email_one')->nullable();
            $table->string('email_two')->nullable();
            $table->string('website')->nullable();
            $table->bigInteger('order_id')->default(0);
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
}
