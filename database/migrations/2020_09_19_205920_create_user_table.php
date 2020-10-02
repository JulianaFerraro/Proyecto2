<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('docuement_number', 25);
            $table->string('names', 50);
            $table->string('last_names', 50);
            $table->date('birth_date');
            $table->string('age', 3);
            $table->string('email', 50);
            $table->string('password');
            $table->bigInteger('document_types_id')->unsigned();
            $table->foreign('document_types_id')->references('id')->on('document_types');
            $table->bigInteger('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('gender');
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
        Schema::dropIfExists('user');
    }
}
