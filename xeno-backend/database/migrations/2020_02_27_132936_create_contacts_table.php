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

            $table->string('lead_referral_source');
            $table->date('date_of_initial_contact')->nullable();
            $table->string('Industry');
            $table->string('website');
            $table->bigInteger('deal')->unsigned()->default(1);
            $table->bigInteger('company')->unsigned();
            
            $table->string('status');
            $table->string('linkedin_profile')->nullable();
            $table->string('background_info')->nullable();
            $table->bigInteger('sales_rep')->unsigned();
            $table->string('ratings')->nullable();
            $table->string('project_type')->nullable();
            $table->date('proposal_due_date')->nullable();
            $table->string('budget')->nullable();
            $table->boolean('is_lead')->false(true);

            $table->string('image')->nullable();
            $table->string('manager_id')->nullable();
            $table->text('about_me')->nullable();
            $table->string('email');
            $table->bigInteger('work_phone')->nullable();
            $table->bigInteger('mobile_phone');
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
