<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Incidentes do Player - iPanel</title>
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

      <a href="index.php?action=players"
        class="bg-slate-700 hover:bg-slate-600 text-white font-semibold px-5 py-2 rounded-lg transition-colors duration-200">
        Voltar à Lista de Players
      </a>
    </nav>
  </header>

  <main class="container mx-auto px-6 py-12 flex-grow">

    <h1 class="text-4xl font-bold text-white mb-6">Histórico de Incidentes</h1>

    <div class="bg-slate-800 border border-slate-700 rounded-lg shadow-lg p-6 mb-10">
      <h2 class="text-2xl font-semibold text-white mb-4">Informações do Player</h2>
      <div classs="grid grid-cols-1 md:grid-cols-3 gap-4">
        <p><span class="font-medium text-gray-400">Player:</span> <span
            class="text-blue-400 font-bold text-lg"><?= $player['panel_nickname'] ?></span></p>
        <p><span class="font-medium text-gray-400">ID Steam:</span> <span
            class="text-gray-300"><?= $player['id_steam'] ?></span></p>
        <p><span class="font-medium text-gray-400">ID Discord:</span> <span
            class="text-gray-300"><?= $player['id_discord'] ?></span></p>
      </div>
    </div>

    <hr class="border-slate-700 mb-10">
    <div class="space-y-6">
      <?php foreach ($incidents as $i): ?>

        <div class="bg-slate-800 border border-slate-700 rounded-lg shadow-md overflow-hidden">

          <div class="bg-slate-700/50 p-4 border-b border-slate-700 flex justify-between items-center">
            <h2 class="text-2xl font-semibold text-white"><?= htmlspecialchars($i['title']) ?></h3>
              <span class="text-sm font-bold px-3 py-1 rounded-full 
              <?php
              // Color-coding da severidade
              if ($i['severity'] > 7)
                echo 'bg-red-700 text-red-100';
              elseif ($i['severity'] > 4)
                echo 'bg-yellow-600 text-yellow-100';
              else
                echo 'bg-gray-600 text-gray-100';
              ?>">
                Peso: <?= $i['severity'] ?>
              </span>
          </div>

          <!-- Corpo do Card -->
          <div class="p-6">
            <!-- Datas -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 text-sm text-gray-400">
              <p><span class="font-medium">Data do Incidente:</span> <?= $i['happenedIn'] ?></p>
              <p><span class="font-medium">Data do Registro:</span> <?= $i['createdAt'] ?></p>
            </div>

            <!-- Descrição -->
            <h3 class="text-lg font-semibold text-gray-300 mb-2">Descrição do Ocorrido</h2>
              <p class="text-gray-300 leading-relaxed prose prose-invert max-w-none">
                <?= nl2br(htmlspecialchars($i['description'])) // nl2br para manter quebras de linha ?>
              </p>
          </div>

        </div>
      <?php endforeach; ?>

      <?php if (empty($incidents)): ?>
        <!-- Mensagem caso não haja incidentes -->
        <div class="bg-slate-800 border border-slate-700 rounded-lg p-10 text-center">
          <svg class="w-16 h-16 text-green-500 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h2 class="text-2xl font-semibold text-white">Tudo limpo!</h2>
          <p class="text-gray-400 mt-2">Este player ainda não possui nenhum incidente registrado no sistema.</p>
        </div>
      <?php endif; ?>
    </div>

  </main>

  <footer class="container mx-auto px-6 py-10 text-center text-gray-500 border-t border-slate-800">
    <p>&copy; 2025 iPanel. Criado para um ecossistema de jogos mais seguro.</p>
    <p class="text-sm mt-1">Um protótipo de André Dias</p>
  </footer>

</body>

</html>