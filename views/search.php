<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Procurar player</title>
</head>

<body>
  <h1>Procurar registro</h1>
  <p>Verifique se um player existe no sistema com seu ID da Steam, Discord ou Painel</p>
  <form action="index.php" method="GET">
    <input type="hidden" name="action" value="player_details">
    <label for="busca">Procurar registro por IDs</label>
    <input type="text" id="busca" name="search_term" />

    <label for="campo">Busca por tipo de ID</label>
    <select name="search_field" id="campo">
      <option value="steam">Steam</option>
      <option value="discord">Discord</option>
      <option value="id">Painel</option>
    </select>
    <button type="submit">Buscar</button>
  </form>
</body>

</html>