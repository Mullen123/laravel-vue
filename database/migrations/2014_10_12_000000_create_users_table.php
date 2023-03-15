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
         
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('secondname')->nullable();
            $table->string('lastname');
            $table->string('username')->index();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //clave foranea de la tabla files no acepta negativos y acepta nulos
            $table->bigInteger('file_id')->unsigned()->nullable();
            $table->rememberToken();
            //ver quien creo el registro
            $table->bigInteger('created_by')->unsigned()->index();
            $table->bigInteger('updated_by')->unsigned()->index();
            //sabemos si esta activo oh no por defecto agregamo A de activo
            $table->enum('state', ['A', 'I'])->nullable()->default('A');
            $table->timestamps();

            //referencia con la tabla files 
            $table->foreign('file_id')->references('id')->on('files');
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
