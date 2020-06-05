<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportantDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('important_documents', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->string('aadhar_image')->nullable();
            $table->string('pan_card_no')->nullable();
            $table->string('pan_card_image')->nullable();
            $table->enum('driving_licence',['Yes','No'])->nullable();
            $table->string('driving_licence_no')->nullable();
            $table->string('driving_licence_image')->nullable();
            $table->string('company_agreement_type')->nullable();
            $table->string('company_agreement_copy')->nullable();
            $table->enum('require_mmt_user_id',['Yes','No'])->nullable();
            $table->string('dashboard_name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('important_documents');
    }
}
