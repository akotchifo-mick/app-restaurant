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
            $table->integer('number')->min(0);
            $table->enum('meal', array('Breakfast', 'Lunch', 'Dinner'));
            $table->integer('orders') ;
            $table->boolean('consumed')->default(0);
            $table->index(['date','number'])->unique();
            $table->index(['date', 'user_id', 'meal'])->unique();
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
