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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('portfolio_tag')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_image')->nullable();
            $table->string('project_tag')->nullable();
            $table->string('project_dev_name')->nullable();
            $table->string('project_link')->nullable();
            $table->string('project_create')->nullable();
            $table->longText('project_description')->nullable();
            $table->string('tags')->nullable();
            $table->string('project_sub_img')->nullable();
            $table->string('project_video_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
