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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone',30);
            $table->string('address');
            $table->date('birth_date');
            $table->boolean('gender');
            $table->string('nationality',50);
            $table->string('job_title');
            $table->string('education');
            $table->float('salary');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('avatar')->default('uploads/employees/default.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
