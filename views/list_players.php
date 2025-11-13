<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players registrados</title>
</head>

<body>
    <h1>Players registrados no Sistema</h1>
    <a href="index.php?action=form">Adicionar player</a> |
    <a href="index.php?action=search">Buscar player</a>
    <table border="1" cellpading="5">
        <tr>
            <th>ID</th>
            <th>Nickname</th>
            <th>ID Steam</th>
            <th>ID Discord</th>
            <th>Moedas</th>
            <th>Pontos na Carteira</th>
            <th>Ação</th>
        </tr>
        <?php foreach ($players as $player): ?>
            <tr>
                <td><?= $player['id'] ?></td>
                <td><?= htmlspecialchars($player['panel_nickname']) ?></td>
                <td><?= htmlspecialchars($player['id_steam']) ?></td>
                <td><?= htmlspecialchars($player['id_discord']) ?></td>
                <td><?= $player['coins'] ?></td>
                <td><?= $player['demerit_points'] ?></td>
                <td>
                    <a href="index.php?action=editar&id=<?= $player['id'] ?>">Editar</a> |
                    <a href="index.php?action=delete&id=<?= $player['id'] ?>"
                        onclick="return confirm('Você realmente deseja excluir esse player?');">Excluir</a> | 
                    <a href="index.php?action=list_incidents&playerId=<?= $player['id'] ?>">Ver incidentes</a> |
                    <a href="index.php?action=add_incident&playerId=<?= $player['id'] ?>">Registrar Incidente</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>