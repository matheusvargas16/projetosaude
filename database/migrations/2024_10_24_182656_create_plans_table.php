<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Nome do plano
            $table->text('cobertura'); // Cobertura do plano
            $table->decimal('preco', 8, 2); // Preço do plano
            $table->timestamps(); // Campos de timestamps (created_at, updated_at)
        });

        // Inserir os três planos de exemplo
        DB::table('plans')->insert([
            [
                'nome' => 'Saúde Simples',
                'cobertura' => 'Consultas ambulatoriais, exames laboratoriais básicos, cobertura hospitalar com coparticipação.',
                'preco' => 250.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Saúde Plus',
                'cobertura' => 'Consultas com especialistas, exames laboratoriais avançados, internação hospitalar sem coparticipação, atendimento odontológico básico.',
                'preco' => 450.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Saúde Total',
                'cobertura' => 'Consultas ilimitadas com especialistas, exames avançados, internação hospitalar completa, cobertura internacional, atendimento odontológico avançado.',
                'preco' => 750.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
