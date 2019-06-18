<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('versions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('data_version')->nullable();
            $table->string('data_url')->nullable();
            $table->string('popup_notification_title')->nullable();
            $table->string('popup_notification_message')->nullable();
            $table->string('popup_notification_positive_btn')->nullable();
            $table->string('popup_notification_positive_url_link')->nullable();
            $table->string('popup_notification_negative_btn')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('versions');
    }
}
