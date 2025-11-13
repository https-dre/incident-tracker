<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Registrar incidente</title>
  <style>
    body {
      font-family: sans-serif;
      display: grid;
      place-items: center;
      min-height: 90vh;
    }

    form {
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 8px;
    }

    div {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input {
      width: 300px;
      padding: 8px;
      box-sizing: border-box;
    }

    button {
      padding: 10px 15px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <form action="controllers/save_incident.php
    " method="POST">
    <h2>Criar incidente</h2>
    <p>Player: <?= $player['panel_nickname'] ?></p>
    <p>Steam ID: <?= $player['id_steam'] ?></p>
    <p>Discord ID: <?= $player['id_discord'] ?></p>
    <input type="hidden" id="playerId" name="playerId" value="<?= $player['id'] ?>">
    <div>
      <label for="title">Titulo:</label>
      <input type="text" id="title" name="title" required>
    </div>
    <div>
      <label for="description">Descrição:</label>
      <textarea type="text" id="description" name="description" required></textarea>
    </div>
    <div>
      <label for="happenedIn">Data do Incidente</label>
      <input type="datetime-local" id="happenedIn" name="hapennedIn">
    </div>
    <div>
      <label for="severity">Peso do Incidente</label>
      <input type="number" id="severity" name="severity">
    </div>
    <button type="submit">Registrar</button>
  </form>

</body>

</html>