<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('company_mobile_no')->nullable();
            $table->string('company_whatsapp_no')->nullable();
            $table->string('personal_email_id')->nullable();
            $table->string('personal_phone_no')->nullable();
            $table->string('personal_whatsapp_no')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('pernament_address_pin_code')->nullable();
            $table->string('permanent_address_proof_image')->nullable();
            $table->string('present_address')->nullable();
            $table->string('present_address_pin_code')->nullable();
            $table->string('present_address_proof_image')->nullable();
            $table->string('first_emergency_contact_name')->nullable();
            $table->string('first_emergency_relationship')->nullable();
            $table->string('first_emergency_verification')->nullable();
            $table->string('second_emergency_name')->nullable();
            $table->string('second_emergency_relationship')->nullable();
            $table->string('second_emergency_verification')->nullable();
            $table->string('passport_size_photo')->nullable();
            $table->string('educational_qualification')->nullable();
            $table->string('curriculum_vite')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
