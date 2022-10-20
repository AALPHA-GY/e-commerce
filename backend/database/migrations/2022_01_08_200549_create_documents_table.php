<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('document_name');
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('document_type_id')->index();
            $table->foreign('document_type_id')
                ->on('document_types')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
