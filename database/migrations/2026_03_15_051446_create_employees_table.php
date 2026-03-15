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
            $table->string('employee_code', 25)->unique();
            $table->string('name', 200);
            $table->string('email', 200)->nullable();
            $table->string('phone', 100)->nullable();
            $table->text('address')->nullable();
            $table->string('gender', 10);
            $table->date('birth_date')->nullable();
            $table->date('hire_date');
            $table->string('employment_type', 20);
            $table->string('employment_status', 20);
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('position_id')->nullable();
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
