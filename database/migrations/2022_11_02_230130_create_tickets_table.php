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
            $table->enum('meal', array('Breakfast', 'Lunch', 'Dinner'));
            $table->date('date');
            //$table->integer('orders');
            //$table->boolean('consumed')->default('False');
        });

        //i gota add la clé c'est deux colonnes date and ticket number
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
