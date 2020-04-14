<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function($table) {
            $table->foreign('title')->references('id')->on('job_functions');
            $table->foreign('company')->references('id')->on('companies');
        });

        Schema::table('mails', function($table) {
            $table->foreign('sender')->references('id')->on('employees');
        });

        Schema::table('contacts', function($table) {
            $table->foreign('deal')->references('id')->on('deals');
            $table->foreign('company')->references('id')->on('companies');
            $table->foreign('sales_rep')->references('id')->on('employees');
        });

        Schema::table('deals', function($table) {
            $table->foreign('company')->references('id')->on('companies');
        });

        Schema::table('forms', function($table) {
            $table->foreign('employee')->references('id')->on('employees');
        });

        Schema::table('reports', function($table) {
            $table->foreign('employee')->references('id')->on('employees');
        });

        Schema::table('audits', function($table) {
            $table->foreign('contact')->references('id')->on('contacts');
        });

        Schema::table('notes', function (Blueprint $table) {
            $table->foreign('contact')->references('id')->on('contacts');
            $table->foreign('sales_rep')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
