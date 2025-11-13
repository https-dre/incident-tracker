<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados do player</title>
</head>

<body>
  <?php ?>
  <h1>Player encontrado: <?= $result['panel_nickname'] ?></h1>
  <?php ?>
  <table border="1" cellpading="5">
    <tr>
      <th>ID</th>
      <th>ID Steam</th>
      <th>ID Discord</th>
      <th>Moedas</th>
      <th>Pontos na Carteira</th>
    </tr>
    <?php ?>
    <tr>
      <td><?= $result['id'] ?></td>
      <td><?= htmlspecialchars($result['id_steam']) ?></td>
      <td><?= htmlspecialchars(string: $result['id_discord']) ?></td>
      <td><?= $result['coins'] ?></td>
      <td><?= $result['demerit_points'] ?></td>
      <td>
        <a href="index.php?action=editar&id=<?= $player['id'] ?>">Editar</a> |
        <a href="index.php?action=delete&id=<?= $player['id'] ?>"
          onclick="return confirm('Você realmente deseja excluir esse player?');">Excluir</a> |
        <a href="index.php?action=list_incidents&id=<?= $player['id'] ?>">Ver incidentes</a> |
        <a href="index.php?action=add_incident&id=<?= $player['id'] ?>">Registrar Incidente</a>
      </td>
    </tr>
    <?php ?>
  </table>
</body>

</html>