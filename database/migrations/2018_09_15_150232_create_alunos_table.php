<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->string('aluno_cpf', 14)->primary()->unique();
            $table->string('aluno_nome', 45);
            $table->string('aluno_estado', 20)->nullable();
            $table->string('aluno_municipio', 45)->nullable();
            $table->string('aluno_telefone', 15)->nullable();
            $table->string('aluno_email', 45)->unique();
            $table->string('aluno_senha', 100);
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
        Schema::dropIfExists('alunos');
    }
}
