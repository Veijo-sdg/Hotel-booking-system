<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamp('banned_at')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image');
            $table->string('National_ID');
            $table->date('lastLogin')->nullable();
            $table->Integer('employee_id');
            //$table->unsignedInteger('employee_id');
            //$table->foreign('employee_id')->references('id')->on('employees');
            $table->rememberToken();
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
        Schema::dropIfExists('employees');
    }
}
