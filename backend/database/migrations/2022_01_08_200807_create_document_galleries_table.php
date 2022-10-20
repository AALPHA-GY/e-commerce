<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('document_name');
            $table->unsignedBigInteger('document_id')->index();
            $table->foreign('document_id')
                ->on('documents')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('document_url');
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
        Schema::dropIfExists('document_galleries');
    }
}
