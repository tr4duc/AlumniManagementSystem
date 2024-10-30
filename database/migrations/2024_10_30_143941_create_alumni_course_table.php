<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('alumni_course', function (Blueprint $table) {
        $table->id();
        $table->foreignId('alumni_id')->constrained('alumni');
        $table->foreignId('course_id')->constrained('courses');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_course');
    }
};
