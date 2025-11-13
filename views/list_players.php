<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players Registrados - iPanel</title>

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

    <header class="container mx-auto px-6 py-5 flex justify-between items-center z-10 relative border-b border-slate-800">
        <div class="flex items-center space-x-3">
            <svg class="w-8 h-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
            <h1 class="text-2xl font-bold text-white">iPanel</h1>
        </div>
        <nav class="flex items-center space-x-6">
            <a href="index.php?action=form" class="text-gray-300 hover:text-white font-medium transition-colors">Adicionar Player</a>
            <a href="index.php?action=search" class="text-gray-300 hover:text-white font-medium transition-colors">Buscar Player</a>
            <a href="landing_page.html" class="bg-slate-700 hover:bg-slate-600 text-white font-semibold px-5 py-2 rounded-lg transition-colors duration-200">
                Voltar à Landing Page
            </a>
        </nav>
    </header>


    <main class="container mx-auto px-6 py-12 flex-grow">
        <h1 class="text-4xl font-bold text-white mb-8">Players Registrados no Sistema</h1>

        <div class="bg-slate-800 border border-slate-700 rounded-lg shadow-lg overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-700">
                    <tr>
                        <th class="p-4 text-sm font-semibold text-gray-300 uppercase tracking-wider">ID</th>
                        <th class="p-4 text-sm font-semibold text-gray-300 uppercase tracking-wider">Nickname</th>
                        <th class="p-4 text-sm font-semibold text-gray-300 uppercase tracking-wider">ID Steam</th>
                        <th class="p-4 text-sm font-semibold text-gray-300 uppercase tracking-wider">ID Discord</th>
                        <th class="p-4 text-sm font-semibold text-gray-300 uppercase tracking-wider">Moedas</th>
                        <th class="p-4 text-sm font-semibold text-gray-300 uppercase tracking-wider">Pontos</th>
                        <th class="p-4 text-sm font-semibold text-gray-300 uppercase tracking-wider">Ação</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-700">
                    <?php foreach ($players as $player): ?>
                        <tr class="hover:bg-slate-700/50 transition-colors">
                            <td class="p-4 whitespace-nowrap text-gray-400"><?= $player['id'] ?></td>
                            <td class="p-4 whitespace-nowrap font-medium text-white"><?= htmlspecialchars($player['panel_nickname']) ?></td>
                            <td class="p-4 whitespace-nowrap text-gray-400"><?= htmlspecialchars($player['id_steam']) ?></td>
                            <td class="p-4 whitespace-nowrap text-gray-400"><?= htmlspecialchars($player['id_discord']) ?></td>
                            <td class="p-4 whitespace-nowrap text-yellow-400"><?= $player['coins'] ?></td>
                            <td class="p-4 whitespace-nowrap text-red-400 font-semibold"><?= $player['demerit_points'] ?></td>
                            <td class="p-4 whitespace-nowrap space-x-2 text-sm">
                                <!-- Links de Ação Estilizados -->
                                <a href="index.php?action=editar&id=<?= $player['id'] ?>" class="text-blue-400 hover:text-blue-300 transition-colors font-medium">Editar</a>
                                <span class="text-slate-600">|</span>
                                <a href="index.php?action=delete&id=<?= $player['id'] ?>"
                                    onclick="return confirm('Você realmente deseja excluir esse player?');" class="text-red-400 hover:text-red-300 transition-colors font-medium">Excluir</a>
                                <span class="text-slate-600">|</span>
                                <a href="index.php?action=list_incidents&playerId=<?= $player['id'] ?>" class="text-green-400 hover:text-green-300 transition-colors font-medium">Ver incidentes</a>
                                <span class="text-slate-600">|</span>
                                <a href="index.php?action=add_incident&playerId=<?= $player['id'] ?>" class="text-yellow-400 hover:text-yellow-300 transition-colors font-medium">Registrar Incidente</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer class="container mx-auto px-6 py-10 text-center text-gray-500 border-t border-slate-800">
        <p>&copy; 2025 iPanel. Criado para um ecossistema de jogos mais seguro.</p>
        <p class="text-sm mt-1">Um protótipo de André Dias</p>
    </footer>

</body>
</html>