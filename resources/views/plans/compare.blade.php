<x-app-layout>
    <div class="container">
        <h1>Comparação de Planos</h1>
        <table>
            <thead>
                <tr>
                    <th>Plano</th>
                    <th>Cobertura</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                    <tr>
                        <td>{{ $plan->nome }}</td>
                        <td>{{ $plan->cobertura }}</td>
                        <td>R${{ $plan->preco }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
