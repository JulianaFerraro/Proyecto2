<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('document_number', 25);
            $table->string('names', 50);
            $table->string('last_names', 50);
            $table->date('birth_date');
            $table->string('age', 3);
            $table->string('email', 50);
            $table->string('password');
            $table->bigInteger('documents_types_id')->unsigned();
            $table->foreign('documents_types_id')->references('id')->on('documents_types');
            $table->bigInteger('genders_id')->unsigned();
            $table->foreign('genders_id')->references('id')->on('genders');
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
        Schema::dropIfExists('users');
    }
}
