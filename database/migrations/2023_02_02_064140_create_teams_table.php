<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('teamuid')->default('no');
            $table->string('useruid')->default('no');
            $table->string('name')->default('no');
            $table->integer('rating')->default('0'); 
            $table->string('training')->default('no');; 
            $table->decimal('def', $precision = 4, $scale = 2)->default('0');
            $table->decimal('mid', $precision = 4, $scale = 2)->default('0');
            $table->decimal('atk', $precision = 4, $scale = 2)->default('0');
            $table->integer('win')->default('0'); 
            $table->integer('draw')->default('0'); 
            $table->integer('loss')->default('0'); 
            $table->integer('point')->default('0'); 
            $table->integer('goal+')->default('0'); 
            $table->integer('goal-')->default('0');
            $table->string('titlesleague')->default('no');
            $table->string('titlescup')->default('no'); 
            $table->string('logo')->default('no');
            $table->string('lasttraining')->default('no'); 
            $table->string('fanclub')->default('no');
            $table->integer('fanclubmembers')->default('0'); 
            $table->string('stadium')->default('no');  
            $table->integer('arenacapacity')->default('0');  
            $table->string('birthday')->default('no');  
            $table->string('region')->default('no');  
            $table->string('target')->default('no');  
            $table->string('lineup')->default('no');  
            $table->string('lineupname')->default('no');  
            $table->string('goalkoefs')->default('no');  
            $table->string('playerid')->default('no'); ; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
