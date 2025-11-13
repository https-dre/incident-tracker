<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Incidentes do Player</title>
</head>

<body>
  <a href="index.php">Voltar</a>
  <h1>Todos os incidentes registrados no sistema</h1>
  <p>Player: <?= $player['panel_nickname'] ?></p>
  <p>ID Steam: <?= $player['id_steam'] ?></p>
  <p>ID Discord: <?= $player['id_discord'] ?></p>
  <hr>
  
  <?php foreach ($incidents as $i): ?>
    <h2>Incidente: <?= $i['title'] ?></h3>
    <p>Peso na carteira: <?= $i['severity'] ?></p>
    <p>Data do registro: <?= $i['createdAt'] ?></p>
    <p>Data do incidente: <?= $i['happenedIn'] ?></p>
    <h3>Descrição</h2>
    <p><?= $i['description'] ?></p>
    <hr>

  <?php endforeach; ?>
</body>

</html>