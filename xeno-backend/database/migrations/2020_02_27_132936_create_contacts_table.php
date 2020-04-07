<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('nickname');
            $table->string('title');
            $table->string('company');

            $table->string('lead_referral_source');
            $table->string('date_of_initial_contact');
            $table->string('Industry');
            $table->string('website');
            $table->bigInteger('deal')->unsigned();
            

            
            $table->string('status');
            $table->string('linkedin_profile');
            $table->string('background_info');
            $table->bigInteger('sales_rep')->unsigned();
            $table->string('ratings');
            $table->string('project_type');
            $table->string('project_description');
            $table->string('proposal_due_date');
            $table->string('budget');

            $table->string('image')->nullable();
            $table->string('manager_id')->nullable();
            $table->text('about_me')->nullable();
            $table->bigInteger('work_phone')->nullable();
            $table->bigInteger('mobile_phone')->unique();
            $table->bigInteger('fax')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state_province')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();
            

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
        Schema::dropIfExists('contacts');
    }
}
