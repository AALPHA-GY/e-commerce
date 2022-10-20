<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notification_id')->index();
            $table->foreign('notification_id')
                ->on('notifications')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->tinyInteger('read')->default(0);
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
        Schema::dropIfExists('notification_user_details');
    }
}
