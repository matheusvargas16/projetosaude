<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bem-Vindo!</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            *, ::after, ::before {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: 'Figtree', sans-serif;
                background-color: #1F2937; /* Cor de fundo escura */
                color: #fff; /* Texto branco para contraste */
            }

            .container {
                max-width: 1000px;
                margin: 0 auto;
                padding: 2rem;
            }

            .header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 2rem 0;
            }

            .logo {
                font-size: 1.5rem;
                font-weight: bold;
                color: #4F46E5;
            }

            .content {
                text-align: center;
                margin-top: 5rem;
            }

            h1 {
                font-size: 2.5rem;
                font-weight: 700;
                color: #4F46E5;
            }

            p {
                font-size: 1.125rem;
                color: #ddd; /* Texto um pouco mais claro para melhor contraste */
                margin-bottom: 2rem;
            }

            .footer {
                padding: 2rem 0;
                text-align: center;
                font-size: 0.875rem;
                color: #aaa; /* Texto do rodapé em cinza claro */
            }

            /* Custom styles for buttons */
            .btn {
                padding: 0.75rem 1.25rem;
                border-radius: 8px;
                font-weight: 600;
                transition: all 0.3s ease;
            }

            /* Applying the requested classes */
            .btn-primary {
                background-color: #4F46E5; /* Indigo */
                color: white;
                border: 1px solid #D1D5DB; /* border-gray-300 */
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); /* shadow-sm */
                border-radius: 0.375rem; /* rounded */
                transition: all 0.3s;
                outline: 0;
            }

            .btn-primary:hover {
                background-color: #4338CA; /* Darker indigo */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15); /* Slightly stronger shadow */
            }

            .btn-primary:focus {
                ring: 0;
                ring-offset: 2px;
                ring-color: #6366F1; /* focus:ring-indigo-500 */
                ring-offset-color: #1F2937; /* focus:ring-offset-gray-800 */
            }

            .btn-secondary {
                background-color: transparent;
                border: 2px solid #4F46E5;
                color: #4F46E5;
                border-radius: 0.375rem; /* rounded */
                transition: all 0.3s;
            }

            .btn-secondary:hover {
                background-color: #4F46E5;
                color: white;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex flex-col items-center justify-center">
            
            <div class="container">
                <!-- Header -->
                <header class="header">
                    <div class="logo">Logo</div>
                    @if (Route::has('login'))
                        <nav class="flex space-x-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-secondary rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">Register</a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <!-- Content -->
                <div class="content">
                    <h1>Bem-Vindo ao SaúdeTotal</h1>
                    <p>Na SaúdeTotal, acreditamos que a saúde é o bem mais precioso que uma pessoa pode ter. Com anos de experiência no mercado de seguros de saúde, nossa missão é oferecer proteção e tranquilidade para nossos clientes, proporcionando acesso a uma rede ampla de serviços médicos e hospitais de qualidade. Estamos comprometidos em atender às necessidades de cada cliente, com planos personalizados que se adaptam a diferentes estilos de vida e orçamentos. Na SaúdeTotal, você encontra não apenas um seguro, mas uma parceira dedicada à sua saúde e bem-estar, sempre pronta para apoiar você e sua família nos momentos mais importantes.</p>
                </div>

                <!-- Footer -->
                <footer class="footer">
                    &copy; 2024 Seu Site. Todos os direitos reservados.
                </footer>
            </div>

        </div>
    </body>
</html>
