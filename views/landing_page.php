<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iPanel - Painel de Moderação</title>
  <!-- Carrega o Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Carrega a fonte Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    /* Define a fonte Inter como padrão */
    body {
      font-family: 'Inter', sans-serif;
    }

    /* Efeito de "aurora" para o fundo */
    .hero-aurora {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: radial-gradient(ellipse at 50% 0%, rgba(29, 78, 216, 0.15), transparent 60%);
      z-index: 0;
      pointer-events: none;
    }
  </style>
</head>

<body class="bg-slate-900 text-gray-200 antialiased">


  <header class="container mx-auto px-6 py-5 flex justify-between items-center z-10 relative">
    <div class="flex items-center space-x-3">

      <svg class="w-8 h-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
        stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M9 12.75L11.25 15 15 9.75M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
      </svg>
      <h1 class="text-2xl font-bold text-white">iPanel</h1>
    </div>
    <nav>
      <a href="index.php?action=players"
        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg transition-colors duration-200">
        Acessar Painel
      </a>
    </nav>
  </header>


  <main class="relative z-10">
    <div class="hero-aurora"></div>
    <section class="container mx-auto px-6 pt-24 pb-32 text-center relative">
      <h2
        class="text-5xl md:text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-white to-blue-300 leading-tight">
        Moderação de Comunidade,
        <br>
        finalmente organizada.
      </h2>
      <p class="mt-6 text-lg text-gray-300 max-w-2xl mx-auto">
        Pare de gerenciar banimentos em chats de admin. Centralize, rastreie e proteja sua comunidade com um painel de
        incidentes dedicado.
      </p>
      <div class="mt-10 flex justify-center gap-4">
        <a href="index.php?action=players"
          class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-3 rounded-lg text-lg transition-colors duration-200">
          Ir para o Dashboard
        </a>
        <a href="#features"
          class="bg-slate-700 hover:bg-slate-600 text-gray-200 font-semibold px-8 py-3 rounded-lg text-lg transition-colors duration-200">
          Saber Mais
        </a>
      </div>
    </section>

    <section class="bg-slate-950/50 backdrop-blur-sm py-20">
      <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center">
          <!-- Coluna da Esquerda: Descrição do Problema -->
          <div>
            <span class="text-sm font-semibold text-blue-400 uppercase">O Problema</span>
            <h3 class="text-3xl font-bold text-white mt-2">O Caos dos Registros no Discord</h3>
            <p class="text-gray-300 mt-4 leading-relaxed">
              Atualmente, a maioria das comunidades de jogos (como Next Level e Prelude Realismo) registra banimentos e
              reports em chats de administração.
            </p>
            <ul class="mt-4 space-y-2 list-inside">
              <li class="flex items-start">
                <svg class="w-5 h-5 text-red-500 mr-2 mt-1 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <span>Informações se perdem em meio a milhares de mensagens.</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 text-red-500 mr-2 mt-1 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <span>Impossível mapear o histórico de um player "problemático".</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 text-red-500 mr-2 mt-1 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <span>Falta de um "tribunal" centralizado para consultar dados.</span>
              </li>
            </ul>
          </div>
          <!-- Coluna da Direita: Visual -->
          <div class="bg-slate-800 p-6 rounded-lg border border-slate-700 shadow-xl">
            <div class="flex items-center space-x-2">
              <div class="w-3 h-3 bg-red-500 rounded-full"></div>
              <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
              <div class="w-3 h-3 bg-green-500 rounded-full"></div>
            </div>
            <p class="mt-4 font-mono text-sm text-gray-400">#canal-de-banimentos</p>
            <div class="mt-2 p-3 bg-slate-900 rounded-md">
              <p class="font-mono text-xs text-red-400">
                <span class="text-blue-400">Admin_01:</span> Ban no Player_XYZ (Steam: 765...) por RDM.
              </p>
              <p class="font-mono text-xs text-gray-500 mt-2">
                <span class="text-blue-400">Admin_02:</span> Ok, anotado.
              </p>
              <p class="font-mono text-xs text-red-400 mt-2">
                <span class="text-blue-400">Admin_01:</span> Reportaram o Player_ABC (Discord: 987...). Assédio.
              </p>
            </div>
            <p class="text-center text-gray-500 italic mt-4 text-sm">...milhares de mensagens depois...</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Seção Features (Recursos) -->
    <section id="features" class="container mx-auto px-6 py-24">
      <div class="text-center max-w-2xl mx-auto">
        <span class="text-sm font-semibold text-blue-400 uppercase">A Solução</span>
        <h3 class="text-4xl font-bold text-white mt-2">Um Painel de Controle Unificado</h3>
        <p class="text-gray-300 mt-4 leading-relaxed">
          Este protótipo (PHP + MySQL) tira a moderação do Discord e a leva para um ambiente profissional, focado em
          dados e histórico.
        </p>
      </div>

      <div class="mt-16 grid md:grid-cols-3 gap-8">
        <!-- Card 1: Registrar Players -->
        <div
          class="bg-slate-800 p-6 rounded-lg border border-slate-700 transform transition-transform hover:-translate-y-2">
          <div class="bg-blue-600/20 text-blue-400 w-12 h-12 rounded-lg flex items-center justify-center">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M18 18.72a9.094 9.094 0 00-12.728 0M12 3C7.031 3 3 7.031 3 12s4.031 9 9 9 9-4.031 9-9-4.031-9-9-9zM12 15a3 3 0 100-6 3 3 0 000 6z" />
            </svg>
          </div>
          <h4 class="text-xl font-semibold text-white mt-5">Registro de Players</h4>
          <p class="text-gray-300 mt-2">
            Cadastre players de forma centralizada, vinculando suas IDs do Steam e Discord para um mapeamento completo.
          </p>
        </div>

        <!-- Card 2: Criar Incidentes -->
        <div
          class="bg-slate-800 p-6 rounded-lg border border-slate-700 transform transition-transform hover:-translate-y-2">
          <div class="bg-blue-600/20 text-blue-400 w-12 h-12 rounded-lg flex items-center justify-center">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126z" />
            </svg>
          </div>
          <h4 class="text-xl font-semibold text-white mt-5">Relatórios de Incidentes</h4>
          <p class="text-gray-300 mt-2">
            Registre ocorrências detalhadas: tipo de infração, grau de severidade, provas (links, imagens) e descrição
            completa.
          </p>
        </div>

        <!-- Card 3: Histórico Detalhado -->
        <div
          class="bg-slate-800 p-6 rounded-lg border border-slate-700 transform transition-transform hover:-translate-y-2">
          <div class="bg-blue-600/20 text-blue-400 w-12 h-12 rounded-lg flex items-center justify-center">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M19.5 12.572l-4.903 4.903A4.5 4.5 0 0111.186 19H7.5a.5.5 0 01-.5-.5V14.814a4.5 4.5 0 011.318-3.186l4.903-4.903m-2.652 2.652l2.652-2.652" />
            </svg>
          </div>
          <h4 class="text-xl font-semibold text-white mt-5">Histórico e Mapeamento</h4>
          <p class="text-gray-300 mt-2">
            Consulte o histórico completo de um player. Administradores podem tomar decisões baseadas em dados, não em
            "achismo".
          </p>
        </div>
      </div>
    </section>

    <!-- Seção CTA (Call to Action) -->
    <section class="container mx-auto px-6 py-24 text-center bg-slate-800 rounded-lg border border-slate-700">
      <h3 class="text-3xl font-bold text-white">Comece a Usar o Protótipo</h3>
      <p class="text-gray-300 mt-4 max-w-xl mx-auto">
        Acesse as funcionalidades que já estão prontas e veja como o sistema funciona na prática.
      </p>
      <div class="mt-8 flex flex-wrap justify-center gap-4">
        <!-- Links para suas páginas existentes -->
        <a href="index.php?action=players"
          class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition-colors duration-200">
          Ver Tabela de Players
        </a>
        <a href="add_player.php"
          class="bg-slate-600 hover:bg-slate-500 text-gray-200 font-semibold px-6 py-3 rounded-lg transition-colors duration-200">
          Adicionar Novo Player
        </a>
        <a href="add_incident.php"
          class="bg-slate-600 hover:bg-slate-500 text-gray-200 font-semibold px-6 py-3 rounded-lg transition-colors duration-200">
          Registrar Novo Incidente
        </a>
      </div>
    </section>
  </main>

  <footer class="container mx-auto px-6 py-10 mt-20 text-center text-gray-500 border-t border-slate-800">
    <p>&copy; 2025 iPanel. Criado para um ecossistema de jogos mais seguro.</p>
    <p class="text-sm mt-1">Um protótipo de André Dias</p>
  </footer>

</body>

</html>