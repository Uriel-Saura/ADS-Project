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
            $table->unsignedBigInteger('id')->primary();
            $table->string('Concepto',50)->nullable();
            $table->string('Cantidad',10)->nullable();
            $table->float('Anterior',10)->nullable();
            $table->float('Actual',10)->nullable();
            $table->float('Total',10)->nullable();
            $table->float('Faltante',10)->nullable();
            $table->float('Unitario',20)->nullable();
            $table->float('Importe',30)->nullable(); 
            $table->float('id_catalogo',5)->nullable();
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
        Schema::dropIfExists('estimacions');
    }
}
