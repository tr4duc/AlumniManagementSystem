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
    Schema::create('jobs', function (Blueprint $table) {
        $table->id();
        $table->foreignId('alumni_id')->constrained('alumni');
        $table->string('company_name');
        $table->string('job_title');
        $table->date('start_date');
        $table->date('end_date')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
