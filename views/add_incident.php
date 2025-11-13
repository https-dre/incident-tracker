<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Incidente - Guardião Comunitário</title>
  <!-- Carrega o Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Carrega a fonte Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    input[type="datetime-local"]::-webkit-calendar-picker-indicator {
      filter: invert(0.8);
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
      <h1 class="text-2xl font-bold text-white">Guardião Comunitário</h1>
    </div>
    <nav>
      <a href="index.php?action=list_incidents&playerId=<?= $player['id'] ?>"
        class="bg-slate-700 hover:bg-slate-600 text-white font-semibold px-5 py-2 rounded-lg transition-colors duration-200">
        Voltar ao Histórico
      </a>
    </nav>
  </header>


  <main class="container mx-auto px-6 py-12 flex-grow flex items-center justify-center">

    <div class="w-full max-w-2xl">
      <h1 class="text-4xl font-bold text-white mb-6 text-center">Registrar Novo Incidente</h1>

      <div class="bg-slate-800 border border-slate-700 rounded-lg shadow-lg p-6 mb-8">
        <h2 class="text-xl font-semibold text-white mb-4">Registrando para o Player:</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-2">
          <p><span class="font-medium text-gray-400">Nickname:</span> <span
              class="text-blue-400 font-bold"><?= $player['panel_nickname'] ?></span></p>
          <p><span class="font-medium text-gray-400">Steam ID:</span> <span
              class="text-gray-300"><?= $player['id_steam'] ?></span></p>
          <p><span class="font-medium text-gray-400">Discord ID:</span> <span
              class="text-gray-300"><?= $player['id_discord'] ?></span></p>
        </div>
      </div>

      <!-- Card do Formulário -->
      <form action="controllers/save_incident.php" method="POST"
        class="bg-slate-800 border border-slate-700 rounded-lg shadow-lg p-8 space-y-6">

        <!-- Input Oculto do Player ID -->
        <input type="hidden" id="playerId" name="playerId" value="<?= $player['id'] ?>">

        <!-- Campo Título -->
        <div>
          <label for="title" class="block mb-2 text-sm font-medium text-gray-300">Título do Incidente:</label>
          <input type="text" id="title" name="title" required
            class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
        </div>

        <!-- Campo Descrição -->
        <div>
          <label for="description" class="block mb-2 text-sm font-medium text-gray-300">Descrição Detalhada:</label>
          <textarea id="description" name="description" rows="6" required
            class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"></textarea>
        </div>

        <!-- Linha com Data e Severidade -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Campo Data do Incidente -->
          <div>
            <label for="happenedIn" class="block mb-2 text-sm font-medium text-gray-300">Data do Incidente:</label>
            <input type="datetime-local" id="happenedIn" name="happenedIn"
              class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
          </div>

          <!-- Campo Severidade -->
          <div>
            <label for="severity" class="block mb-2 text-sm font-medium text-gray-300">Peso do Incidente
              (Pontos):</label>
            <input type="number" id="severity" name="severity" min="0"
              class="w-full px-4 py-3 bg-slate-700 border border-slate-600 rounded-lg text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
          </div>
        </div>

        <button type="submit"
          class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-3 rounded-lg text-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-slate-800">
          Registrar Incidente
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