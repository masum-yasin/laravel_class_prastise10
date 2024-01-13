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
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id(); // This creates an auto-incremented primary key column
            $table->string('student_name', 100);
            $table->integer('phone')->unique(); 
            $table->string('email', 70);
            $table->string('local_city', 50);
            $table->tinyInteger('course_category_id');
            $table->string('course_duration',50);
            $table->string('Lac_description', 300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_courses');
    }
};
