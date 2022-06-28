<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testes', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('nome');
            $table->string('email');
            $table->string('fone')->nullable();
            $table->string('protocolo');
            $table->string('data');
            $table->string('sessao1');
            $table->string('sessao2');
            $table->string('sessao3');
            $table->string('sessao4');
            $table->string('sessao5');
            $table->string('sessao6');
            $table->string('sessao7');
            $table->string('sessao8');
            $table->string('sessao9');
            $table->string('sessao10');
            $table->string('sessao11');
            $table->string('sessao12');
            $table->string('sessao13');
            $table->string('sessao14');
            $table->string('atena');
            $table->string('afrodite');
            $table->string('persefone');
            $table->string('artemis');
            $table->string('demeter');
            $table->string('hera');
            $table->string('geral');
            $table->string('total');
            $table->integer('sent_mail')->default(0);
            $table->integer('deletado')->default(0);
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
        Schema::dropIfExists('testes');
    }
}
