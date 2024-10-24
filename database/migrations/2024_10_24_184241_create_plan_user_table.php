<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanUserTable extends Migration
{
    public function up()
    {
        Schema::create('plan_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relacionamento com a tabela de usuários
            $table->foreignId('plan_id')->constrained()->onDelete('cascade'); // Relacionamento com a tabela de planos
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plan_user');
    }
}
