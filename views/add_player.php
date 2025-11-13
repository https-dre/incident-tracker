<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuário</title>
    <style>
        body { font-family: sans-serif; display: grid; place-items: center; min-height: 90vh; }
        form { border: 1px solid #ccc; padding: 20px; border-radius: 8px; }
        div { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { width: 300px; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background-color: #007BFF; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

    <form action="controllers/save_player.php" method="POST">
        <h2>Criar Conta</h2>
        <div>
            <label for="nickname">Nickname:</label>
            <input type="text" id="nickname" name="nickname" required>
        </div>
        <div>
            <label for="id_steam">Id Steam:</label>
            <input type="text" id="id_steam" name="id_steam" required>
        </div>
        <div>
            <label for="id_discord">Id Discord:</label>
            <input type="text" id="id_discord" name="id_discord" required>
        </div>
        <button type="submit">Registrar</button>
    </form>

</body>
</html>