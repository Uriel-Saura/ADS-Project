<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogoEstimacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_estimacion', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('catalogo_id')
                ->nullable()
                ->constrained('catalogos')
                ->nullOnDelete();

            $table->foreignId('estimacion_id')
                ->nullable()
                ->constrained('estimacions')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogo_estimacion');
    }
}
