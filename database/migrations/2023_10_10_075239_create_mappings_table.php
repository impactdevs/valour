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
        Schema::create('mappings', function (Blueprint $table) {
            $table->id();
            $table->string('business_name')->nullable();
            $table->string('business_telephone_contact')->nullable();
            $table->string('business_email_contact')->nullable();
            $table->string('business_location')->nullable();
            $table->string('physical_address')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_telephone')->nullable();
            $table->string('contact_person_email')->nullable();
            $table->string('contact_person_gender')->nullable();
            $table->string('pitch_interest')->nullable();
            $table->longText('notes')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mappings');
    }
};
