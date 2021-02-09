<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('meta_keyword')->default('');
            $table->string('meta_description')->default('');
            $table->string('header_section')->default('');
            $table->string('footer_section')->default('');
            $table->string('copyright')->default('');
            $table->string('social_links')->default('');
            $table->string('address')->default('');
            $table->string('phone')->default('');
            $table->string('email')->default('');
            $table->string('fremail')->default('');
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
        Schema::dropIfExists('admins_settings');
    }
}
