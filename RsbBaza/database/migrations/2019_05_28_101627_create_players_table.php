<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('dob')->nullable();
            $table->tinyInteger('age')->nullable();
            $table->string('nationality')->nullable();
            $table->integer('height')->nullable();
            $table->enum('preferred_foot', ['Desna', 'Leva', 'Obe']);
            $table->string('joined')->nullable();
            $table->string('signed_from')->nullable();
            $table->string('contract_until')->nullable();
            $table->integer('full_contract_wage')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('players');
    }
}
