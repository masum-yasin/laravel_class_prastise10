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
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // This creates an auto-incremented primary key column
            $table->string('course_name', 100);
            $table->decimal('course_fee', 10, 2);
            $table->tinyInteger('course_category_id');
            $table->string('email', 100);
            $table->integer('phone')->unique(); // Changed to unique instead of auto-incremented primary key
            $table->string('local_city', 50);
            $table->string('description', 300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
