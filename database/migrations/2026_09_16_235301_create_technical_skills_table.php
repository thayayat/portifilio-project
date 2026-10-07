<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('technical_skills', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->unsignedTinyInteger('percentage');
            $table->json('tags')->nullable();
            $table->unsignedInteger('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('technical_skills');
    }
};
