<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Player - iPanel</title>
=
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-900 text-gray-200 antialiased min-h-screen flex flex-col">


    <header
        class="container mx-auto px-6 py-5 flex justify-between items-center z-10 relative border-b border-slate-800">
        <div class="flex items-center space-x-3">

            <svg class="w-8 h-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75L11.25 15 15 9.75M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
            <h1 class="text-2xl font-bold text-white">iPanel</h1>
        </div>
        <nav>

            <a href="index.php"
                class="bg-slate-700 hover:bg-slate-600 text-white font-semibold px-5 py-2 rounded-lg transition-colors duration-200">
                Voltar à Lista
            </a>
        </nav>
    </header>


    <main class="container mx-auto px-6 py-12 flex-grow flex items-center justify-center">


        <div class="w-full max-w-xl">
            <h1 class="text-4xl font-bold text-white mb-8 text-center">Registrar Novo Player</h1>

            <!-- Card do Formulário -->
            <form action="controllers/save_player.php" method="POST"
                class="bg-slate-800 border border-slate-700 rounded-lg shadow-lg p-8 space-y-6">

                <!-- Campo Nickname -->
                <div>
                    <label for="nickname" class="block mb-2 text-sm font-medium text-gray-300">Nickname:</label>
                    <input type="text" id="nickname" name="nickname" required
                        class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                </div>

                <!-- Campo ID Steam -->
                <div>
                    <label for="id_steam" class="block mb-2 text-sm font-medium text-gray-300">ID Steam (Ex:
                        765...):</label>
                    <input type="text" id="id_steam" name="id_steam" required
                        class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                </div>

                <!-- Campo ID Discord (Ex: 123...) -->
                <div>
                    <label for="id_discord" class="block mb-2 text-sm font-medium text-gray-300">ID Discord:</label>
                    <input type="text" id="id_discord" name="id_discord" required
                        class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                </div>

                <!-- Botão de Submissão -->
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-3 rounded-lg text-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-slate-800">
                    Registrar Player
                </button>
            </form>
        </div>
    </main>

    <footer class="container mx-auto px-6 py-10 text-center text-gray-500 border-t border-slate-800">
        <p>&copy; 2025 iPanel. Criado para um ecossistema de jogos mais seguro.</p>
        <p class="text-sm mt-1">Um protótipo de André Dias</p>
    </footer>

</body>

</html>