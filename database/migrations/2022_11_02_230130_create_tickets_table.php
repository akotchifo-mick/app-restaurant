<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); 
            $table->date('date');       
            $table->integer('number');
            $table->enum('meal', array('Breakfast', 'Lunch', 'Dinner'))->nullable();
            $table->integer('orders')->nullable() ;
            $table->boolean('consumed')->default(0)->nullable();
            $table->index(['date','number'])->unique(); // les numéros de tickets sont réinitialisés tous les jours
            $table->index(['date', 'user_id', 'meal'])->unique(); // un etudiant ne peut avoir qu'un ticket par repas chaque jour        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
