<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacaos', function (Blueprint $table) {
            $table->uuid('id');
            $table->text('descricao');
            $table->text('solucao');            
            $table->uuid('salas_id');
            $table->foreign('salas_id')->references('id')->on('salas')->onDelete('cascade'); 
            $table->uuid('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade'); 
            $table->uuid('tecnico_id');
            $table->foreign('tecnico_id')->references('id')->on('tecnico')->onDelete('cascade'); 
            $table->uuid('filial_id');
            $table->foreign('filial_id')->references('id')->on('filials')->onDelete('cascade'); 
            $table->uuid('solicitante_id');
            $table->foreign('solicitante')->references('id')->on('solicitante')->onDelete('cascade'); 
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
        Schema::dropIfExists('solicitacaos');
    }
}
