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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('designation');
            $table->string('profile');
            $table->string('github');
            $table->string('linkedin');
            $table->string('facebook');
            $table->longText('get_in_touch');
            $table->string('location');
            $table->string('email');
            $table->string('number');
            $table->string('resume');
            $table->string('Freelance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
