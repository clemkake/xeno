<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('dates');
            $table->string('notes');
            $table->string('is_new_todo');
            $table->string('todo_type');
            $table->string('todo_desc');
            $table->string('todo_due_date');
            $table->bigInteger('contact')->unsigned();
            $table->string('task_status');  
            $table->string('task_update');
            $table->bigInteger('sales_rep')->unsigned();

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
        Schema::dropIfExists('notes');
    }
}
