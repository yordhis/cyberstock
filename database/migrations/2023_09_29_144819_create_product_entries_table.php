<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_entries', function (Blueprint $table) {
            $table->id();
            $table->string('entry_code', 55)->nullable();
            $table->string('barcode_product', 55)->nullable();
            $table->string('provider_code', 55)->nullable();
            $table->string('quantity', 55)->nullable();
            $table->string('unit_cost', 55)->nullable();
            $table->string('subtotal', 55)->nullable();
            $table->string('tax', 55)->nullable(); // impuesto
            $table->string('concept', 255)->nullable();
            $table->text('observation')->nullable();
            $table->text('entry_type')->nullable(); 
            // estatus_entry -> tipos de entradas 
            //-> Orden de pedido, Orden en espera, Orden completada, Devolución, Consumo
            $table->text('status')->nullable(); //
            $table->string('date_entry', 55)->nullable();
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
        Schema::dropIfExists('product_entries');
    }
}
