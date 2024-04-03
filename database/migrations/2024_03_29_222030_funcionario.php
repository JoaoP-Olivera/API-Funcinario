<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('funcionario', function( Blueprint $table){
            $table->id();
            $table->string('nome', 200);
            $table->string('email', 200);
            $table->string('num_de_telefone');
            $table->enum('genero',['masculino','feminino','outros']);
            $table->integer('idade')->unsigned();
            $table->timestamp('criado_em');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionario');
    }
};
