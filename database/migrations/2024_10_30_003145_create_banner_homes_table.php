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
        Schema::create('banner_homes', function (Blueprint $table) {
            $table->id();
            $table->string('image_banner')->nullable();
            $table->string('image_banner_seo')->nullable();
            $table->string('short_title')->nullable();
            $table->string('long_title')->nullable();
            $table->string('left_btn_title')->nullable();
            $table->string('left_btn_link')->nullable();
            $table->string('right_btn_title')->nullable();
            $table->string('right_btn_link')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_homes');
    }
};
