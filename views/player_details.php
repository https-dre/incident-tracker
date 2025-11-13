<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados do Player - iPanel</title>
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

      <svg class="w-8 h-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
        stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M9 12.75L11.25 15 15 9.75M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
      </svg>
      <h1 class="text-2xl font-bold text-white">iPanel</h1>
    </div>
    <nav class="flex items-center space-x-6">
      <a href="index.php?action=search" class="text-gray-300 hover:text-white font-medium transition-colors">Nova
        Busca</a>
      <a href="index.php"
        class="bg-slate-700 hover:bg-slate-600 text-white font-semibold px-5 py-2 rounded-lg transition-colors duration-200">
        Voltar à Lista
      </a>
    </nav>
  </header>

  <main class="container mx-auto px-6 py-12 flex-grow flex items-center justify-center">

    <!-- Card Centralizado -->
    <div class="w-full max-w-2xl">
      <h1 class="text-4xl font-bold text-white mb-8 text-center">Player Encontrado</h1>

      <!-- Card de Perfil -->
      <div class="bg-slate-800 border border-slate-700 rounded-lg shadow-lg overflow-hidden">

        <!-- Header do Card -->
        <div class="p-8 text-center bg-slate-800">
          <h2 class="text-3xl font-bold text-blue-400"><?= $result['panel_nickname'] ?></h2>
        </div>

        <!-- Detalhes do Player -->
        <div class="p-8 border-t border-slate-700 space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 text-lg">
            <div>
              <span class="block text-sm font-medium text-gray-400">ID Painel</span>
              <span class="text-gray-200 font-semibold"><?= $result['id'] ?></span>
            </div>
            <div>
              <span class="block text-sm font-medium text-gray-400">ID Steam</span>
              <span class="text-gray-200 font-semibold"><?= htmlspecialchars($result['id_steam']) ?></span>
            </div>
            <div>
              <span class="block text-sm font-medium text-gray-400">ID Discord</span>
              <span class="text-gray-200 font-semibold"><?= htmlspecialchars($result['id_discord']) ?></span>
            </div>
            <div>
              <span class="block text-sm font-medium text-gray-400">Moedas</span>
              <span class="text-yellow-400 font-semibold"><?= $result['coins'] ?></span>
            </div>
          </div>

          <div class="pt-4">
            <span class="block text-sm font-medium text-gray-400">Pontos na Carteira</span>
            <span class="text-red-400 font-bold text-3xl"><?= $result['demerit_points'] ?></span>
          </div>
        </div>

        <div class="p-6 bg-slate-700/50 border-t border-slate-700">
          <h3 class="text-lg font-semibold text-white mb-4 text-center">Ações do Administrador</h3>
          <div class="flex flex-wrap justify-center gap-4">
            <a href="index.php?action=list_incidents&playerId=<?= $result['id'] ?>"
              class="px-5 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white font-medium transition-colors">
              Ver Incidentes
            </a>
            <a href="index.php?action=add_incident&playerId=<?= $result['id'] ?>"
              class="px-5 py-2 rounded-lg bg-yellow-500 hover:bg-yellow-600 text-slate-900 font-medium transition-colors">
              Registrar Incidente
            </a>
            <a href="index.php?action=editar&id=<?= $result['id'] ?>"
              class="px-5 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-medium transition-colors">
              Editar
            </a>
            <a href="index.php?action=delete&id=<?= $result['id'] ?>"
              onclick="return confirm('Você realmente deseja excluir esse player?');"
              class="px-5 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white font-medium transition-colors">
              Excluir
            </a>
          </div>
        </div>

      </div>

    </div>
  </main>
  
  <footer class="container mx-auto px-6 py-10 text-center text-gray-500 border-t border-slate-800">
    <p>&copy; 2025 iPanel. Criado para um ecossistema de jogos mais seguro.</p>
    <p class="text-sm mt-1">Um protótipo de André Dias</p>
  </footer>

</body>

</html>