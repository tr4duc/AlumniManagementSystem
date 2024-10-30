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
    Schema::create('alumni', function (Blueprint $table) {
        $table->id();
        $table->string('first_name');
        $table->string('last_name');
        $table->date('birthdate');
        $table->year('graduation_year');
        $table->unsignedBigInteger('department_id'); 
        $table->string('email')->unique();
        $table->string('phone_number')->nullable();
        $table->string('current_job_title')->nullable();
        $table->timestamps();

        
        $table->foreign('department_id')->references('id')->on('departments');
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni');
    }
};
