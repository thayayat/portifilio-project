<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('certifications', function (Blueprint $table) {

            $table->id();
          
            $table->string('name');
            $table->string('title');
            $table->string('organization');
            $table->string('category')->nullable();
            $table->string('status')->nullable();
            $table->string('date_range')->nullable();
            $table->string('start_date')->nullable();
            $table->string('color_theme')->nullable();
            $table->string('image_path')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_verified')->default(true);
            $table->string('status_badge')->default('completed');



            $table->timestamps();
        });
    }


   public function down(): void
    {
        Schema::table('certifications', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
};
