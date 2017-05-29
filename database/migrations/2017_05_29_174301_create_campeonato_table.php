<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampeonatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campeonato', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',100);
            $table->time('data_inicio');
            $table->string('modalidade',100);
            $table->string('data_inscicao',40);
            $table->integer('qtd_vagas');
            $table->integer('inscritos');
            $table->integer('confirmados');
            $table->longText('descricao');
            $table->longText('regras');
            $table->string('premiacao',200);
            $table->decimal('inscricao',10,2);
            $table->string('url_imagem',250);
            $table->string('url_banner',250);
            $table->string('criador',200);
            $table->integer('user_id')->unsigned();

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
        Schema::dropIfExists('campeonato');
    }
}
