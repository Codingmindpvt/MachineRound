<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name')->nullable(); 
            $table->string('employee_salary')->nullable(); 
            $table->string('employee_age')->nullable(); 
            $table->string('profile_image')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_employees');
    }
};
