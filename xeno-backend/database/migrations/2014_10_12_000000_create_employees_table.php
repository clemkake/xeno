<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('last_name');
            $table->string('nickname');
            $table->bigInteger('title')->unsigned();
            $table->bigInteger('company')->unsigned();
            $table->string('image')->nullable();
            $table->string('manager_id')->nullable();
            $table->text('about_me')->nullable();

            $table->bigInteger('work_phone')->nullable();
            $table->bigInteger('mobile_phone')->nullable();
            $table->bigInteger('fax')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state_province')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();

            $table->boolean('active')->default(false);
            $table->string('activation_token')->default('');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('employees');
    }
}
