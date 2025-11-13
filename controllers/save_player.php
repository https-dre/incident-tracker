<?php

require_once __DIR__ . "/../models/player.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $nick = $_POST["nickname"];
  $id_steam = $_POST["id_steam"];
  $id_discord = $_POST["id_discord"];
  $playerWithDiscord = findPlayerByDiscordId($id_discord);
  $playerWithSteam = findPlayerBySteamId($id_steam);
  if(isset($playerWithDiscord)) {
    echo '<script>alert("ID do Discord já registrado!");</script>';
    return;
  }
  if(isset($playerWithSteam)) {
    echo '<script>alert("ID da Steam já registrado!");</script>';
  }
  
  addPlayer($id_discord, $id_steam, $nick);
  echo "Player registrado.";
  header("Location: ../index.php");
  exit();
}