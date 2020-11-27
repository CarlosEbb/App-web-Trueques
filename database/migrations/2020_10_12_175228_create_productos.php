<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->string('nombre');
            $table->text('descripcion');

            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('sub_categoria_id')->unsigned();
            $table->foreign('sub_categoria_id')->references('id')->on('sub_categorias')->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipo_anuncio')->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('municipio_id')->nullable();
            $table->integer('departamento_id')->nullable();

            $table->string('precio');
           
            $table->integer('status')->default(true);
                //status 0 = Pausada
                //status 1 = Publicada
                //status 3 = Proceso de intercambio
                //status 4 = intercambio Finalizado
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
        Schema::dropIfExists('productos');
    }
}
