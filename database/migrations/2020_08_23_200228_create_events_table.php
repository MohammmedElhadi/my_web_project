<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->integer('edition');
            $table->string('logo')->nullable();
            $table->date('date_debut')->default(now());
            $table->date('date_fin')->default(now());
            $table->integer('nombre_min_participant')->nullable();
            $table->integer('number_max_participant')->nullable();
            $table->enum('etat',['programe','encours','reporte','annule','termine']);
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
        Schema::dropIfExists('events');
    }
}
