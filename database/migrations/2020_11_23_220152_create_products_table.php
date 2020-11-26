<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_barra')->nullable();
            /**$table->string('avatar'); */
            $table->string('nombre');
            $table->string('marca')->nullable();
            $table->string('categoria')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('cantidad')->nullable();
            $table->decimal('precio_compra')->nullable();
            $table->decimal('precio_venta')->nullable();
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
        Schema::dropIfExists('products');
    }
}
