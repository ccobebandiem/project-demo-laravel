<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_new', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->text('description')->nullable();
            $table->integer('department_id')->unsigned();
            $table->date('birthDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_new');
    }
}
