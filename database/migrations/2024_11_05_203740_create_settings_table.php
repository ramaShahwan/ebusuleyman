<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('footer_about_us_desc')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('second_phone_number')->nullable();
            $table->string('first_phone_number')->nullable();
            $table->string('open_shop_hour')->nullable();
            $table->string('close_shop_hour')->nullable();
            $table->string('twitter')->nullable();
            $table->string('map')->nullable();
            $table->string('footer_subscribe_desc')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('img_icon_browser')->nullable();
            $table->string('logo_seo')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
