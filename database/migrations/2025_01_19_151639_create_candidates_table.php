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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('email', 91)->unique(); // Make email unique
            $table->string('mobile', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->rememberToken();
            $table->integer('logo')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('locality', 255)->nullable();
            $table->text('address')->nullable();
            $table->integer('pincode')->nullable();
            $table->string('landmark', 255)->nullable();
            $table->string('google_id')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('status_id')->default(14);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
