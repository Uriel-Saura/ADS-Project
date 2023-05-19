<?php

use App\Models\Catalogo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_catalogo');
            $table->string('Cantidad',10);
            $table->float('Anterior',5);
            $table->float('Actual',5);
            $table->float('Total',5);
            $table->float('Faltante',5);
            $table->float('Unitario',10);
            $table->float('Importe',15); 
            $table->timestamps();

        });

        Schema::table('estimacions', function (Blueprint $table) {
            $table->foreign('id_catalogo')->references('id')->on('catalogos');
        });
    }  

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimacions');
    }
}
