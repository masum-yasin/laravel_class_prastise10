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
            $table->id();
            //  $table->primary('id');
            $table->string('course name',100);
            $table->decimal('course fee',10);
            $table->tinyInteger('course_category_id');
            $table->string('email',100);
            $table->integer('phone',15);
            $table->string('local city',50);
            $table->string('description',300);
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
