<x-app-layout>
    <div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Comparação de Planos de Saúde</h1>
        
        @if(!empty($selectedPlans))
            <table class="min-w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 p-4 text-left">Nome do Plano</th>
                        <th class="border border-gray-300 p-4 text-left">Preço</th>
                        <th class="border border-gray-300 p-4 text-left">Cobertura</th> <!-- Alterado para Cobertura -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($selectedPlans as $planId)
                        @php
                            $plan = \App\Models\Plan::find($planId);
                        @endphp
                        @if($plan)
                            <tr>
                                <td class="border border-gray-300 p-4">{{ $plan->nome }}</td>
                                <td class="border border-gray-300 p-4">R${{ number_format($plan->preco, 2, ',', '.') }}</td>
                                <td class="border border-gray-300 p-4">{{ $plan->cobertura }}</td> <!-- Exibe a cobertura do plano -->
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-red-600">Nenhum plano selecionado para comparação.</p>
        @endif

        <div class="mt-6">
            <a href="{{ route('plans.index') }}" class="text-blue-500 hover:underline">Voltar para a lista de planos</a>
        </div>
    </div>
</x-app-layout>
