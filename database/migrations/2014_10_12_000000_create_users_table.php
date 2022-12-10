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
            $table->timestamp('email_verified_at')->nullable(); 
            // est-ce nécessaire? on garantit que chaque étudiant a un mail existant; nullable pour les caissiers et l'admin
            $table->enum('role', array('student', 'admin', 'waiter'));
            $table->enum('statut', array('active', 'inactive' ))->default ('inactive')->nullable(); 
            // chez les étudiants statut est insignifiant mais avec les caissiers ça prend son sens  
            $table->rememberToken()->nullable();                       
            $table->string('password');
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
