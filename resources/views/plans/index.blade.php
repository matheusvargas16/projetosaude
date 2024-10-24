<x-app-layout>
    <div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Planos de Saúde Disponíveis</h1>
        
        <form id="compare-form" action="{{ route('plans.compare') }}" method="POST" class="space-y-4">
            @csrf
            <div class="plan-list space-y-4">
                @foreach ($plans as $plan)
                    <div class="flex items-center p-2 border rounded-md hover:bg-gray-100 transition duration-200">
                        <input type="checkbox" name="plans[]" value="{{ $plan->id }}" id="plan-{{ $plan->id }}" class="mr-2">
                        <label for="plan-{{ $plan->id }}" class="text-lg">{{ $plan->nome }} - R${{ number_format($plan->preco, 2, ',', '.') }}</label>
                    </div>
                @endforeach
            </div>
            <button type="submit" class="w-full bg-green-500 text-black font-semibold py-3 rounded-lg shadow-md hover:bg-green-600 transition duration-200">
                Comparar Planos Selecionados
            </button>
        </form>
        
        <div id="alert" class="hidden mt-4 text-red-600 text-center"></div>
    </div>

    <script>
        document.getElementById('compare-form').addEventListener('submit', function(event) {
            const checkedCheckboxes = document.querySelectorAll('input[name="plans[]"]:checked');
            if (checkedCheckboxes.length < 2) {
                event.preventDefault(); // Impede o envio do formulário
                const alertDiv = document.getElementById('alert');
                alertDiv.innerText = 'Por favor, selecione pelo menos 2 planos para comparar.';
                alertDiv.classList.remove('hidden'); // Mostra a mensagem de alerta
            } else {
                document.getElementById('alert').classList.add('hidden'); // Esconde a mensagem se a validação passar
            }
        });
    </script>
</x-app-layout>
