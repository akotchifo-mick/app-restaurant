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
            $table->bigInteger('cardId')->unique();
            $table->string('lastName');
            $table->string('firstName');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // est-ce nécessaire?
            $table->enum('role', array('student', 'admin', 'waiter'));
            $table->string('password');
            //$table->rememberToken();
            //valider le cardId en demandant une image soit de la carte soit de la fiche d'inscription
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
