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
        Schema::create('deal_of_sections', function (Blueprint $table) {
            $table->id();
            $table->string('image_deal_of_month')->nullable();
            $table->string('image_deal_of_month_seo')->nullable();
            $table->string('deal_of_month_title_circle')->nullable();
            $table->string('deal_of_the_month_title')->nullable();
            $table->string('short_title')->nullable();
            $table->string('logn_desc')->nullable();
            $table->string('btn_title')->nullable();
            $table->string('btn_link')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deal_of_sections');
    }
};
