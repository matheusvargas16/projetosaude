<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Você entrou! Site ainda em desenvolvimento! Obrigado pela confiança.") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto text-center mt-10">
        <h1 class="text-2xl font-bold mb-4">Bem-vindo ao Painel de Controle</h1>
        
        <!-- Botão para Ver Planos de Saúde -->
        <div class="mt-4">
            <a href="{{ route('plans.index') }}" class="inline-block px-6 py-3 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md transition duration-300">
                Ver Planos de Saúde
            </a>
        </div>
    </div>
</x-app-layout>
