<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->string('salary_package');
            $table->enum('yearly_monthly', ['Yearly','Monthly']);
            $table->string('amount');
            $table->string('yearly_public_holidays');
            $table->string('yearly_working_days');
            $table->string('monthly_working_days');
            $table->string('monthly_paid_leave');
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
        Schema::dropIfExists('salaries');
    }
}
