<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->integer('sdid');
            $table->integer('sid');
            $table->string('slide_title');
            $table->string('slide_page_url');
            $table->string('image');
            $table->string('slide_target_url');
            $table->string('slide_text');
            $table->foreign('sid')
                    ->references('sid')->on('sliders')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('slides');
    }
}
