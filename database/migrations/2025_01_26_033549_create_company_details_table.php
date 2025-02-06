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
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->foreignId('industry_id')->nullable()->constrained()->onDelete('set null'); 
            $table->string('company_name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('mobile', 255)->nullable();
            $table->string('company_size', 100)->nullable();
            $table->string('registration_number', 255)->nullable();
            $table->text('bio')->nullable();
            $table->string('website_url')->nullable();
            $table->text('address')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('locality', 255)->nullable();
            $table->integer('pincode')->nullable();
            $table->string('landmark', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->integer('status_id')->default(15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_details');
    }
};
