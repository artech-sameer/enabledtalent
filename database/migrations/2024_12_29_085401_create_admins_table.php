<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained()->onDelete('cascade');
            $table->string('name', 255)->nullable();
            $table->integer('gender')->nullable()->comment('1=Female, 2=Male');
            $table->string('email', 91)->unique(); // Make email unique
            $table->string('mobile', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->rememberToken();
            $table->integer('media_id')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('locality', 255)->nullable();
            $table->text('address')->nullable();
            $table->integer('pincode')->nullable();
            $table->string('landmark', 255)->nullable();
            $table->integer('status_id')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
