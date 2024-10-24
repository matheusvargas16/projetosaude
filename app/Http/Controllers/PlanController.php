<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    /**
     * Exibe a lista de planos de saúde disponíveis.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Pega todos os planos cadastrados no banco de dados
        $plans = Plan::all();

        // Retorna a view com a lista de planos
        return view('plans.index', compact('plans'));
    }

    /**
     * Exibe a comparação entre os planos selecionados.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function compare(Request $request)
    {
        $request->validate([
            'plans' => 'required|array|min:2',
            'plans.*' => 'exists:plans,id',
        ]);

        // Processar a comparação dos planos
        $selectedPlans = $request->input('plans');

        // Retorna a view com os planos selecionados
        return view('comparison.result', compact('selectedPlans'));
    }

}
