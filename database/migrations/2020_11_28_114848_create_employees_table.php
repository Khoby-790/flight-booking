<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('employee_id');
            $table->char("othernames", 100);
            $table->char("surname", 50);
            $table->char("abbrv", 5);
            $table->string("primaryphone");
            $table->string("secondaryphone")->nullable();
            $table->date("dob");
            $table->enum("position", ["Manager", "Financial Executive", "Teller", "System Administrator"])->default("System Administrator");
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
        Schema::dropIfExists('employees');
    }
}
