<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('contentId');
            $table->string('contentTitle', 255);
            $table->text('contentDesc')->nullable();
            $table->string('contentStatus', 55)->default('published');
            $table->string('contentImage', 255)->nullable();
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('categoryId');
            $table->foreign('userId')->references('userId')->on('users');
            $table->foreign('categoryId')->references('categoryId')->on('categories')->onDelete('cascade');
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
}
